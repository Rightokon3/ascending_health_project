<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: account.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelog.css">
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
    <title>UNIFY</title>
</head>
<body>

    <div class="header">


    <div class="container">
        <div class="navbar">
            <div class="logo">
               <label><h4><a href="index.php" style="font-size: 50px; font-weight: 600; color:black;">Unify</a></h4></label> 
            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="loginindex.php">Login</a></li>
                    <li><a href="search.php">Search</a></li>
                   
                </ul>
            </nav>
          <a href="account.php">  <i class="fa fa-user-circle" id="bag" style="font-size: 20px; font-weight: 600;color:black;"></i> <small style="color:black;">My account</small></a>
            <i class="fa fa-bars" id="menu-icon" onclick="menutoggle()" style="font-size: 20px; font-weight: 600;"></i>
        </div>
   
        <div class="row">
            <div class="col-2">
                <h1>Login to start <br>Buying and Selling</h1>
                <p>Login now with your unify account</p>
            </div>

            <div class="col-2">
            <div class="login-container">
       
        <form action="" method="post"> 
            <h2 style="text-align:center;"> Log-in</h2>
            <i style="margin: 10px 0; background:black; color: white; text-align:center;">
            
            <?php if(count($errors) > 0):?>
                <?php foreach ($errors as $error):?>
                    <?= $error?> <br>   
                <?php endforeach;?>
            <?php endif;?>

                </i>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">
            <label for="myInput">Password</label>
            <input type="password" id="myInput" name="password" required placeholder="Enter your password">
           <div class="we"><input type="checkbox" onclick="myFunction()"><small style="color:white;">Show Password</small>
            
            <script>
            function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>
</div> 
            <button type="submit">Login</button>
            <p style="text-align:center;"> <small style="color:grey;">forget</small> <a href="forget.php">password</a></p>
            <p style="text-align:center;"><small style="color:grey;">don't have an account</small> <a href="register.php">sign up now</a></p>
        </form>
    </div>
</div>


            </div>
        </div> 
    </div> 
    </div>
    </div>
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
                <div class="footer">
        
        <h3 style="text-align:center;">.Unify</h3>
        <p style="text-align:center; font-size:20px;"><small><i>buy and sell with unify</i></small></p>
       <hr>
<p class="copyright" style="color:white;">&copy; Copyright 2023- Unify</p>
</div>

        </body>
        </html>
