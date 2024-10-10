<?php

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$pageController = new \Controllers\PageController($db);

if (isset($_POST['id'])) {
    $pageId = $_POST['id'];
    if ($pageController->incrementPageViewCount($pageId)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Page ID not provided']);
}
