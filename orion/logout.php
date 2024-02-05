<?php
// Funkcja logoutUser teraz zwraca tablicę z informacjami o statusie operacji
function logoutUser() {
    // Sprawdzenie, czy sesja została już rozpoczęta
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Usunięcie wszystkich danych sesji
    $_SESSION = array();

    // Usunięcie cookie sesji, jeśli jest ustawione
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Zniszczenie sesji
    session_destroy();

    // Zwrócenie statusu wylogowania
    return ['status' => 200, 'msg' => 'Logout successful'];
}
?>