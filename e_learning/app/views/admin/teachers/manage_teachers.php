<?php

session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un administrateur
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 1) {
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

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$userController = new \Controllers\UserController($db);
$messageController = new \Controllers\MessageController($db);
$scheduleController = new \Controllers\ScheduleController($db);

// Récupération des formateurs
$teachers = $userController->getUsersByRole(2);

include_once '../../../../public/templates/header.php';
include_once '../navbar_admin.php';
?>

<div class="container mt-5">
    <h1 class="text-center">Gérer les Enseignants</h1>

    <div class="row">
    <div class="col-md-6">
    <h2 class="text-center">Liste des Formateurs</h2>
    <div id="teachersCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($teachers as $index => $teacher): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="card hero">
                        <div class="card-body">
                            <h3 class="card-title" style="color: black;"><?php echo htmlspecialchars($teacher['username']); ?></h3>
                            <p class="card-text"><strong>Email :</strong> <?php echo htmlspecialchars($teacher['email']); ?></p>
                            <!-- Ajoutez d'autres informations du formateur ici -->
                            <p class="card-text"><strong>Bio :</strong> <?php echo htmlspecialchars($teacher['biographie'] ?? 'Non disponible'); ?></p>
                            <p class="card-text"><strong>Spécialité :</strong> <?php echo htmlspecialchars($teacher['specialty'] ?? 'Non disponible'); ?></p>
                            <button class="btn btn-primary btn-sm btn-profile" data-id="<?php echo $teacher['id']; ?>" data-toggle="modal" data-target="#profileModal">Voir le Profil</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Contrôles du carrousel -->
        <a class="carousel-control-prev" href="#teachersCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#teachersCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
</div>

        
        <!-- Contacter un Formateur -->
        <div class="col-md-6">
            <h2 class="text-white">Contacter un Formateur</h2>
            <div class="form-container">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="contactTeacherId">Formateur</label>
                        <select id="contactTeacherId" class="form-control" name="teacher_id">
                            <?php foreach ($teachers as $teacher): ?>
                                <option value="<?php echo $teacher['id']; ?>"><?php echo htmlspecialchars($teacher['username']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contactMessage">Message</label>
                        <textarea id="contactMessage" class="form-control" name="body" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
    <h2 class="text-white">Attribuer un Emploi du Temps</h2>
    <form id="scheduleForm" method="POST">
        <div class="form-group">
            <label for="scheduleTeacherId" class="text-white">Veuillez sélectionner le formateur :</label>
            <select id="scheduleTeacherId" class="form-control" name="teacher_id">
                <?php foreach ($teachers as $teacher): ?>
                    <option value="<?php echo $teacher['id']; ?>"><?php echo htmlspecialchars($teacher['username']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <div class="table-responsive">
        <table class="table table-bordered text-black mt-3">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>08:00 - 10:00</th>
                    <th>10:00 - 12:00</th>
                    <th>14:00 - 16:00</th>
                    <th>16:00 - 18:00</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi' , 'Samedi' , 'Dimanche'];
                foreach ($days as $day):
                ?>
                <tr>
                    <td><?php echo $day; ?></td>
                    <td><input type="checkbox" name="schedule[<?php echo $day; ?>][]" value="08:00-10:00"></td>
                    <td><input type="checkbox" name="schedule[<?php echo $day; ?>][]" value="10:00-12:00"></td>
                    <td><input type="checkbox" name="schedule[<?php echo $day; ?>][]" value="14:00-16:00"></td>
                    <td><input type="checkbox" name="schedule[<?php echo $day; ?>][]" value="16:00-18:00"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        <button type="submit" class="btn btn-primary">Attribuer</button>
    </form>
</div>

<!-- Modals pour Voir le Profil -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Profil du Formateur</h5>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Charger le profil du formateur dans le modal
    document.querySelectorAll('.btn-profile').forEach(button => {
        button.addEventListener('click', function () {
            const teacherId = this.getAttribute('data-id');
            fetch(`/Portfolio/e_learning/admin/teachers/profile/${teacherId}`)
                .then(response => response.text())
                .then(data => {
                    document.querySelector('#profileModal .modal-body').innerHTML = data;
                })
                .catch(error => console.error('Erreur:', error));
        });
    });

    // Gérer le formulaire de contact
    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(contactForm);
        fetch('/Portfolio/e_learning/admin/teachers/contact', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.status === 'success') {
                contactForm.reset();
            }
        })
        .catch(error => console.error('Erreur:', error));
    });

    // Gérer le formulaire d'emploi du temps
    const scheduleForm = document.getElementById('scheduleForm');
    scheduleForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch('/Portfolio/e_learning/admin/teachers/schedule', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.status === 'success') {
                this.reset(); // Réinitialiser le formulaire
            }
        })
        .catch(error => console.error('Erreur:', error));
    });
});

</script>

<?php include '../../../../public/templates/footer.php'; ?>
