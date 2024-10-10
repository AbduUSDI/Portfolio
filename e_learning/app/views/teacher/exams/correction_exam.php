<?php

session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un administrateur
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 2) {
    header('Location: /Portfolio/e_learning/login');
    exit;
}

// Gestion de la durée de la session
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $sessionLifetime)) {
    session_unset();
    session_destroy();
    header('Location: /Portfolio/e_learning/login');
    exit;
}

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

$_SESSION['LAST_ACTIVITY'] = time();

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$authController = new \Controllers\AuthController($db);
$examController = new \Controllers\ExamController($db);
$submissionController = new \Controllers\ExamSubmissionController($db);

// Vérifiez que l'utilisateur est connecté et qu'il est un formateur

// Gestion des actions POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Soumission de feedback
    if (isset($_POST['submission_id'], $_POST['feedback_message'])) {
        $submissionId = $_POST['submission_id'];
        $message = $_POST['feedback_message'];
        $audioPath = null;

        // Gérer le téléchargement de l'audio depuis un fichier
        if (isset($_FILES['audio_file']) && $_FILES['audio_file']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = '/uploads/audio/';
            $fileName = basename($_FILES['audio_file']['name']);
            $audioPath = $uploadDir . $fileName;
            move_uploaded_file($_FILES['audio_file']['tmp_name'], '../../../../public' . $audioPath);
        }

        // Gérer l'audio enregistré via MediaRecorder
        if (isset($_POST['recorded_audio']) && !empty($_POST['recorded_audio'])) {
            $audioData = base64_decode($_POST['recorded_audio']);
            $fileName = 'recorded_audio_' . time() . '.mp3';
            $audioPath = '/uploads/audio/' . $fileName;
            file_put_contents('../../../../public' . $audioPath, $audioData);
        }

        // Soumettre le feedback
        $examController->submitFeedback($submissionId, $message, $audioPath);
        $feedbackMessage = "Feedback envoyé avec succès.";
    }
}

// Récupérer les soumissions d'examen
$examId = isset($_GET['exam_id']) ? $_GET['exam_id'] : null;
$submissions = $examId ? $submissionController->getSubmissionsByExam($examId) : [];

include_once '../../../../public/templates/header.php';
include_once '../navbar_teacher.php';
?>

<div class="container mt-5">
    <h1 class="text-white">Correction des Soumissions</h1>

    <form method="GET" action="/Portfolio/e_learning/teacher/correction">
        <div class="form-group">
            <label class="text-white" for="exam_id">Sélectionner un examen</label>
            <select class="form-control" id="exam_id" name="exam_id" onchange="this.form.submit()">
                <option value="" disabled selected>Choisir un examen</option>
                <?php $exams = $examController->getExams(); ?>
                <?php foreach ($exams as $exam): ?>
                    <option value="<?php echo $exam['id']; ?>" <?php echo $exam['id'] == $examId ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($exam['title']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </form>

    <hr>

    <?php if ($examId && count($submissions) > 0): ?>
        <h2 class="text-white">Soumissions pour l'examen sélectionné</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Étudiant</th>
                        <th>Fichier</th>
                        <th>Date de Soumission</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($submissions as $submission): ?>
                        <?php
                        // Vérifier si la soumission a déjà été corrigée
                        $feedback = $examController->getFeedbackBySubmissionId($submission['id']);
                        $isCorrected = !empty($feedback);
                        ?>
                        <tr class="<?php echo $isCorrected ? 'corrected' : ''; ?>">
                            <td><?php echo htmlspecialchars($submission['username']); ?></td>
                            <td><a href="/Portfolio/e_learning/public<?php echo htmlspecialchars($submission['file_path']); ?>" target="_blank">Télécharger</a></td>
                            <td><?php echo htmlspecialchars($submission['submitted_at']); ?></td>
                            <td>
                                <?php if ($isCorrected): ?>
                                    <p class="corrected-message">Corrigé</p>
                                <?php endif; ?>
                                <form action="/Portfolio/e_learning/teacher/correction?exam_id=<?php echo $examId; ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="submission_id" value="<?php echo $submission['id']; ?>">
                                    <div class="form-group">
                                        <textarea class="form-control" name="feedback_message" rows="2" placeholder="Entrez votre message de feedback ici"><?php echo $isCorrected ? htmlspecialchars($feedback['message']) : ''; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="audio_file">Ajouter un fichier audio (facultatif)</label>
                                        <input type="file" class="form-control-file" id="audio_file" name="audio_file" accept="audio/*">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="startRecording" class="btn btn-secondary">Enregistrer Audio</button>
                                        <button type="button" id="stopRecording" class="btn btn-danger" disabled>Arrêter</button>
                                    </div>
                                    <audio id="audioPlayback" controls style="display: none;"></audio>
                                    <input type="hidden" id="recordedAudio" name="recorded_audio">
                                    <button type="submit" class="btn btn-primary" <?php echo $isCorrected ? 'disabled' : ''; ?>><?php echo $isCorrected ? 'Feedback déjà soumis' : 'Envoyer le feedback'; ?></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php elseif ($examId): ?>
        <p class="text-white">Aucune soumission pour cet examen.</p>
    <?php else: ?>
        <p class="text-white">Veuillez sélectionner un examen pour voir les soumissions.</p>
    <?php endif; ?>
</div>

<script>
let mediaRecorder;
let audioChunks = [];

document.getElementById('startRecording').addEventListener('click', async () => {
    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
    mediaRecorder = new MediaRecorder(stream);
    mediaRecorder.start();
    audioChunks = [];

    document.getElementById('startRecording').disabled = true;
    document.getElementById('stopRecording').disabled = false;

    mediaRecorder.ondataavailable = event => {
        audioChunks.push(event.data);
    };

    mediaRecorder.onstop = () => {
        const audioBlob = new Blob(audioChunks, { type: 'audio/mp3' });
        const audioUrl = URL.createObjectURL(audioBlob);

        const audioPlayback = document.getElementById('audioPlayback');
        audioPlayback.src = audioUrl;
        audioPlayback.style.display = 'block';

        const reader = new FileReader();
        reader.readAsDataURL(audioBlob);
        reader.onloadend = () => {
            const base64data = reader.result.split(',')[1];
            document.getElementById('recordedAudio').value = base64data;
        };

        document.getElementById('startRecording').disabled = false;
        document.getElementById('stopRecording').disabled = true;
    };
});

document.getElementById('stopRecording').addEventListener('click', () => {
    mediaRecorder.stop();
});
</script>

<?php include '../../../../public/templates/footer.php'; ?>
