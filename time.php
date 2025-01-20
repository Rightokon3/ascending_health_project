<link rel="stylesheet" href="meter.css">
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

// Query to retrieve total sales
$sql = "SELECT SUM(id) AS total_sales FROM team";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    $sales = $row["total_sales"];
  }
} else {
  $sales = 0;
}

$conn->close();

// Update meter value
updateMeter($sales);

function updateMeter($sales) {
  // Update meter display
  $meterValue = $sales * 0.0002; // Adjust scale for meter
  
  // Limit maximum value to 100
  if ($meterValue > 100) {
    $meterValue = 100;
  }
  
  echo '<div class="meter-container">';
  echo '<div class="meter" style="transform: rotate(' . $meterValue * 1.8 . 'deg);"></div>';
  echo '<div class="value">' . $sales . '</div>';
  echo '</div>';
  
  // Check if sales are below 20
  if ($sales < 20) {
    // Send email notification
    sendEmailNotification();
  }
}

function sendEmailNotification() {
  $to = "recipient@example.com";
  $subject = "Low Sales Notification";
  $message = "Your sales are below 20. Please take action to increase sales.";
  $headers = "From: rightokon3@gmail.com";

  // Send email
  if (!@mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Email sending failed.";
  }
}
?>
