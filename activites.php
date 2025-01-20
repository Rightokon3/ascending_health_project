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
$sql = 'SELECT COUNT(*) as count FROM admin_tips';
$result = $conn->query($sql);

// Check if the query was successful
If ($result) {
    $tips = $result->fetch_assoc();
    //Echo $row['count'];
} else {
    Echo 'Error: ' . $conn->error;
}

// Close the connection
$conn->close();
?>
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
$sql = 'SELECT COUNT(*) as count FROM emergency';
$result = $conn->query($sql);

// Check if the query was successful
If ($result) {
    $eme = $result->fetch_assoc();
    //Echo $row['count'];
} else {
    Echo 'Error: ' . $conn->error;
}

// Close the connection
$conn->close();
?>
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
$sql = 'SELECT COUNT(*) as count FROM activites';
$result = $conn->query($sql);

// Check if the query was successful
If ($result) {
    $act = $result->fetch_assoc();
    //Echo $row['count'];
} else {
    Echo 'Error: ' . $conn->error;
}

// Close the connection
$conn->close();
?>
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
$sql = 'SELECT COUNT(*) as count FROM mental_post';
$result = $conn->query($sql);

// Check if the query was successful
If ($result) {
    $list = $result->fetch_assoc();
    //Echo $row['count'];
} else {
    Echo 'Error: ' . $conn->error;
}

// Close the connection
$conn->close();
?>
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
$sql = 'SELECT COUNT(*) as count FROM information1';
$result = $conn->query($sql);

// Check if the query was successful
If ($result) {
    $info = $result->fetch_assoc();
    //Echo $row['count'];
} else {
    Echo 'Error: ' . $conn->error;
}

// Close the connection
$conn->close();
?>
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
$sql = 'SELECT COUNT(*) as count FROM mental_post';
$result = $conn->query($sql);

// Check if the query was successful
If ($result) {
    $list = $result->fetch_assoc();
    //Echo $row['count'];
} else {
    Echo 'Error: ' . $conn->error;
}

// Close the connection
$conn->close();
?>

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
$sql = 'SELECT COUNT(*) as count FROM healthy_eating';
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
    header("Location: admin.php");
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
                    <a href="logout.php">
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
                       <i class="fa fa-search"></i>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
               <div class="cardBox">
                <div class="card">
                <a href="admin_healthy_eating" style="text-decoration:none;"> 
                    <div>
                   <div class="numbers"><?php Echo $row['count']?></div>
                        <div class="cardName">Healthy eating article added</div>
                    </div></a> 

                    <div class="iconBx">
                      <i class="fa fa-spoon"></i>
                    </div>
                </div>

                <div class="card">
                <a href="admin_mental_health" style="text-decoration:none;"> 
                    <div>
                        <div class="numbers"><?php Echo $list['count']?></div>
                        <div class="cardName">Mental post added</div>
                    </div></a>

                    <div class="iconBx">
                    <img src="Captures/Acute-Stroke-Unit-1.svg" alt="" height="50px">
                    </div>
                </div>

                <div class="card">
                <a href="admin_information" style="text-decoration:none;"> 
                    <div>
                        <div class="numbers"><?php Echo $info['count']?></div>
                        <div class="cardName">Information about common conditions, symptoms, and treatments. added</div>
                    </div></a>

                    <div class="iconBx">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                </div>

                <div class="card">
                <a href="admin_activites" style="text-decoration:none;"> 
                    <div>
                        <div class="numbers"><?php Echo $act['count']?></div>
                        <div class="cardName">Of our activites added</div>
                    </div></a>

                    <div class="iconBx">
                       <i class="fa fa-group"></i>
                    </div>
                </div>
                
                <div class="card">
                <a href="admin_emergency" style="text-decoration:none;"> 
                    <div>
                        <div class="numbers"><?php Echo $eme['count']?></div>
                        <div class="cardName">Of emergency tips added</div>
                    </div></a>

                    <div class="iconBx">
                       <i class="fa fa-ambulance"></i>
                    </div>
                </div>
                <div class="card">
                <a href="admin-tips" style="text-decoration:none;"> 
                    <div>
                        <div class="numbers"><?php Echo $tips['count']?></div>
                        <div class="cardName">Of health tips added  </div>
                    </div></a>

                    <div class="iconBx">
                       <i class="fa fa-heart-o"></i>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
          
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>