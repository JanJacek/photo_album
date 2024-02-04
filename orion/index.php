<?php
// // Allow requests from any origin
// header('Access-Control-Allow-Origin: *');
// // Allow specific HTTP methods (e.g., GET, POST, PUT, DELETE, OPTIONS)
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
// // Allow headers like Authorization, Content-Type, etc.
// header('Access-Control-Allow-Headers: Content-Type, Authorization');
// // Ustaw nagłówek odpowiedzi na typ JSON
// header('Content-Type: application/json');
// Odbierz dane przesłane metodą POST
$data = json_decode(file_get_contents('php://input'), true);

// Sprawdź, czy dane zostały otrzymane
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($data['username']) && !empty($data['password'])) {
    // Tutaj należy dodać logikę weryfikacji danych logowania, np. sprawdzić w bazie danych
    $username = $data['username'];
    $password = $data['password'];

    // Przykładowa weryfikacja (bezpieczne rozwiązanie powinno używać np. hashowania haseł)
    if ($username == 'test' && $password == 'password') {
      http_response_code(200); // OK
        echo json_encode(['message' => 'Login successful']);
    } else {
        http_response_code(401); // Unauthorized
        echo json_encode(['error' => 'Invalid username or password']);
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Username and password are required']);
}

?>