<?php
session_start();

require_once '../../../../vendor/autoload.php';

if (!isset($_SESSION['user'])) {
    echo json_encode(['status' => 'error', 'message' => 'Accès non autorisé']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senderId = $_SESSION['user']['id'];

    // Vérification que receiver_id est bien passé et est valide
    if (isset($_POST['receiver_id']) && is_numeric($_POST['receiver_id'])) {
        $receiverId = intval($_POST['receiver_id']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'ID du destinataire non valide']);
        exit;
    }

    $database = new \Database\Database();
    $db = $database->getConnection();

    $friendController = new \Controllers\FriendController($db);

    $result = $friendController->sendFriendRequest($senderId, $receiverId);
    echo json_encode($result);
}
