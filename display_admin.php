<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM healthy_eating";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Uploaded Content</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h1>Text: " . $row['title'] . "</h1>";
        echo "<p>Text: " . $row['description'] . "</p>";
        echo "<img src='" . $row['image'] . "' alt='Uploaded Image'>";
        echo "</div>";
    }
} else {
    echo "No uploads found.";
}

$conn->close();
?>

</body>
</html>
