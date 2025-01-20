

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
  $stmt = $pdo->prepare("INSERT INTO healthy_eating (title,content, paragraph2,paragraph3,image_path) VALUES (?,?,?,?,?)");
  $stmt->execute([$_POST["title"], $_POST["content"], $_POST["content2"],$_POST["content3"],$targetFilePath]);
} catch (Exception $ex) { $result = $ex->getMessage(); }}


// (D) SEND ORDER VIA EMAIL
if ($result=="") {
  $to = "rightokon3@gmail.com"; // CHANGE TO YOUR OWN!
  $subject = "BOOK RECEVIED";
  $message = "";
  foreach ($_POST as $k=>$v) { $message .= "$k - $v\r\n"; }
  if (!@mail($to, $subject, $message)) { $result = "Error sending mail!"; }
}