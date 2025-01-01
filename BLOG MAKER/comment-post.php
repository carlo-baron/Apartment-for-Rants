<?php
session_start();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['post_id'], $input['action'])) {
        $postId = $input['post_id'];
        $action = $input['action'];

        if ($action === 'comment') {
            $_SESSION['postId'] = $postId;
        }

        echo json_encode(['success' => true]);
        exit;
    }
}


echo json_encode(['success' => false, 'error' => 'Invalid request']);
?>
