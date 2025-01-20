<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'health';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
If ($conn->connect_error) {
    Die('Connection failed: ' . $conn->connect_error);
}

// Query to get the count of rows in your table
$sql = 'SELECT COUNT(*) as count FROM team';
$result = $conn->query($sql);

// Check if the query was successful
If ($result) {
    $row = $result->fetch_assoc();
    //Echo $row['count'];
} else {
    Echo 'Error: ' . $conn->error;
}

// Close the connection
$conn->close();
?>
