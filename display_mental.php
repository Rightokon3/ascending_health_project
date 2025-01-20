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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mental_post";
$result = $conn->query($sql);
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
                    <a href="#">
                        <span class="icon">
                           <i class="fa fa-plus" style="font-size:40px;"></i>
                        </span>
                        <span class="title">My Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
            
           
        <br>
        <div class="articles-list">
        <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='article'>"; 
        echo "<p>".$row['id']."";
        echo "<img src='" . $row['image'] . "' alt='Uploaded Image' class='article-image'>";
        echo " <h2> " . $row['title'] . ".</h2>";
        echo "<p><a href='post_mental?id=".$row['id']."'>Learn more</a><p>";
        echo "<span class='status return'><i class='fa fa-trash'></i> Delete</span> <span class='status inProgress'><i class='fa fa-pencil'></i> Edit</span>";
        echo "<hr class='hr-line'";
        echo "<br>";
        echo "</div>";  

    }
} else {
    echo "No post found.";
}
      
$conn->close();
?>
</div>
<style>
a{
    text-decoration:none;
    color:green;
}
.article {
    margin-bottom: 60px;
}

.article h2 {
    margin-top: 0;
}

.article p {
    margin-bottom: 5px;
}

.hr-line {
    border: 0;
    height: 1px;
    background-color: #ccc;
    margin: 15px 0;
}

.article-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 10px;
    float: left;
}
/* Remaining CSS */
.article-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 10px;
    float: left;
}

.article img {
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-right: 10px;
}
</style>
    
    </body>
    </html>
            <!-- ======================= Cards ================== -->
         

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>