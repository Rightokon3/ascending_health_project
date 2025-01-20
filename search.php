
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
    <title>UNIFY</title>
</head>
<body>

    <div class="header">


    <div class="container">
        <div class="navbar">
            <div class="logo">
               <label><h4><a href="index.php" style="font-size: 50px; font-weight: 600; color:black;    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Unify</a></h4></label> 
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

            <div class="form-container">
        
        <form action="" method="post">
            <i class="fa fa-user" style="font-size: 50px; color:grey; "></i>
             <h3 style="color:grey;  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">.UNIFY</h3>
            
            <input type="search" name="search" required placeholder="Search here....." >

            <input type="submit" name="submit" value="Search" class="form-btn">
            
           
        </form>
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
