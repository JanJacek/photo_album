<?php 
include_once './login.php';
include_once './logout.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the input stream
    $json = file_get_contents('php://input');

    // Decode the JSON into an associative array
    $data = json_decode($json, true);

    // Use the decoded data
    $action = isset($data['action']) ? $data['action'] : null;

    switch ($action) {
        case 'login':
            $resp = loginUser($data['username'], $data['password']);
            http_response_code($resp['status']);
            echo json_encode($resp['msg']);
            break;

        case 'logout':
            $resp = logoutUser();
            http_response_code($resp['status']);
            echo json_encode($resp['msg']);
            break;

        default:
            http_response_code(400);
            echo json_encode(['error' => 'Unknown action']);
            break;
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}
?>