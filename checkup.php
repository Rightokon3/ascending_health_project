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

    <div class="contact_header">


    <div class="container">
        <div class="navbar">
            <div class="logo">
               <label><a href="home" style="font-size: 15px; font-weight: 600; color:black;"> <img src="captures/logo.jpg" alt="" width="35px" height="35px"> </a></label> 
            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="home"> Home</a></li>
                    <li><a href="about"> About us</a></li>
                    <li><a href="services"> Our services</a></li>
                    <li><a href="contact"> Contact us</a></li>
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
        <br><br><br><br><br>
        <div class="row">
            <div class="text-center">
                <center><i class="fa fa-stethoscope" style="color:white;font-size:300%;"></i></center>
              <center><h1 style="color:white;font-size:300%;"><i>Check <span style="color:black;">up</span></i></h1></center>  
            </div>
            
        </div> 
         
    </div>
    </div>
    <br><br>
    <div class="emergency">
        <p>Do you want us to make an in-person visit with you or want  us to do a free check-up or test just fill the form and we will get to you as soon as possible</p> 
        <br><br>
   <center> <div class="header_form">
                <form action="" method="post">
                <?php
// (A) PROCESS ORDER FORM
if (isset($_POST["fname"])) { 
  require "upload_checkup.php";
  echo "<script>alert('successfully sent');</script>";
  echo $result == "" 
    ? "<div class='notify'></div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
                    <p><small>Checkup form</small></p>
                    <input type="text" id="fname" name="fname" required placeholder="Enter your first name">
            <input type="text" id="l-name" name="lname" required placeholder="Enter your last name">
            <input type="number" id="p-number" name="number" required placeholder="Enter your number">
            <input type="email" id="e-mail" name="email" required placeholder="Enter your Email">
            <div class="left">
               <h3 style="color:black;">Want to you want</h3>  <br> <br>
               <input type="radio" id="visit" name="check-up" value="Visit">
  <label for="visit">In person visit</label><br>
  <input type="radio" id="Free check-up" name="check-up" value="check-up">
  <label for="Free check-up">Free check-up</label><br>
    <input type="radio" id=" Free test" name="check-up" value="test">
      <label for="test">Free test</label><br>
    <input type="radio" id="I want all" name="check-up" value="all">
      <label for="I want all">I want all</label>
      </div>
                    <button class="btn form_btn">Submit</button>
                </form>
            </div>
    </div>
    <br><br>
</center>
    
    <style>
        .emergency{
            background-color: #12ac8e;
        }
        .header_form{
    width: 100%;
    max-width: 350px;

}
.left{
    text-align:left;
}
.left label{
    color:black;
}
.header_form form{
    display: grid;
    gap: 1rem;
    padding: 2rem;
    background-color: var(--white);
    border-radius: 10px;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.header_form input{
    padding: 1rem;
    outline: none;
    border: none;
    font-size: 1rem;
    color: var(--primary-color);
    background-color: var(--primary-color-light);
    border-radius: 5px;

}

.header_form input::placeholder{
    color: var(--primary-color);

}

.form_btn{
    background-color: var(--primary-color);
    transition: .3s;

}

.form_btn:hover{
    background-color: var(--primary-color-dark);

}

.header_form p{
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
}
    </style>
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
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>About us</h3>
                        
                        <div class="app-logo">
                            <p><a href="meet" style="color:black;">meet the team</a></p>
                            <p><a href="about" style="color:black;">About us</a></p>
                        </div>
                    </div>
                    <div class="footer-col-2">
                       <img src="Captures/logo.jpg" width="125px">
                        <p>Ascending health foundation</p>
                    </div>
               
                <div class="footer-col-3">
                    <h3>Services</h3>
                    <li>Reliable information about common medical conditions, symptoms, and treatments</li><br>
                    <li><a href="meet" style="color:black;">Well and smart health specialist avaliable nationwide</a></li><br>
                    <li><a href="emergency" style="color:black;">Emergency Resources</a></li><br>
             
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
       
       