<?php

	require "functions.php";
	check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelog.css">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
    <title>UNIFY</title>
</head>
<body>

<style>
    .side_bar{
    background: rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(15px);
    width: 290px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: -100%;
    overflow-y: auto;
    transition: 0.6s ease;
    transition-property: left;
}
.side_bar.active{
    left: 0;
}

.side_bar .menu{
    width: 100%;
    margin-top: 80px;
}

.side_bar .menu .item{
    position: relative;
    cursor: pointer;

}

.side_bar .menu .item a{
    color: #fffcfc;
    font-size: 16px;
    text-decoration: none;
    display: block;
    padding: 5px 30px;
    line-height: 60px;
}

.side_bar .menu .item a:hover{
    background:linear-gradient(to top,rgba(0, 0, 0, 0.5) 50%,rgba(0, 0, 0, 0.5) 50%),transparent;
    transition: 0.3s ease;
}
.side_bar .menu .item i{
    margin-right: 15px;

}

.side_bar .menu .item a .dropdown{
    position: absolute;
    right: 0;
    margin: 20px;
    transition: 0.3s ease;
}

.side_bar .menu .logout{
justify-content: end;
    bottom: 0;

}
.side_bar .menu .item .sub-menu{
    background: rgba(0, 0, 0, 0.1);
    display: none;

}

.side_bar .menu .item .sub-menu a{
    padding-left: 80px;
}
.rotate{
    transform: rotate(90deg);
}

.close-btn{
    position: absolute;
    color: #fff;
    right: 0;
    margin: 25px;
    cursor: pointer;
}

.menu-btn{
    position: absolute;
    color: #fdfdfd;
    font-size: 20px;
    margin: 25px;
    cursor: pointer;
    border-radius: 100px;

}
</style>
<script type="text/javascript">
        $(document).ready(function(){
            //jquery for toggle sub 
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            //jquery move
            $('.menu-btn').click(function(){
                $('.side_bar').addClass('active');
                $('.menu-btn').css("visibility","hidden");
            });

            $('.close-btn').click(function(){
                $('.side_bar').removeClass('active');
                $('.menu-btn').css("visibility","visible");

            });
        });
    </script>
    <div class="menu-btn">
        <i class="fa fa-bars" style="font-size: 25px; font-weight: 600;min-height: 60px;"></i>
    </div>
    <div class="side_bar">
        <div class="close-btn">
            <i class="fa fa-times"></i>
        </div>
        <div class="menu">
            <div class="item"><a href="shop.php"><i class="fa fa-home"></i>Home</a></div>
            <div class="item"><a href="marketplace.php"><i class="fa fa-user"></i>My marketplace</a></div>

            <div class="item">
                <a class="sub-btn"><i class="fa fa-shopping-cart"></i>Shopping categories <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#" class="sub-item"><i class="fa fa-tablet"></i> <i class="fa fa-headphones"></i> <small style="color: white;">Electronics</small></a>
                <a href="#" class="sub-item"><i class="fa fa-female"></i><i class="fa fa-magic"></i><small style="color: white;"> Women fashion </small></a>
                <a href="#" class="sub-item"><i class="fa fa-male"></i><small style="color: white;">Men fashion</small></a>
                <a href="#" class="sub-item"><i class="fa fa-child"></i><small style="color: white;">kids fashion</small></a>
                <a href="#" class="sub-item"><i class="fa fa-heartbeat"></i><small style="color: white;"> Health</small></a>
                <a href="#" class="sub-item"><i class="fa fa-home"></i><i class="fa fa-coffee"></i><small style="color: white;"> Home and kitchen</small></a>
                <a href="#" class="sub-item"><i class="fa fa-spoon"></i><small style="color: white;">Food</small></a>
                <a href="#" class="sub-item"><i class="fa fa-car"></i><small style="color: white;">Vechiles</small></a>
                <a href="#" class="sub-item"><i class="fa fa-diamond"></i> <small style="color: white;">Jellwery</small></a>
                <a href="#" class="sub-item"><i class="fa fa-heart-o"></i><small style="color: white;"> Family</small></a>
                <a href="#" class="sub-item"><i class="fa fa-laptop"></i> <small style="color: white;">Computers & Accessories</small></a>
                <a href="#" class="sub-item"><i class="fa fa-gamepad"></i><small style="color: white;"> Entertainment</small></a>
                <a href="#" class="sub-item"><i class="fa fa-soccer-ball-o"></i><small style="color: white;">Sports</small></a>
            </div>
            </div>
            <div class="item"><a href=""><i class="fa fa-cog"></i>Settings</a></div>
            <div class="item"><a href=""><i class="fa fa-info-circle"></i>About</a></div>
           <div class="logout"> <div class="item"><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></div></div>
        </div>
    </div>

    <div class="header">


    <div class="container">
        <div class="navbar">
            <div class="logo">
               <label><h4><a href="shop.php" style="font-size: 50px; font-weight: 600; color:black;">Unify</a></h4></label> 
            </div>
           
    
        </div>
   
        <div class="row">
            <div class="col-2">
                <h1>Hey there <i style="color:white;"><?=$_SESSION['USER']->username?></i>, Sell your products here, just enter the details of your products </h1>
            </div>

            <div class="col-2">
            <div class="login-container">
       
        <form action="" method="post" enctype="multipart/form-data"> 
            

            <label for="name">name of products</label>
            <input type="text" id="name" name="name" required placeholder="Enter the name of products ">
            <label for="images">Image of products</label>
            <input type="file" id="images" name="Image" required  accept=".jpg, .jpeg, .png" >
            <label for="catergories">Catergories</label>
        <select id="catergories" name="catergories" style="display: inline-block;background: black;color: #fff;padding: 8px 30px;transition: background 0.5s;">
              <option value="Electronics"><i class="fa fa-tablet"></i> <i class="fa fa-headphones"></i> <small style="color: white;">Electronics</small></option>
                <option value="women fashion"><i class="fa fa-female"></i><i class="fa fa-magic"></i><small style="color: white;"> Women fashion </small></option>
                  <option value="Men fashion"><i class="fa fa-male"></i><small style="color: white;">Men fashion</small></option>
                    <option value="kids fashion"><i class="fa fa-child"></i><small style="color: white;">kids fashion</small></option>
                    <option value="health"><i class="fa fa-heartbeat"></i><small style="color: white;"> Health</small></option>
                    <option value="Food"><i class="fa fa-spoon"></i><small style="color: white;">Food</small></option>
                    <option value="Vechiles"><i class="fa fa-car"></i><small style="color: white;">Vechiles</small></option>
                    <option value="Jellwery"><i class="fa fa-diamond"></i> <small style="color: white;">Jellwery</small></option>
                    <option value="Family"><i class="fa fa-heart-o"></i><small style="color: white;"> Family</small></option>
                    <option value="computer& Accessories"><i class="fa fa-laptop"></i> <small style="color: white;">Computers & Accessories</small></option>
                    <option value="Entertainment"><i class="fa fa-gamepad"></i><small style="color: white;"> Entertainment</small></option>
                    <option value="Sports"><i class="fa fa-soccer-ball-o"></i><small style="color: white;">Sports</small></option>



                </select>
            <label for="price">Price(N)</label>
            <input type="number" id="price" name="price" required value="0" >
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <label for="location">Location</label>
            <input type="text" name="location" id="location" value="uyo">
            <button type="submit">Pubish <i class="fa fa-shopping-cart"></i></button>
        </form>
    </div>
</div>

<style>
    input[type="file"]{
        
        background:black;
        border-radius:30px;
        color:white;
    }
</style>

            </div>
        </div> 
    </div> 
    </div>
    </div>
        </div>
                <div class="footer">
        
        <h3 style="text-align:center;">.Unify</h3>
        <p style="text-align:center; font-size:20px;"><small><i>buy and sell with unify</i></small></p>
       <hr>
<p class="copyright" style="color:white;">&copy; Copyright 2023- Unify</p>
</div>

        </body>
        </html>
