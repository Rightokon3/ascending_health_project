

<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "health";
$dbchar = "utf8mb4";
$dbuser = "root";
$dbpass = "";
$pdo = new PDO(
  "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
  $dbuser, $dbpass, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// (C) SAVE ORDER TO DATABASE
if ($result=="") { try {
  $stmt = $pdo->prepare("INSERT INTO checkup (first_name,last_name,phone_number,email,checkup) VALUES (?,?,?,?,?)");
  $stmt->execute([$_POST["fname"], $_POST["lname"], $_POST["number"],$_POST["email"],$_POST["check-up"]]);
} catch (Exception $ex) { $result = $ex->getMessage(); }}
