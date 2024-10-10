<?php

session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un administrateur
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 1) {
    header('Location: ../../../auth/login.php');
    exit;
}

// Gestion de la durée de la session
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $sessionLifetime)) {
    session_unset();
    session_destroy();
    header('Location: ../../../auth/login.php');
    exit;
}

$_SESSION['LAST_ACTIVITY'] = time();

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$userController = new \Controllers\UserController($db);
$formationController = new \Controllers\FormationController($db);
$messageController = new \Controllers\MessageController($db);

// Récupération des apprenants
$students = $userController->getUsersByRole(3);
$formations = $formationController->getAllFormations();

include_once '../../../../public/templates/header.php';
include_once '../navbar_admin.php';
?>

<div class="container mt-5">
    <h1 class="text-center">Gérer les Étudiants</h1>
    <div class="row">
        <h2 class="text-white">Liste des Étudiants</h2>
        <div class="container">
            <div class="row">
                <?php foreach ($students as $student): ?>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title" style="color: black;"><?php echo htmlspecialchars($student['username']); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($student['email']); ?></h6>
                                <p class="card-text">
                                    <strong>Cours Assignés:</strong><br>
                                    <?php
                                    $assignedFormation = $formationController->getFormationsByUser($student['id']);
                                    if (!empty($assignedFormation)) {
                                        foreach ($assignedFormation as $formation) {
                                            echo htmlspecialchars_decode($formation['name']) . '<br>';
                                        }
                                    } else {
                                        echo 'Aucun cours assigné';
                                    }
                                    ?>
                                </p>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-primary btn-sm btn-profile" data-id="<?php echo $student['id']; ?>" data-toggle="modal" data-target="#profileModal">Voir le Profil</button>
                                    <button class="btn btn-secondary btn-sm btn-message" data-id="<?php echo $student['id']; ?>" data-toggle="modal" data-target="#messageModal">Envoyer un Message</button>
                                    <button class="btn btn-success btn-sm btn-formation" data-id="<?php echo $student['id']; ?>" data-toggle="modal" data-target="#formationModal">Ajouter une Formation</button>
                                    <button class="btn btn-warning btn-sm btn-validate" data-id="<?php echo $student['id']; ?>" data-toggle="modal" data-target="#validateModal">Valider le Cursus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<!-- Modals pour Voir le Profil, Envoyer un Message, Ajouter une Formation, Valider le Cursus -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Profil de l'Étudiant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenu du profil sera chargé ici via AJAX -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Envoyer un Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="messageForm">
                    <div class="form-group">
                        <label for="messageStudentId">Étudiant</label>
                        <select id="messageStudentId" class="form-control" name="student_id">
                            <?php foreach ($students as $student): ?>
                                <option value="<?php echo $student['id']; ?>"><?php echo htmlspecialchars_decode($student['username']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="messageBody">Message</label>
                        <textarea id="messageBody" class="form-control" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="formationModal" tabindex="-1" role="dialog" aria-labelledby="formationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formationModalLabel">Ajouter une Formation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formationFormulaire">
                <div class="form-group">
                    <label for="formationStudentId">Étudiant</label>
                    <select id="formationStudentId" class="form-control" name="user_id">
                        <?php foreach ($students as $user): ?>
                            <option value="<?php echo $user['id']; ?>"><?php echo htmlspecialchars_decode($user['username']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                    <div class="form-group">
                        <label for="formationId">Nom de la Formation</label>
                        <select id="formationId" class="form-control" name="formation_id">
                            <?php foreach ($formations as $formation): ?>
                                <option value="<?php echo $formation['id']; ?>"><?php echo htmlspecialchars_decode($formation['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="validateModal" tabindex="-1" role="dialog" aria-labelledby="validateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="validateModalLabel">Valider l'obtention de la formation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="validateForm">
                    <div class="form-group">
                        <label for="validateStudentId">Étudiant</label>
                        <select id="validateStudentId" class="form-control" name="student_id">
                            <?php foreach ($students as $student): ?>
                                <option value="<?php echo $student['id']; ?>"><?php echo htmlspecialchars($student['username']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="validationStatus">Cursus Validé</label>
                        <select id="validationStatus" class="form-control" name="validation_status">
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Inclusion de jQuery (version complète, pas la version 'slim' qui ne supporte pas AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $('.btn-profile').on('click', function() {
        var userId = $(this).data('id');

        $.ajax({
            url: '/Portfolio/e_learning/admin/students/get_profile',  // Fichier PHP qui va traiter la requête AJAX
            type: 'GET',
            data: { user_id: userId },
            success: function(response) {
                // Insère la réponse (le contenu du profil) dans la modal
                $('#profileModal .modal-body').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Erreur AJAX: ' + status + ' - ' + error);
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    // Gestion le formulaire de message
    const messageForm = document.getElementById('messageForm');
    messageForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(messageForm);
        fetch('/Portfolio/e_learning/admin/students/message', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.status === 'success') {
                messageForm.reset();
                $('#messageModal').modal('hide');
                location.reload();
            }
        })
        .catch(error => console.error('Erreur:', error));
    });

    // Gestion le formulaire d'ajout de formation
    const formationForm = document.getElementById('formationFormulaire');
    formationForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(formationForm);
        fetch('/Portfolio/e_learning/admin/students/assign_course', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.status === 'success') {
                formationForm.reset();
                $('#formationModal').modal('hide');
                location.reload();
            }
        })
        .catch(error => console.error('Erreur:', error));
    });

    // Gestion le formulaire de validation du cursus
    const validateForm = document.getElementById('validateForm');
    validateForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(validateForm);
        fetch('/Portfolio/e_learning/admin/students/validate', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.status === 'success') {
                validateForm.reset();
                $('#validateModal').modal('hide');
                location.reload();
            }
        })
        .catch(error => console.error('Erreur:', error));
    });
});

</script>

<?php include '../../../../public/templates/footer.php'; ?>
