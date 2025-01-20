<?php
// Connect to MySQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve sales data
$sql = "SELECT SUM(id) AS total_sales FROM emergency";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    // Return sales data as JSON
    echo json_encode(array("sales" => $row["total_sales"]));
  }
} else {
  echo json_encode(array("sales" => 0));
}

$conn->close();
?>
