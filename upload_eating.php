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

            <style>

                      .login-container {
          text-align: center;
          margin-top: 100px;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    
        .login-box {
          width: 300px;
          padding: 20px;
          background-color: #fff;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          border-radius: 8px;
          margin: 0 auto;
        }
    
        .login-box input,textarea{
          width: 100%;
          padding: 10px;
          margin-bottom: 10px;
          box-sizing: border-box;
          background:lightgreen;
          border:none;
          border-radius:20px;
        }
        .login-box input::placeholder{
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          font-weight:700;
          color:black;
        }
    
        .login-box button {
          width: 100%;
          padding: 10px;
          background-color: #333;
          color: #fff;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
            </style>

<div class="login-container">
      <div class="login-box">
    
      <?php
// (A) PROCESS ORDER FORM
if (isset($_POST["title"])) { 
  require "upload_text.php";
  echo "<script>alert('successfully added');document.location.href='display_eating';</script>";
  echo $result == "" 
  
    ? "<div class='notify'></div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
      
       
        <h2>Post</h2>
        <form method="post" enctype="multipart/form-data">
        <label for="title" style="color:black;">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content1" style="color:black;">Introduction:</label>
        <textarea id="content1" name="content" required id="content" cols="30" rows="10"></textarea>

        <label for="content2" style="color:black;" >content:</label>
        <textarea id="content2" name="content2"  cols="30" rows="10"></textarea>
        <label for="content3" style="color:black;">conclusion:</label>
        <textarea id="content3" name="content3" cols="30" rows="10"></textarea>
        <label for="image" style="color:black;">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required >

        <input type="submit" value="Add Article">
    </form>
      </div>
    </div>
    
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