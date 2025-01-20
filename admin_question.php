<?php

	require "functions_admin.php";
	check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.A.Q</title>
    <link rel="stylesheet" type="text/css" href="booking.css">
    <link rel="stylesheet" type="text/css" href="health.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-master/css/font-awesome.min.css">
</head>
<header>
       <h1>Questions asked</h1>
       <nav>
                <ul id="menuitems">
                    <li><a href="welcome.php">Home</a></li>
                </ul>
            </nav>
            <i class="fa fa-bars" id="menu-icon" onclick="menutoggle()" style="font-size: 20px; font-weight: 600;color:white;"></i>
    </header>
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
<body>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'health');

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM submit";
$result = $mysqli->query($sql);

// Check if there are any rows in the result set
if ($result->num_rows > 0) {
    echo "<h2>Question asked</h2>";
    echo "<table id='bookingTable'>";
    echo "<thead><tr><th>ID</th><th>first Name</th><th>last Name</th><th>Email</th><th>Questions asked</th><th>Date-sent</th></tr></thead>";
    echo "<tbody>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["question"] . "</td>";
        echo "<td>" . $row["date-sent"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No bookings found.";
}

// Close the connection
$mysqli->close();
?>
<div class="footer">
             <hr>
        <p class="copyright"> Copyright 2023- Ascending health foundation</p>
 </div>
 <script>
            var menuitems=document.getElementById("menuitems");

            menuitems.style.maxHeight="0px";

            function menutoggle(){
                if( menuitems.style.maxHeight =="0px")
                {
                    menuitems.style.maxHeight="200px";
                }
                else{
                    menuitems.style.maxHeight="0px";
                }
            }
        </script>
</body>
</html>
