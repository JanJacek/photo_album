<?php
$usrName = 'admin';
$dns = 'mysql:host=db;dbname=albums';
$pass = 'grzechotnik88$';

try{
  $db = new PDO($dns, $usrName, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected to the database";
}catch(PDOException $ex){
  echo "Connection failed: " . $ex->getMessage();
}
?>
