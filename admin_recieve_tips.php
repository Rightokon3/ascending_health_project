<?php

	require "functions_admin.php";
	check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips/suggestions/feedback Information</title>
    <link rel="stylesheet" type="text/css" href="booking.css">
    <link rel="stylesheet" type="text/css" href="health.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-master/css/font-awesome.min.css">
</head>
<header>
       <h1>Tips/suggestions/feedback recieved</h1>
       <nav>
                <ul id="menuitems">
                    <li><a href="welcome.php">Home</a></li>
                </ul>
            </nav>
            <i class="fa fa-bars" id="menu-icon" onclick="menutoggle()" style="font-size: 20px; font-weight: 600;color:white;"></i>
    </header>
<body>
    <style>
                header {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
        }
        header i{
            float:right;
            margin-top:-20px;
        }
        nav{
    margin-top:-20px;
}

    </style>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'health');

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM tips";
$result = $mysqli->query($sql);

// Check if there are any rows in the result set
if ($result->num_rows > 0) {
    echo "<h2>Tips/suggestions/feedback Information</h2>";
    echo "<table id='bookingTable'>";
    echo "<thead><tr><th>ID</th><th>first Name</th><th>last Name</th><th>Email</th><th>Phone</th><th>Tips/suggestions/feedback</th><th>Date-sent</th></tr></thead>";
    echo "<tbody>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No tips/suggestions/feedback found.";
}

// Close the connection
$mysqli->close();
?>

</body>
</html>
