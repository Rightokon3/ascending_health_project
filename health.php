<?php

	require "functions.php";
	check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="unify.css">
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <title>WELCOME TO UNIFY</title>
</head>
<body>
<?php include("nav.php")?>

    <section class="main">
        <h1 style="font-family: 'Times New Roman', Times, serif;"><i>WELCOME <b style="color:black;" ><?=$_SESSION['USER']->username?></b> TO UNIFY</i></h1>
        <p style="color:black;font-weight:600;">Thanks for signing up with unify here you can buy and sell and connect with other marketers. click on the button to get started </p>

        <button  style="text-decoration: none;color: rgb(182, 182, 182);font-size: 24px;border: 2px solid rgb(255, 252, 252);padding: 14px 70px;border-radius: 50px;margin-top: 20px;  width: 50%; background: linear-gradient(to top,rgba(0, 0, 0, 0.5) 50%,rgba(0, 0, 0, 0.5) 50%), transparent; cursor: pointer;:hover{opacity: 0.8;}" title="get started"><i style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color: rgb(116, 102, 102);"><a href="shop.php" style="color: rgb(255, 255, 255); text-decoration: none;">Get started</a></button>
    </section>

   
    </div>
</body>
</html>