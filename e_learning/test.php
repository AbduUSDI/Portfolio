<?php
session_start();
require_once 'vendor/autoload.php';

use App\Config\Database;
use App\Controllers\MessageController;

$database = new Database();
$db = $database->getConnection();

$messageController = new MessageController($db);

// 1. Vérification de la structure de la base de données
$query = "DESCRIBE messages";
$stmt = $db->prepare($query);
$stmt->execute();
$tableStructure = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "Structure de la table messages :<br>";
print_r($tableStructure);
echo "<br><br>";

// 2. Vérification des messages non lus dans la base de données
$query = "SELECT * FROM messages WHERE receiver_id = :user_id AND read_status = 0";
$stmt = $db->prepare($query);
$stmt->bindParam(':user_id', $_SESSION['user']['id']);
$stmt->execute();
$unreadMessages = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "Messages non lus dans la base de données :<br>";
print_r($unreadMessages);
echo "<br><br>";

// 3. Test de la fonction getUnreadMessagesCount()
$unreadCount = $messageController->getUnreadMessagesCount($_SESSION['user']['id']);
echo "Nombre de messages non lus selon getUnreadMessagesCount() : " . $unreadCount . "<br><br>";

// 4. Affichage du code HTML du badge
$badgeHTML = '';
if ($unreadCount > 0) {
    $badgeHTML = '<span class="badge badge-danger">' . $unreadCount . '</span>';
}
echo "Code HTML du badge : " . htmlspecialchars($badgeHTML) . "<br>";
echo "Aperçu du badge : " . $badgeHTML . "<br>";