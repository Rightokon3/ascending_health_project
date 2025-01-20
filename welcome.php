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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="health.css">
    <script src="scripts.js"></script>
    <link rel="icon" type="image/jpg" href="Captures/logo.jpg" >
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
    <title>Ascending health foundation</title>
</head>
<body>
    <header>
       <h1>Acsending health Admin Page</h1> 
    </header>
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
header i{
            float:right;
            margin-top:-20px;
        }
        nav{
    margin-top:-20px;
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
            background-color: #4CAF50;
            color: white;
        }
        .welcome{
            background-image:linear-gradient(
        to right,
        rgba(18, 172, 18, 0.9),
        rgba(118, 221, 132, 0.7)
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


    </div>
    <main>
    <section class="section_container service_container">
        <div class="service_header">
            <p style="color:black;font-size:20px;font-weight:600;" >Welcome to the admin page</p>
        </div>
        <div class="service_grid">
            <div class="service_card">
                <span><i class="fa fa-spoon"></i><i class="fa fa-glass"></i></span>
                <h4>Healthy eating</h4>
                         <a href="admin_healthy_eating.php">Learn more</a>
            </div>
                <div class="service_card">
            <span><img src="Captures/Acute-Stroke-Unit-1.svg" alt="" height="50px"></span> 
                    <h4>Mental health</h4>
                    
                    <a href="admin_mental_health.php">Learn more</a>
                </div>
                    <div class="service_card">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h4>Information about common conditions, symptoms, and treatments.</h4>
                        <p>
                        <a href="admin_information.php">Learn more</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-group"></i></span>
                        <h4>Our activites.</h4>
                        <p>
                        <a href="admin_activites.php">Learn more</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-ambulance"></i></span>
                        <h4>Emergency tips.</h4>
                        <a href="admin_emergency.php">Learn more</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-heart"></i></span>
                        <h4>Health tips/suggestions</h4>
                        
                        <a href="admin-tips.php">Learn more</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-user-md"></i></span>
                        <h4>The doctors</h4>
                        <a href="admin_team.php">Learn more</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-calendar"></i></span>
                        <h4>Booking</h4>
                        <a href="admin_booking.php">Learn more</a>
                    </div>  <div class="service_card">
                        <span><i class="fa fa-check"></i></span>
                        <h4>Tips</h4>
                        <a href="admin_recieve_tips.php">Learn more</a>
                    </div>  <div class="service_card">
                        <span style="font-size:60px;">?</span>
                        <h4>Health related questions</h4>
                        <a href="admin_question.php">Learn more</a>
                    </div>
                    <div class="service_card">
                        <span><i class="fa fa-question-circle"></i></span>
                        <h4>Check_up received</h4>
                        <a href="admin_checkup">Learn more</a>
                    </div>
            </div>
    </section>
</main>
<div class="footer">
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