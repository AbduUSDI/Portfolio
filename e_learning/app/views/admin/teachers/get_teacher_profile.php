<?php

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$profileController = new \Controllers\ProfileController($db);
$friendController = new \Controllers\FriendController($db);

if (isset($_GET['id'])) {
    $teacher_id = $_GET['id'];
    
    // Récupérer les informations du profil de l'utilisateur
    $profile = $profileController->getProfileByUserId($teacher_id);

    if ($profile) {
        echo "<h2>Profil de " . htmlspecialchars($profile['prenom'] . ' ' . $profile['nom']) . "</h2>";
        echo "<p><strong>Prénom:</strong> " . htmlspecialchars($profile['prenom']) . "</p>";
        echo "<p><strong>Nom:</strong> " . htmlspecialchars($profile['nom']) . "</p>";
        echo "<p><strong>Date de naissance:</strong> " . htmlspecialchars($profile['date_naissance']) . "</p>";
        echo "<p><strong>Biographie:</strong> " . htmlspecialchars($profile['biographie']) . "</p>";
        if ($profile['photo_profil']) {
            // Définir le chemin relatif de la photo de profil
            $photoProfilPath = '/Portfolio/e_learning/public/uploads/profil_picture/' . basename($profile['photo_profil']);
            
            // Vérifier si le fichier existe (avec le chemin réel du fichier)
            if (file_exists(__DIR__ . '/../../../../public/uploads/profil_picture/' . basename($profile['photo_profil']))) {
                echo "<p><strong>Photo de profil:</strong><br><img src='" . htmlspecialchars($photoProfilPath) . "' alt='Photo de profil' style='max-width:200px;' class='img-thumbnail rounded mx-auto d-block'></p>";
            } else {
                echo "<p><strong>Photo de profil:</strong> Image non trouvée.</p>";
            }
        }
        
        

        // Vérifier si l'utilisateur connecté est différent du profil consulté
        if (isset($_SESSION['user']) && $_SESSION['user']['id'] != $teacher_id) {
            // Vérifier si une demande d'ami existe déjà
            if ($friendController->friendRequestExists($_SESSION['user']['id'], $teacher_id)) {
                echo "<p>Demande d'ami déjà envoyée ou déjà amis.</p>";
            } else {
                echo "<button id='friendRequestBtn' data-id='" . $teacher_id . "' class='btn btn-primary'>Demander en ami</button>";
            }
        }
    } else {
        echo "<p>Profil non trouvé pour cet utilisateur.</p>";
    }
} else {
    echo "<p>ID d'utilisateur non fourni.</p>";
}
?>

<script>
document.getElementById('friendRequestBtn').addEventListener('click', function() {
    const userId = this.getAttribute('data-id');
    fetch('/Portfolio/e_learning/admin/teachers/send_friend', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ receiver_id: userId })
    })
    .then(response => response.json())
    .then(data => alert(data.message))
    .catch(error => console.error('Erreur:', error));
});
</script>
