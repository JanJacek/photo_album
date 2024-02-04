<?php 
include_once './database.php';
include_once './session.php';
$data = json_decode(file_get_contents('php://input'), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($data['username']) && !empty($data['password'])) {
    $username = $data['username'];
    $pass = $data['password'];

    $sqlQuery = "SELECT * FROM admin WHERE adminname = :username";
    $statement = $db->prepare($sqlQuery);
    $statement->execute([':username' => $username]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user && $pass === $user['password']) {
        // Zaktualizuj logikę sesji zgodnie z najlepszymi praktykami
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['adminname'];
        http_response_code(200);
        echo json_encode(['message' => 'Login successful']);
    } else {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid username or password']);
    }

} else {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Username and password are required']);
}
?>