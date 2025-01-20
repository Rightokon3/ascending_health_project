<?php include("nav.php")?>
<div class="row">
	<div class="col-2">
	<div class="login-container">
		
        <form action="" method="post">
			<div style="color:white;background:black;text-align:center;">
			<?php
	require "mail.php";
	require "functions.php";
	check_login();

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 2));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = "your code is " . $vars['code'];
		$subject = "Email verification";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verified()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['USER']->id;
					$query = "update users set email_verified = email where id = '$id' limit 1";
					
					database_run($query);

					header("Location: login.php");
					die;
				}else{
					echo "The code has expired";
				}

			}else{
				echo "invalid code";
			}
		}else{
			echo "This account has already been verified";
		}
	}

?>
</div>
			<i style="color:white;background:black;">
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</i>
           <p><p style="color: #fff; font-weight: 500;">Hi, <?=$_SESSION['USER']->username?>,A code has been  sent to your email copy it can place it here. this code is only valid for 2 minutes</p></p>         
           <input type="text" name="code" placeholder="paste your code here" required >
           <input type="submit" name="submit" value="continue" class="btn" >
		  <a href="verify.php"> <input type="button" value="Resend" style="width: 100px;background: linear-gradient(to top,rgba(0, 0, 0, 0.8)50%,rgba(0, 0, 0, 0.763)50%)transparent;color:white;"></a>
        </form>
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