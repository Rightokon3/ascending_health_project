<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use mysqli_real_escape_string to escape special characters
    $title =$_POST['title'];
    $content =$_POST['content'];
    $paragraph2 = $_POST['content2'];
    $paragraph3 = $_POST['content3'];

    $targetDir = "captures/";
    $imageName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $imageName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    $sql = "INSERT INTO healthy_eating (title, content, image_path, paragraph2, paragraph3) VALUES('$title', '$content', '$targetFilePath', '$paragraph2', '$paragraph3')";

    if ($conn->query($sql) === TRUE) {
        echo "Article uploaded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
