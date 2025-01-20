<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Assuming you have a database connection
        // Replace database credentials with your own
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "health";
        
        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // SQL query to check if username and password match
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            // Login successful, set session variables
            $_SESSION['username'] = $username;
            // Redirect to dashboard or another secured page
            header("Location: dashboard");

            exit();
        } else {
            // Login failed
            $error = "Invalid username or password.";
        }
        
        // Close connection
        $conn->close();
    } else {
        // Form fields not set
        $error = "Please enter both username and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM </title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    
<div class="form-container">
    <form action=""  method="post">
        <div class="text-center">
            <h2 style="color:lightgreen;">Welcome admin</h2>
            <span><img src="captures/logo.jpg" alt="logo" width="15%" height="15%"></span>
        </div>
        <?php if(isset($error)) echo "<p>$error</p>"; ?>
        <input type="text" name="username" required placeholder="Enter your username">
        <input type="password" name="password" required placeholder="Enter your password">
        <input type="submit" name="submit" value="Login  now" class="form-btn">
        </form>
</div>
</body>
</html>