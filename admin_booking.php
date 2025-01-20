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
$sql = 'SELECT COUNT(*) as count FROM health';
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

<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: dashboard.php");
    exit();
}

// If user is logged in, display dashboard content
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard">
                        <span class="icon">
                           <i class="fa fa-plus" style="font-size:40px;"></i>
                        </span>
                        <span class="title">My Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard">
                        <span class="icon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="admin_team">
                        <span class="icon">
                           <i class="fa fa-group"></i>
                        </span>
                        <span class="title">My doctors</span>
                    </a>
                </li>

                <li>
                    <a href="admin_booking">
                        <span class="icon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>

                <li>
                    <a href="activites">
                        <span class="icon">
                           <i class="fa fa-book"></i>
                        </span>
                        <span class="title">My article</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                           <i class="fa fa-lock"></i>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="logout">
                        <span class="icon">
                            <i class="fa fa-sign-out"></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa fa-bars" style="font-size: 30px;font-weight: 600;color:#2a2185;"></i>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                       
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                    
                </div>
            </div>


            <!-- ================ Order Details List ================= -->
            <center>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                      <center>  <h2>My bookings</h2></center>
                      <a class="btn"><?php Echo $row['count']?>   <br> bookings received</a>
                    </div>
                    <?php
                    $mysqli = new mysqli('localhost', 'root', '', 'health');

                    // Check connection
         if ($mysqli->connect_error) {
           die('Connection failed: ' . $mysqli->connect_error);

        }
        
// Retrieve data from the database
$sql = "SELECT * FROM health";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead><tr><th>first Name</th>    <th>last Name</th><th>Email</th><th>Phone</th><th>Date sent</th><th>Action</th></tr></thead>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td><span class='status return'><i class='fa fa-trash'></i> Delete</span> <span class='status inProgress'><i class='fa fa-pencil'></i> Edit</span></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No bookings found.";

    
}
$mysqli->close();

                    ?>
                </div>



                
</center>
                <!-- ================= New Customers ================ -->
      

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
