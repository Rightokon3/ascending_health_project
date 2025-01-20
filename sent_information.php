<?php
// (A) PROCESS RESULT
require "mail1.php";
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
$targetDir = "captures/";
$imageName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $imageName;
move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
if ($result=="") { try {
  $stmt = $pdo->prepare("INSERT INTO information1 (title,introduction, signssymptoms,description,prevention,treatment,conclusion,image) VALUES (?,?,?,?,?,?,?,?)");
  $stmt->execute([$_POST["title"], $_POST["intro"], $_POST["signs/symptoms"],$_POST["description"],$_POST["prevention"],$_POST["treatment"],$_POST["conclusion"],$targetFilePath]);
} catch (Exception $ex) { $result = $ex->getMessage(); }}


// (D) SEND ORDER VIA EMAIL
if ($result=="") {
  $to = "rightokon3@gmail.com"; // CHANGE TO YOUR OWN!
  $subject = "BOOK RECEVIED";
  $message = "";
  send_mail($to,$subject,$message);
}