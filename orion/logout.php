<?php
  include_once './session.php';
  session_destroy();
  echo json_encode(['message' => 'User logged out successfully']);
?>