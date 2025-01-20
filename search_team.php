<link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
<link rel="stylesheet" href="health.css">
<title>Search</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<a href="meet" style="font-size:20px;color:#12ac8e;"><i class="fa fa-arrow-left"></i>back</a>
 <center><h1 style="color:black;"> <i style="color:blue;"><?php
include "connect_search.php";
if(!isset($_POST['search'])){
    echo"<h2 style='color:#12ac8e;'>Enter your search </h2>";
}else{
    echo"<p style='color:#12ac8e;'>total search of </p>";
    echo  $_POST['search'] ; 
}?>
 </i></h1></center>
<?php
include "connect_search.php";
if(!isset($_POST['search'])){
    echo"<h2> no results found</h2>";
    echo "<h2><a href='meet' style='color:#12ac8e;'>Exit</a><h2>";
}else{
$search=trim($_POST["search"]);

$query=$db->prepare("SELECT * FROM team WHERE  first_name like '%$search%' OR career like '%$search%' OR last_name like '%$search%' or phone_number like 
 '%$search%' OR 'career' LIKE '%$search%' OR 'image' like '%$search%'");

 $query->execute(array());
 $control=$query->fetchAll(PDO::FETCH_OBJ);
 $count=$query->rowCount();
 if($count>0){?>
                  <div class="team">
            <section class="section_container doctors_container">
                <div class="doctors_header">
                    <div class="doctors_headers_content">
                         <div class="doctors_grid">
        <?php
        foreach ($control as $row) {?>
     
        <?php
        echo "<div class='doctors_card'>";
        echo "<div class='doctors_card_image'>";
        echo "<img src='" .$row->image."' alt='Uploaded Image' width='200px' height='200px' style='border-radius: 10px;'>";
        echo "<div class='doctors_socials'>";
        echo " <a href='https://wa.me/".$row->whatsapp_number."'><span><i class='fa fa-whatsapp'></i></span></a>";
        echo " <a href='mailto:".$row->email."'><span><i class='fa fa-envelope'></i></span></a>";
        echo " <a href='tel:".$row->phone_number."'><span><i class='fa fa-phone'></i></span></a>";
        echo "</div>";
        echo "</div>";
        echo "<h4>".$row->first_name."    ".$row->last_name."";
        echo "<p>" .$row->career. "</p>";
        echo "</div>";
?>
       <?php }?>
 <h2><a href="meet">Exit</a></h2>

 <?php }else{
    echo"<h2><center> no results found</center></h2>";
    echo "<h2><center><a href='meet' style='color:#12ac8e;'>Exit</a></center><h2>";
 }
}

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