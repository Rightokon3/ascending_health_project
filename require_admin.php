<?php
require_once('connect_admin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM admin_login WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password=$row['password']) {
            header("Location: welcome.php");
            // Add session handling or redirect to the user dashboard
        } else {
            echo "<script> alert('incorrect username or password');
            document.location.href='admin.php';
            </script>";
        }
    } else {
        echo "<script> alert('incorrect username or password');document.location.href='admin.php';</script>";
    }
}

$conn->close();
?>
