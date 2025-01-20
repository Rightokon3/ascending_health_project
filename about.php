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

    <div class="about_header">


    <div class="container">
        <div class="navbar">
            <div class="logo">
               <label><a href="home" style="font-size: 15px; font-weight: 600; color:black;"> <img src="captures/logo.jpg" alt="" width="35px" height="35px"> </a></label> 
            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="home">Home</a></li>
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
        <div class="row">
            <div class="col-2">
                <center><i class="fa fa-group" style="color:white;font-size:300%;"></i>
            <h1 style="color:white;"><i>About <span style="color:white;">Us</span></i></h1></center>
            </div>
            </div>
            
        </div> 
         
    </div>
    </div>
        <div class="about1" style="background:white;">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="Captures/nurse.jpg" alt="" class="offer-img" height="50%" weight="50%">
                    </div>
          
                <div class="col-2">
                   
                    <h3 style="color:black;"><i>About us</i></h3>
                    <p style="color:black;">
                    Welcome to Ascending health foundation, your trusted companion on the journey to optimal well-being. We understand that your health is your greatest asset, and we are dedicated to empowering you with the knowledge and resources you need to make informed decisions about your wellness.

At Ascending health foundation, we believe in a holistic approach to health that encompasses not just physical well-being, but also mental and emotional wellness. Our mission is to provide a comprehensive platform where individuals can access reliable information, expert insights, and valuable tools to enhance every aspect of their health.

What sets us apart is our commitment to delivering accurate, up-to-date information from reputable sources. Our team of healthcare professionals and content experts work tirelessly to ensure that you receive content that is not only informative but also trustworthy. We believe that well-informed individuals are better equipped to take control of their health and make positive lifestyle choices.

Explore our website to discover a wealth of articles, guides, and resources covering a wide range of health topics. Whether you are looking for advice on nutrition, fitness, mental health, or preventive care, we have you covered. Our user-friendly interface and intuitive navigation make it easy for you to find the information you need quickly and efficiently.

We understand that health is a personal journey, and everyone's path is unique. That's why we offer personalized tools and resources to help you set and achieve your health goals. From interactive quizzes and personalized health assessments to tailored workout plans, we are here to support you every step of the way.

Ascending health foundation is not just a source of information; it's a community of like-minded individuals who are committed to living their healthiest lives. Connect with us through our social media channels, forums, and events to share your experiences, ask questions, and be inspired by others on a similar journey.

Thank you for choosing Ascending health foundation as your partner in health. We are honored to be a part of your wellness journey and look forward to supporting you in reaching your health and lifestyle goals.

Here's to a healthier, happier you!

Ascending health foundation Team





                    </p>
                </div>
                </div>
                <br>
                <br>
                
                <div class="text-center">
                     <p>Ascending health foundation was founded in 2005 and headed by mrs Lucia U Birchfield</p>
                     <img src="captures/lucia.jpg" alt="" style="border:20px solid  #12ac8e">
                   <p style="font-size:20px;color:black; font-weight:600">Mrs lucid Birchfield </p>  
                </div>
               
            </div>
</div>

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