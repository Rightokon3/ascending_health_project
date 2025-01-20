<?php 
session_start();
$error = array();


require "mail_forget.php";

	if(!$con = mysqli_connect("localhost","root","","verify_db")){

		die("could not connect");
	}

	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}

	//something is posted
	if(count($_POST) > 0){

		switch ($mode) {
			case 'enter_email':
				// code...
				$email = $_POST['email'];
				//validate email
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$error[] = "Please enter a valid email";
				}elseif(!valid_email($email)){
					$error[] = "Invalid email";
				}else{

					$_SESSION['forgot']['email'] = $email;
					send_email($email);
					header("Location: forget.php?mode=enter_code");
					die;
				}
				break;

			case 'enter_code':
				// code...
				$code = $_POST['code'];
				$result = is_code_correct($code);

				if($result == "the code is correct"){

					$_SESSION['forgot']['code'] = $code;
					header("Location: forget.php?mode=enter_password");
					die;
				}else{
					$error[] = $result;
				}
				break;

			case 'enter_password':
				// code...
				$password = $_POST['password'];
				$password2 = $_POST['password2'];

				if($password !== $password2){
					$error[] = "Passwords do not match";
				}elseif(strlen(trim($password)) < 4){
					$error[] = "Password must be longer than 4 characters";
				}
				elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
					header("Location: forget.php");
					die;
				}else{
					
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}

					header("Location: loginindex.php");
					die;
				}
				break;
			
			default:
				// code...
				break;
		}
	}
	function send_email($email){
		
		global $con;

		$expires = time() + (60 * 4);
		$code = rand(10000,99999);
		$email = addslashes($email);

		$query = "insert into forget (email,code,expires) value ('$email','$code','$expires')";
		mysqli_query($con,$query);

		//send email here
		send_mail($email,'Password Recovery',"Forget your password no worry. your recovery code is  " . $code );
	}
	
	function save_password($password){
		
		global $con;

		$password = hash('sha256',$password);
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "update users set password = '$password' where email = '$email' limit 1";
		mysqli_query($con,$query);

	}
	
	function valid_email($email){
		global $con;

		$email = addslashes($email);

		$query = "select * from users where email = '$email' limit 1";		
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				return true;
 			}
		}

		return false;

	}

	function is_code_correct($code){
		global $con;

		$code = addslashes($code);
		$expires = time();
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "select * from forget where code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expires'] > $expires){

					return "the code is correct";
				}else{
					return "this code has expired";
				}
			}else{
				return "incorrect code";
			}
		}

		return "Incorrect code";
	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forgot</title>
</head>
<?php include('nav.php')?>
<body>

<div class="row">
            <div class="col-2">
                <h1>Passwory recovery </h1>
                <p>Forget your password no worries just follow this steps to proceeds 😉😉 </p>
                
            </div>

            <div class="col-2">
<div class="login-container">
    
		<?php 

			switch ($mode) {
				case 'enter_email':
					// code...
					?>
					
						<form method="post" action="forget.php?mode=enter_email"> 
							<h2 style="color:grey;">Password recovery</h2>
							<i style="color:white;">Enter your email below</i><br>
							<br><br>
							<i style="margin: 10px 0; background:black; color: white;text-align:center;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</i>
							<input  type="email" name="email" placeholder="Email" required><br>
							<br>
							<input type="submit" value="Next">
							<br><br>
							<div><a href="loginindex.php" style=" display: inline-block;background: #000000;color: #fff;padding: 8px 30px;border-radius: 30px;transition: background 0.5s;" > Login</a></div>
						</form>
					<?php				
					break;

				case 'enter_code':
					// code...
					?>
						<form method="post" action="forget.php?mode=enter_code"> 
							
							<i style="color:white; font-size:20px;">A code has been sent to your email copy and paste it here . code vaild for only 4 minutes</i><br>
							<br><br>
							<p style="margin: 10px 0; background:black; color: white;text-align:center;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</p>

							<input type="text" name="code" placeholder="paste your code here....." required><br>
							<br>
							<input type="submit" value="Next">
							<a href="forget.php">
								<input type="button" value="try again">
							</a>
							<br><br>

						</form>
					<?php
					break;

				case 'enter_password':
					// code...
					?>
						<form method="post" action="forget.php?mode=enter_password"> 
							<i style="color:white;font-size:20px;">Enter your new password</i>
							<br><br>
							<p style="font-size: 12px;color:white; background:black;text-align:center;">
							<?php 
								foreach ($error as $err) {
									// code...
									echo $err . "<br>";
								}
							?>
							</p>

							<input class="text" type="text" name="password" placeholder="Password" id="password" required><br>
												<br>							
					  	<input class="text" type="text" name="password2" placeholder="Retype Password" required ><br>                 
						  <input type="submit" value="continue" style="float: right;">
							<a href="forget.php">
								<input type="button" value="try again">
							</a>
							<br><br>
						</form>
					<?php
					break;
				
				default:
					// code...
					break;
			}

		?>
</div>
		
</body>
</html>