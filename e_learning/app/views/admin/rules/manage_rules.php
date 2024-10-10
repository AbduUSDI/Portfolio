<?php
session_start();

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$ruleController = new \Controllers\RuleController($db);
$authController = new \Controllers\AuthController($db);

// Vérifiez que l'utilisateur est connecté et qu'il est un administrateur
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$user || $user['role_id'] != 1) {
    header('Location: /Portfolio/e_learning/login');
    exit();
}

// Gestion des actions CRUD via AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json'); // Indique que la réponse est en JSON

    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'create':
                $title = $_POST['title'];
                $description = $_POST['description'];
                $ruleController->createRule($title, $description);

                // Renvoyer les données de la nouvelle règle
                echo json_encode([
                    'id' => $db->lastInsertId(),
                    'title' => $title,
                    'description' => $description
                ]);
                exit;

            case 'update':
                $id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $ruleController->updateRule($id, $title, $description);

                echo json_encode(['status' => 'success']);
                exit;

            case 'delete':
                $id = $_POST['id'];
                $ruleController->deleteRule($id);

                echo json_encode(['status' => 'success']);
                exit;
        }
    }
}

// Fetch rules for initial load
$rules = $ruleController->getAllRules();

include_once '../../../../public/templates/header.php';
include_once '../navbar_admin.php';
?>

<div class="container mt-5">
    <h2 class="text-white">Gérer les règles</h2>
    
    <!-- Formulaire de création de règle -->
    <form id="createRuleForm">
        <div class="form-group">
            <label class="text-white" for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label class="text-white" for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Créer une règle</button>
    </form>

    <hr>

    <!-- Liste des règles existantes sous forme de cartes -->
    <div class="row" id="rulesContainer">
        <?php while ($row = $rules->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="col-md-4">
                <div class="card" data-id="<?php echo $row['id']; ?>">
                    <h5 class="card-title rule-title" style="color: black;"><?php echo htmlspecialchars_decode($row['title']); ?></h5>
                    <p class="card-description rule-description"><?php echo htmlspecialchars_decode($row['description']); ?></p>
                    <div class="card-actions">
                        <button class="btn btn-warning edit-rule-btn">Modifier</button>
                        <button class="btn btn-danger delete-rule-btn">Supprimer</button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {

    // Creation d'une règle avec AJAX en récupérant le POST
    $('#createRuleForm').on('submit', function(e) {
        e.preventDefault();

        const titleValue = $('#title').val();
        const descriptionValue = $('#description').val();

        $.ajax({
            type: 'POST',
            url: '/Portfolio/e_learning/admin/rules',
            data: {
                action: 'create',
                title: titleValue,
                description: descriptionValue
            },
            success: function(response) {
                try {
                    // Assurez-vous que la réponse est un objet JSON
                    const rule = typeof response === "string" ? JSON.parse(response) : response;

                    // Ajoutez le nouvel élément au DOM
                    $('#rulesContainer').append(`
                        <div class="col-md-4">
                            <div class="card" data-id="${rule.id}">
                                <h5 class="card-title rule-title" style="color: black;">${rule.title}</h5>
                                <p class="card-description rule-description">${rule.description}</p>
                                <div class="card-actions">
                                    <button class="btn btn-warning edit-rule-btn">Modifier</button>
                                    <button class="btn btn-danger delete-rule-btn">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    `);

                    // Réinitialisez le formulaire
                    $('#createRuleForm')[0].reset();

                    // Vérifiez dans la console pour voir l'objet ajouté
                    console.log("Nouvelle règle ajoutée : ", rule);

                } catch (error) {
                    console.error("Erreur lors du traitement de la réponse JSON: ", error);
                }
            },
            error: function(xhr, status, error) {
                console.error("Erreur AJAX: ", status, error);
            }
        });
    });

    // Edit rule
    $(document).on('click', '.edit-rule-btn', function() {
        const card = $(this).closest('.card');
        const id = card.data('id');
        const title = card.find('.rule-title').text();
        const description = card.find('.rule-description').text();

        const newTitle = prompt('Modifier le titre:', title);
        const newDescription = prompt('Modifier la description:', description);

        if (newTitle && newDescription) {
            $.ajax({
                type: 'POST',
                url: '/Portfolio/e_learning/admin/rules',
                data: {
                    action: 'update',
                    id: id,
                    title: newTitle,
                    description: newDescription
                },
                success: function(response) {
                    card.find('.rule-title').text(newTitle);
                    card.find('.rule-description').text(newDescription);
                }
            });
        }
    });

    // Delete rule
    $(document).on('click', '.delete-rule-btn', function() {
        if (confirm('Êtes-vous sûr de vouloir supprimer cette règle ?')) {
            const card = $(this).closest('.card');
            const id = card.data('id');

            $.ajax({
                type: 'POST',
                url: '/Portfolio/e_learning/admin/rules',
                data: {
                    action: 'delete',
                    id: id
                },
                success: function(response) {
                    card.remove();
                }
            });
        }
    });
});

</script>

<?php include '../../../../public/templates/footer.php'; ?>
