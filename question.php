<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Process form data
$customer_first_name = $_POST['fname'];
$customer_last_name = $_POST['lname'];
$email = $_POST['email'];
$question = $_POST['question'];

// Insert data into the database
$sql = "INSERT INTO submit (first_name, last_name,email, question) VALUES ('$customer_first_name', '$customer_last_name', '$email', '$question')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('successfully sent');;document.location.href='contact';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
