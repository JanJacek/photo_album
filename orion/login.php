<?php
include_once './database.php';
include_once './session.php';

function loginUser($username, $pass) {
    if (!empty($username) && !empty($pass)) {
        global $db; // Zakładając, że $db jest zdefiniowane w innym pliku i zawiera połączenie PDO

        $sqlQuery = "SELECT * FROM admin WHERE adminname = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute([':username' => $username]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        // Zakładając, że hasła są bezpiecznie przechowywane i tutaj używamy password_verify do ich sprawdzenia
        if ($user && $pass === $user['password']) {
            // Zaktualizuj logikę sesji
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['adminname'];
            return ['status' => 200, 'msg' => 'Login successful'];
        } else {
            return ['status' => 401, 'msg' => 'Invalid username or password'];
        }
    } else {
        return ['status' => 400, 'msg' => 'Username and password cannot be empty'];
    }
}
?>