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
          <center>  <h1 style="color:white;font-size:69px"><i>Ascending <span style="color:black;">health</span>Blog</i></h1></center>
            </div>
            
            </div>
            
        </div> 
         
    </div>
    </div>
    <div id="search-container">
        <input type="text" id="search-input" placeholder="Search.....">
        <button onclick="search()">Search</button>
    </div>
    <style>
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
main{
    background:white;
}
                #search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        #search-input {
            padding: 8px;
            width: 250px;
            padding: 1rem;
    outline: none;
    border: none;
    font-size: 1rem;
    color: var(--primary-color);
    background-color: var(--primary-color-light);
    border-radius:100vh 0 150vh 100vh;

        }

        #search-results {
            list-style-type: none;
            padding: 0;
            text-align: left;
        }

        .result-item {
            margin: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button{
            border:none;
            outline:none;
            cursor: pointer;
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: #12ac8e;
            color: white;
        }
        .welcome{
            background-image:linear-gradient(
        to right,
     #12ac8e ,
     #12ac8e
    );
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
        }
        .welcome p{
            font-size:20px;
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
.see:hover{
    color: var(--primary-color-light);
    background-color: var(--primary-color);
}
.section_container{
    max-width: var(--max-width);
    margin: auto;
    padding: 5rem 1rem;
    background:white;

}
.service-container{
    background:wheat;
}
.see{
    display: inline-block;
    margin-bottom: 1rem;
    padding: 10px 20px;
    font-size: 2.5rem;
    color: var(--primary-color);
    background-color: var(--primary-color-light);
    border-radius: 100%;
    transition: 0.3s;
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
    .doctors_socials{
       bottom: 0;
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

<header>
        <h1>Ascending health Blog</h1>
    </header>
    <div class="welcome">
   <h1> 🌟 Welcome to Ascending health blog! 🌿</h1>

<p>Hello and a hearty welcome to our vibrant community of wellness seekers! We're absolutely delighted to have you here at Ascending health blog, your go-to destination for all things health and happiness.

In this cozy corner of the internet, we're dedicated to inspiring and supporting you on your journey to a healthier and more balanced life. Whether you're a seasoned health enthusiast or just starting out, you've found a welcoming space filled with valuable insights, expert advice, and a community ready to cheer you on.

🍏 Take a moment to explore our treasure trove of articles covering topics from nourishing recipes and invigorating workouts to mindfulness practices and mental well-being. Our aim is to be more than just a blog; we're your companions on the path to wellness.

Feel free to dive into discussions, share your experiences, and connect with fellow health enthusiasts. Together, we'll celebrate victories, conquer challenges, and embrace the joy of living a healthier lifestyle.

Your well-being journey begins now, and we're thrilled to be a part of it. Thank you for choosing Ascending health blog as your wellness sanctuary!

Here's to health, happiness, and a wonderful journey ahead!</p>

<br>
<p>
Warm regards,</p>
<br>

<p>Lucia/Ascending health Team</p>

    </div>
    <main>
    <section class="section_container service_container">
        <div class="service_header">
            <p style="color:black;font-size:20px;font-weight:600;" >Our blog consists of various catergories</p>
        </div>
        <div class="service_grid">
            <div class="service_card">
                <span><i class="fa fa-spoon"></i><i class="fa fa-glass"></i></span>
                <h4>Healthy eating</h4>
                <p>
                
                </p>
                <a href="healthy_eating">explore</a>
            </div>
                <div class="service_card">
              <div class="see"><img src="Captures/Acute-Stroke-Unit-1.svg" alt="" height="50px"></div>  
                    <h4>Mental health</h4>
                    <p>
                   
                    </p>
                    <a href="mental">explore</a>
                </div>
                    <div class="service_card">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h4>Information about common conditions, symptoms, and treatments.</h4>
                        <p>
                       
                        </p>
                        <a href="information">explore</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-group"></i></span>
                        <h4>Our activites.</h4>
                        <p>
                       
                        </p>
                        <a href="myactivites">explore</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-ambulance"></i></span>
                        <h4>Emergency tips.</h4>
                        <p>
                       
                        </p>
                        <a href="myemergency">explore</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-heart"></i></span>
                        <h4>Health tips/suggestions</h4>
                        <p>
                       
                        </p>
                        <a href="">explore</a>
                    </div>
            </div>
    </section>
</main>
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