<?php
    include_once './logout.php';
    include_once './login.php';

    $action = $_GET['action'];
    switch ($action) {
        case 'login':
            include './login.php';
            break;
        case 'logout':
            include './logout.php';
            break;
        default:
        http_response_code(400); // Nieprawidłowe żądanie
            break;
    }
?>