<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM team";
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

    <div class="header">


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
            <h1 style="color:white;"><i>Ascending <span style="color:#d7fff7;">health</span>  Team</i></h1>
            </div>
            </div>
            
        </div>
</div>
<center>
<div id="search-container">
    <form action="search_team" method="post">
        <input type="search" id="search-input" placeholder="Search doctor or field " name="search" required>
        <button type="submit"><i class="fa fa-search"></i>search</button>
    </form>
</div>
</center>
<div class="team">
            <section class="section_container doctors_container">
        <div class="doctors_header">
            <div class="doctors_header_content">
              <center>
                <h2 class="section_header">Meet the Doctors</h2>
                <p>
                  meet the team behind Ascending health foundation,Each are a specialist on each of their field of carrers
                </p>
                </center>
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
        echo " <a  target='_blank' href='https://wa.me/".$row['whatsapp_number']."'><span><i class='fa fa-whatsapp'></i></span></a>";
        echo " <a href='mailto:".$row['email']."'><span><i class='fa fa-envelope'></i></span></a>";
        echo " <a href='tel:".$row['phone_number']."'><span><i class='fa fa-phone'></i></span></a>";
        echo "</div>";
        echo "</div>";
        echo "<h4>".$row['first_name']."    ".$row['last_name']."";
        echo "<p>".$row["career"]."</p>";
        echo "</div>";
    }
} else {
    echo "No doctors avaliable.";
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
.doctors_header_content{
 align-items:
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
    background-color: var(--primary-color-light);
    cursor: pointer;
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
    background:lightgreen;
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
      
#search-container {
            text-align: center;
            background:white;
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
    border:1px solid green; 

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
        </style>
          <style>
    .custom-select {
      position: relative;
      display: inline-block;
    }

    .custom-select select {
      display: none;
    }

    .select-styled {
      padding: 1rem;
    outline: none;
    border: none;
    font-size: 1rem;
    color: var(--primary-color);
    background-color: var(--primary-color-light);
    border-radius: 5px;
    }

    .select-options {
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      display: none;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 1rem;
    outline: none;
    border: none;
    font-size: 1rem;
    color: var(--primary-color);
    background-color: var(--primary-color-light);
    border-radius: 5px;
    transition:background 0.5s;
    }

    .select-option {
      padding: 10px;
      cursor: pointer;
    }

    .select-option:hover {
      background: lightgreen;
      transition: 0.5s;
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
        <p class="copyright"> Copyright 2020- Ascending health foundation</p>
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

<script>
  function toggleOptions() {
    var selectOptions = document.getElementById("selectOptions");
    selectOptions.style.display = selectOptions.style.display === "none" ? "block" : "none";
  }

  function selectOption(option) {
    var selectStyled = document.getElementById("customSelect").getElementsByClassName("select-styled")[0];
    var realSelect = document.getElementById("realSelect");

    selectStyled.textContent = option.textContent;
    realSelect.value = option.textContent;

    // Close the options
    toggleOptions();
  }

  // Close the options if the user clicks outside the select
  document.addEventListener("click", function (event) {
    var customSelect = document.getElementById("customSelect");
    if (!customSelect.contains(event.target)) {
      document.getElementById("selectOptions").style.display = "none";
    }
  });
</script>