<?php
session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un étudiant
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 3) {
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

$_SESSION['LAST_ACTIVITY'] = time();

// Vérifiez que l'utilisateur est connecté et qu'il est un étudiant
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$examController = new \Controllers\ExamController($db);
$examSubmissionController = new \Controllers\ExamSubmissionController($db);

// Récupérer la liste des formations de l'étudiant
$formations = $examController->getFormationsByStudent($user['id']);

// Récupérer les examens associés à la formation sélectionnée
$selectedFormation = isset($_GET['formation_id']) ? $_GET['formation_id'] : null;
$exams = $selectedFormation ? $examController->getAllExamsByFormation($selectedFormation) : null;

// Gestion de la soumission d'examen
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['submission_file'])) {
    $examId = $_POST['exam_id'];
    $uploadDir = '../../../../public/uploads/student_submissions/';
    $fileName = basename($_FILES['submission_file']['name']);
    $uploadFile = $uploadDir . $fileName;
    $uploadOk = 1;

    // Vérification du fichier PDF
    $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    if ($fileType != "pdf") {
        $message = "Désolé, seuls les fichiers PDF sont autorisés.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['submission_file']['tmp_name'], $uploadFile)) {
            // Enregistrer uniquement le chemin relatif
            $relativeFilePath = '/uploads/student_submissions/' . $fileName;
            $examSubmissionController->submitExam($examId, $user['id'], $relativeFilePath);
            $message = "Dépôt correctement effectué, un formateur va la corriger et vous envoyer la correction.";
        } else {
            $message = "Désolé, une erreur est survenue lors du téléchargement de votre fichier.";
        }
    }
}

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';
?>

<div class="container mt-5 containerr rounded">
    <?php if ($message): ?>
        <div class="alert <?php echo strpos($message, 'Dépôt correctement effectué') !== false ? 'alert-success' : 'alert-error'; ?>">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <h2 class="text-white">Sélectionnez une formation</h2>
    
    <!-- Formulaire de sélection de formation -->
    <form method="GET" action="/Portfolio/e_learning/student/exams">
        <div class="form-group">
            <label class="text-white" for="formation">Formation</label>
            <select class="form-control" id="formation" name="formation_id" required onchange="this.form.submit()">
                <option value="" disabled selected>Choisir une formation</option>
                <?php while ($formation = $formations->fetch(PDO::FETCH_ASSOC)) : ?>
                    <option value="<?php echo $formation['id']; ?>" <?php echo $formation['id'] == $selectedFormation ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars_decode($formation['name']); ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
    </form>

    <hr>

    <?php if ($selectedFormation && $exams) : ?>
        <h2 class="text-white">Examens disponibles</h2>
        
        <!-- Liste des examens sous forme de cartes -->
        <div class="row" id="examsContainer">
            <?php while ($exam = $exams->fetch(PDO::FETCH_ASSOC)) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="color: black;"><?php echo htmlspecialchars_decode($exam['title']); ?></h5>
                            <p class="card-description"><?php echo htmlspecialchars_decode($exam['description']); ?></p>
                            <div class="card-actions">
                                <?php if (!empty($exam['file_path'])): ?>
                                    <a class="btn btn-outline-success" href="/Portfolio/e_learning/public<?php echo htmlspecialchars_decode($exam['file_path']); ?>" download>Télécharger PDF</a>
                                <?php else: ?>
                                    <span class="text-danger">PDF non disponible</span>
                                <?php endif; ?>
                            </div>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group mt-3">
                                    <label for="submission_file">Déposer votre fichier PDF complété</label>
                                    <input type="file" class="form-control-file" id="submission_file" name="submission_file" accept=".pdf" required>
                                    <input type="hidden" name="exam_id" value="<?php echo $exam['id']; ?>">
                                </div>
                                <button type="submit" class="btn btn-outline-info mt-2">Soumettre l'examen</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="text-white">Veuillez sélectionner une formation pour voir les examens disponibles.</p>
    <?php endif; ?>
</div>

<?php include '../../../../public/templates/footer.php'; ?>
