<?php
session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un administrateur
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 2) {
    header('Location: /Portfolio/e_learning/login');
    exit;
}
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

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

$liveController = new \Controllers\LiveController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $utilisateur_id = $user['id'];  // ID du formateur connecté
        
        if ($_POST['action'] === 'create') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $link = $_POST['link'];

            $liveController->createLive($title, $description, $date, $link, $utilisateur_id);
            $message = "Session live créée avec succès.";
        } elseif ($_POST['action'] === 'update') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $link = $_POST['link'];

            $liveController->updateLive($id, $title, $description, $date, $link, $utilisateur_id);
            $message = "Session live mise à jour avec succès.";
        } elseif ($_POST['action'] === 'delete') {
            $id = $_POST['id'];
            $liveController->deleteLive($id);
            $message = "Session live supprimée avec succès.";
        }
    }
}

$lives = $liveController->getAllLives();

include_once '../../../../public/templates/header.php';
include_once '../navbar_teacher.php';
?>

<div class="container mt-5">
    <h1 class="text-white">Gérer les Sessions Live</h1>

    <?php if (isset($message)) : ?>
        <div class="alert alert-success"><?php echo $message; ?></div>
    <?php endif; ?>

    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#createLiveModal">Créer une nouvelle session Live</button>

    <div class="row">
    <?php foreach ($lives as $live) : 
        // Calculer la date de fin du live
        $liveStartDate = new DateTime($live['date']);
        $liveEndDate = clone $liveStartDate;
        $liveEndDate->modify('+1 hour'); // Ajouter une heure à la date de début
        $now = new DateTime();

        // Vérifier si le live est toujours accessible
        $isLiveAccessible = $now < $liveEndDate;
    ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title" style="color: black;"><?php echo htmlspecialchars($live['title']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($live['description']); ?></p>
                    <p class="card-text"><strong>Date :</strong> <?php echo htmlspecialchars($live['date']); ?></p>
                    <?php if ($isLiveAccessible): ?>
                        <a href="<?php echo htmlspecialchars($live['link']); ?>" target="_blank" class="btn btn-outline-success mb-2">Rejoindre</a>
                    <?php else: ?>
                        <button class="btn btn-outline-secondary mb-2" disabled>Live Expiré</button>
                    <?php endif; ?>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-secondary btn-sm" 
                        data-toggle="modal" 
                        data-target="#editLiveModal" 
                        data-id="<?php echo $live['id']; ?>" 
                        data-title="<?php echo htmlspecialchars($live['title']); ?>" 
                        data-description="<?php echo htmlspecialchars($live['description']); ?>" 
                        data-date="<?php echo htmlspecialchars($live['date']); ?>" 
                        data-link="<?php echo htmlspecialchars($live['link']); ?>">
                        Modifier
                    </button>
                        <form action="/Portfolio/e_learning/teacher/lives" method="POST" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?php echo $live['id']; ?>">
                            <input type="hidden" name="action" value="delete">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette session live ?')">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<!-- Modal pour créer une session live -->
<div class="modal fade" id="createLiveModal" tabindex="-1" role="dialog" aria-labelledby="createLiveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/Portfolio/e_learning/teacher/lives" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLiveModalLabel">Créer une nouvelle session Live</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="link">Lien</label>
                        <input type="url" class="form-control" id="link" name="link" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="action" value="create">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal pour modifier une session live -->
<div class="modal fade" id="editLiveModal" tabindex="-1" role="dialog" aria-labelledby="editLiveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/Portfolio/e_learning/teacher/lives" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLiveModalLabel">Modifier la session Live</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="editLiveId" name="id">
                    <div class="form-group">
                        <label for="editTitle">Titre</label>
                        <input type="text" class="form-control" id="editTitle" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="editDescription">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editDate">Date</label>
                        <input type="datetime-local" class="form-control" id="editDate" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="editLink">Lien</label>
                        <input type="url" class="form-control" id="editLink" name="link" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="action" value="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Votre script personnalisé -->
<script>
    $('#editLiveModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var title = button.data('title');
        var description = button.data('description');
        var date = button.data('date');
        var link = button.data('link');
        
        var formattedDate = date.replace(' ', 'T');
        var modal = $(this);

        modal.find('#editLiveId').val(id);
        modal.find('#editTitle').val(title);
        modal.find('#editDescription').val(description);
        modal.find('#editDate').val(formattedDate);
        modal.find('#editLink').val(link);
    });
</script>


<?php include '../../../../public/templates/footer.php'; ?>
