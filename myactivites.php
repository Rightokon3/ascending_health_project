<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM activites";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="health.css">
    <script src="scripts.js"></script>
    <link rel="icon" type="image/jpg" href="Captures/logo.jpg" >
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
    <title>Ascending health foundation</title>
</head>
<body>

    <div class="blog_header">


    <div class="container">
        <div class="navbar">
            <div class="logo">
               <label><a href="home" style="font-size: 15px; font-weight: 600; color:black;"> <img src="captures/logo.jpg" alt="" width="35px" height="35px"> </a></label> 
            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="home"> Home</a></li>
                    <li><a href="about">About us</a></li>
                    <li><a href="services">Our services</a></li>
                    <li><a href="contact">Contact us</a></li>
                    <li><a href="blog">Blog</a></li>
                </ul>
            </nav>
            <button onclick="toggleDropdown()" class="dropbtn" id="bag">Find us on <i class="fa fa-caret-down"></i></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#"><i class="fa fa-facebook" style="color:white;"></i></a>
            <a href="#"><i class="fa fa-linkedin"  style="color:white;"></i></a>
            <a href="#"><i class="fa fa-twitter"  style="color:white;"></i></a>
            <a href="#"><i class="fa fa-whatsapp"  style="color:white;"></i></a>
            <a href="#"><i class="fa fa-instagram"  style="color:white;"></i></a>
        </div>
            <i class="fa fa-bars" id="menu-icon" onclick="menutoggle()" style="font-size: 20px; font-weight: 600;color:white;"></i>
        </div>
        <div class="row">
            <div class="col-2">
          <center>  <h1 style="color:white;font-size:69px"><small></small><i>Our <span style="color:black;">Activites</span></i></h1></center>
            </div>
            
            </div>
            
        </div> 
         
    </div>
    </div>
 <div class="team">
    <center>
    </center>
    <div class="articles-list">
        <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='article'>"; 
        echo "<p>".$row['id']."";
        echo "<img src='" . $row['image_path'] . "' alt='Uploaded Image' class='article-image'>";
        echo " <h2> " . $row['title'] . ".</h2>";
        echo "<p><a href='article_activites?id=".$row['id']."'>Learn more</a><p>";
        
        echo "<hr class='hr-line'>";
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
    color:white;
}
.article a{
    text-decoration:none;
    color:lightgreen;
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
.articles-list{
    background:white;
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
<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>About us</h3>
                        
                        <div class="app-logo">
                            <p>meet the team</p>
                            <p>About us</p>
                        </div>
                    </div>
                    <div class="footer-col-2">
                       <img src="Captures/logo.jpg" width="125px">
                        <p>Ascending health foundation</p>
                    </div>
               
                <div class="footer-col-3">
                    <h3>Services</h3>
                    <li>Reliable information about common medical conditions, symptoms, and treatments</li>
                    <li>Well and smart health specialist avaliable nationwide</li>
                    <li>Emergency Resources</li>
             
                </div>
                <div class="footer-col-4">
                    <h3>Follow </h3>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Linkedin</li>
                </div>
                <div class="footer-col-5" style="color:white;">
                    <h3 style="color:black;">Contact </h3>
                    <li>
                    <i class="fa fa-map-pin" style="color:black;"></i>St.louis
                </li><br>
                <li>
                    <a href="mailto:ibirchfield@bridging-health.org"><i class="fa fa-envelope" style="color:black;"></i>ibirchfield@bridging-health.org</a>
                </li><br>
                <li><a href="tel:+16182032983"><i class="fa fa-phone" style="color:black;"></i>(+1) 618 203 2983</li></a>
            </div>
                </div>
            </div>
             <hr>
        <p class="copyright"> Copyright 2023- Ascending health foundation</p>
 </div>
</body>
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
        </html>