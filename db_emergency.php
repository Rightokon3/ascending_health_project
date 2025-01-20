

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
$targetDir = "captures/";
$imageName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $imageName;
move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
if ($result=="") { try {
  $stmt = $pdo->prepare("INSERT INTO emergency (title,content, tips,conclusion,image_path) VALUES (?,?,?,?,?)");
  $stmt->execute([$_POST["title"], $_POST["content"], $_POST["tips"],$_POST["conculsion"],$targetFilePath]);
} catch (Exception $ex) { $result = $ex->getMessage(); }}
