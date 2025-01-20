<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM team LIMIT 4";
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
<style>
</style>
    <div class="header">


    <div class="container">
        <div class="navbar">
            <div class="logo">
               <label><a href="home"> <img src="captures/logo.jpg" alt="" width="35px" height="35px"> </a></label> 
            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="home">Home</a></li>
                    <li><a href="about"> About us</a></li>
                    <li><a href="services"> Our services</a></li>
                    <li><a href="contact">Contact us</a></li>
                    <li><a href="blog">Blog</a></li>
                </ul>
            </nav>
            <button onclick="toggleDropdown()" class="dropbtn btn" id="bag">Find us on <i class="fa fa-caret-down"></i></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#" title="facebook"><i class="fa fa-facebook" style="color:white;" ></i></a>
            <a href="#" title="linkedin"><i class="fa fa-linkedin"  style="color:white;"></i></a>
            <a href="#" title="X"><i class="fa fa-twitter"  style="color:white;" ></i></a>
            <a href="#" title="whatsapp"><i class="fa fa-whatsapp"  style="color:white;" ></i></a>
            <a href="#"  title="instagram"><i class="fa fa-instagram"  style="color:white;"></i></a>
        </div>
            <i class="fa fa-bars" id="menu-icon" onclick="menutoggle()" style="font-size: 20px; font-weight: 600;color:white;"></i>
        </div>
        <div class="row">
            <div class="col-2">
                <h1 style="color:white;"><i>Ascending <span style="color:white;">health</span>  foundation</i></h1>
                <p><i>Creating hope promoting wellness</i></p>
            </div>
            <div class="col-2">
            <div class="login-container">
       
       <form action="" method="post"> 
           <h2 style="text-align:center;">Book an appointment</h2>
           <?php
           // (A) PROCESS ORDER FORM
          if (isset($_POST["fname"])) { 
            echo "<script>alert('We have recieved your booking');document.location.href='home';</script>";
        require "appointment.php";
        echo $result == "" 
           ? "<div class='notify'></div>" 
            : "<div class='notify'>$result</div>" ;
                 }
                  ?>
            <input type="text" id="fname" name="fname" required placeholder="Enter your first name">
            <input type="text" id="l-name" name="lname" required placeholder="Enter your last name">
            <input type="number" id="p-number" name="number" required placeholder="Enter your number">
            <input type="email" id="e-mail" name="email" required placeholder="Enter your Email">
             
            <button type="submit" class="btn">Book Appointment</button>
      </div> 
          
       </form>
   </div>
            </div>
            
        </div> 
         
    </div>
    </div>
<main>
    <div class="text-center">
        <img src="captures/logo.jpg" alt="logo" width="300px" height="20%">
</div>
</main>
        <div class="about">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="Captures/nurse.jpg" alt="" class="nurse" height="50%" weight="50%" style="max-width: 400px;margin: auto;border-radius: 10px;">
                    </div>
          
                <div class="col-2">
                   
                    <h3 style="color:black;"><i>About us</i></h3>
                    <p style="color:black;">
                    Welcome to Ascending health foundation, your trusted companion on the journey to optimal well-being. We understand that your health is your greatest asset, and we are dedicated to empowering you with the knowledge and resources you need to make informed decisions about your wellness.

At Ascending health foundation, we believe in a holistic approach to health that encompasses not just physical well-being, but also mental and emotional wellness. Our mission is to provide a comprehensive platform where individuals can access reliable information, expert insights, and valuable tools to enhance every aspect of their health.

What sets us apart is our commitment to delivering accurate, up-to-date information from reputable sources. Our team of healthcare professionals and content experts work tirelessly to ensure that you receive content that is not only informative but also trustworthy. We believe that well-informed individuals are better equipped to take control of their health and make positive lifestyle choices.

Explore our website to discover a wealth of articles, guides, and resources covering a wide range of health topics. Whether you are looking for advice on nutrition, fitness, mental health, or preventive care, we have you covered. Our user-friendly interface and intuitive navigation make it easy for you to find the information you need quickly and efficiently.

                    </p><br>
                    <a href="about" class="btn">Learn more &#8594;</a>
                </div>
                </div>
            </div>
</div>

<section class="section_container service_container">
        <div class="service_header">
            <div class="service_header_content">
                <h2 class="section_header">Our special services</h2>
                <p>We offer you with a wide range of services such as  </p>
            </div>
        </div>
        <div class="service_grid">
            <div class="service_card">
                <span><i class="fa fa-thumbs-up"></i></span>
                <h4> Reliable information about common medical conditions, symptoms, and treatments.</h4>
                <p>
                  We offer with a accurate and reliable information about a certain medical conditions,symptoms,and teatments
                </p>
                <a href="">Learn more</a>
            </div>
                <div class="service_card">
                    <span><i class="fa fa-user-md"></i></span>
                    <h4>Well and smart health specialist avaliable nationwide</h4>
                    <p>
                   We are avaliable with smart and verfied health specialist avaliable within all part of the country
                    </p>
                    <a href="meet">Learn more</a>
                </div>
                    <div class="service_card">
                        <span><i class="fa fa-ambulance"></i></span>
                        <h4>Emergency Resources</h4>
                        <p>
                        Information on emergency services, including contact numbers and first aid tips. 
                        </p>
                        <a href="emergency">Learn more</a>
                    </div>
                    <div class="service_card">
                <span><i class="fa fa-stethoscope "></i></span>
                <h4>Free medical check-up and test.</h4>
                <p>
                 We offer with an in-pereson visit and a free medical test and checkup 
                </p>
                <a href="checkup">Learn more</a>
            </div>
            <div class="service_card">
                <span><i class="fa fa-medkit "></i></span>
                <h4>A health blog.</h4>
                <p>
                 We consists of a health blog that includes all you need to more about us and the health world<i class="fa fa-globe"></i>
                </p>
                <a href="blog">Learn more</a>
            </div>
            </div>
    </section>
            <div class="team">
            <section class="section_container doctors_container">
        <div class="doctors_header">
            <div class="doctors_header_content">
                <h2 class="section_header">Our special doctors</h2>
                <p>
                    We take pride in our exceptional team of doctors,each a specialist in their respective field
                </p>
            </div>
            <div class="doctors_nav">
               
                <span><a href="meet" title="see more" style="color:#12ac8e,;"><i class="fa fa-arrow-right" style="color:black;"></i></a></span>
            </div>
        </div>
        <div class="doctors_grid">
        <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='doctors_card'>";
        echo "<div class='doctors_card_image'>";
        echo "<img src='" . $row['image'] . "' alt='Uploaded Image' width='200px' height='200px' style='border-radius: 10px;'>";
        echo "<div class='doctors_socials'>";
        echo " <a href='https://wa.me/".$row['whatsapp_number']."'><span><i class='fa fa-whatsapp'></i></span></a>";
        echo " <a href='mailto:".$row['email']."'><span><i class='fa fa-envelope'></i></span></a>";
        echo " <a href='tel:".$row['phone_number']."'><span><i class='fa fa-phone'></i></span></a>";
        echo "</div>";
        echo "</div>";
        echo "<h4>".$row['first_name']."    ".$row['last_name']."";
        echo "<p>".$row["career"]."</p>";
        echo "</div>";
    }
} else {
    echo "No doctors found.";
}
      
$conn->close();
?>
            </div>
        </div>
    </section>
   </div>
    <style>
        .section_container{
    max-width: var(--max-width);
    margin: auto;
    padding: 5rem 1rem;

}
.team{
    background:white;
}
        .doctors_header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;

}


.doctors_header_content p{
    max-width: 600px;
    color: var(--text-light);

}

.doctors_nav{
    display: flex;
    align-items: center;
    gap: 1rem;

}

.doctors_nav span{
    padding: 5px 15px;
    font-size: 1.5rem;
    color: var(--primary-color);
    background-color: lightgreen;
    cursor: pointer;
    border-radius:10px;
}

.doctors_grid{
    margin-top: 4rem;
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 2rem;
}


.doctors_card{
    text-align: center;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    cursor: pointer;
    overflow: hidden;

}
.service_header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}

.service_header_content p{
    max-width: 600px;
    color: var(--text-light);

}

.service_btn{
    padding: .75rem 1rem; 
    outline: none;
    font-size: 1rem;
    color: var(--primary-color);
    border: 1px solid var(--primary-color); 
    background-color: transparent;
    border-radius: 5px;
    white-space: nowrap;
    cursor: pointer;
    transition: 0.3s;

}


.service_btn:hover{
    color: var(--white);
    background-color: var(--primary-color);

}


.service_grid{
    margin-top: 4rem;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;

}

.service_card{
    padding: 2rem;
    text-align: center;
    border-radius: 10px;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
    cursor: pointer;

}
.service_card {
    background:white;
}
.service_card span{
    display: inline-block;
    margin-bottom: 1rem;
    padding: 10px 20px;
    font-size: 2.5rem;
    color: var(--primary-color);
    background-color: var(--primary-color-light);
    border-radius: 100%;
    transition: 0.3s;

}

.service_card h4{
    margin-bottom: .5rem;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-dark);

}

.service_card p{
    margin-bottom: 1rem;
    color: var(--text-light);

}

.service_card a{
    color: var(--primary-color);

}

.service_card a:hover{
    color: var(--primary-color-dark);

}


.service_card:hover span{
    color: var(--primary-color-light);
    background-color: var(--primary-color);
}
.doctors_card_image{
    position: relative;
    overflow: hidden;
}

.doctors_socials{
    position: absolute;
    left: 0;
    bottom: -4rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    transition: 0.5s;
}

.doctors_socials span{
    display: inline-block;
    padding: 6px 12px;
    font-size: 1.5rem;
    color: var(--text-dark);
    background-color: var(--white);
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;

}

.doctors_socials span:hover{
    color: var(--primary-color);

}

.doctors_card:hover .doctors_socials{
    bottom: 2rem;

}
.doctors_card h4{
    margin-top: 1rem;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-dark);

}


.doctors_card p{
    margin-bottom: 1rem;
    color: var(--text-light);
}
:root{
    --primary-color:#12ac8e;
    --primary-color-dark:#0d846c;
    --primary-color-light:#e9f7f7;
    --secondary-color:#fb923c;
    --text-dark:#333333;
    --text-light:#767268;
    --white:#ffffff;
    --max-width:1200px;
}
@media (width < 900px){
    .service_grid{
        grid-template-columns: repeat(2,1fr);
        gap: 1rem;

    }

    .about_container{
        grid-template-columns: repeat(1,1fr);
    }
    

    .about_image{
        grid-area: 1/1/2/2;
    }

    .about_content{
        text-align: center;
    }

    .why_container{
        grid-template-columns: 1,1fr;

    }

    .why_content{
        text-align: center;

    }

    .why_grid{
        text-align: left;
    }

    .doctors_grid{
        grid-template-columns: repeat(2,1fr);
        gap: 1rem;
    }
    .footer_container{
        grid-template-columns: repeat(2,1fr);
    }

}

@media (width < 780px){
    .nav_links{
        display: none;

    }

    .header_container{
        flex-direction: column;

    }

}
@media (width < 600px){
    .service_header{
        flex-direction: column;
        text-align: center;

    }
    .service_grid{
        grid-template-columns: repeat(1,1fr);
    }

    .why_grid{
        column-gap: 1rem;

    }

    .doctors_header{
        flex-direction: column;
        text-align: center;
    }
    .doctors_grid{
        grid-template-columns: repeat(1,1fr);
    }

    .footer_bar_content{
        flex-direction: column;
        gap: 1rem;
    }
}
    </style>
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
             <li><a href="services" style="color:black;"><small>see more......</small></a></li>
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
                    <i class="fa fa-map-marker" style="color:black;"></i>St.louis
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