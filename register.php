<?php
ob_start();
$_SESSION['tablename']="";
$_SESSION['loggedin'] = false;
?>
<?php include('./header.php'); ?>
<?php include('./navbar.php'); ?>
<?php include('./db_config/db_connection.php'); ?>
<head>
    <title>Register</title>
	<link rel="icon" type="image/png" href="./icons/icon.ico"/>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<?php 
	$passErr="";
	$seckeyErr="";
	$msg = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$secretkey = $_POST['secretkey'];

		if (strlen($password) < 6 ) {
			$passErr = "Password must has atleast 6 characters!";
		}
		if (strlen($secretkey) < 4 ) {
			$seckeyErr = "SecretKey must has atleast 4 characters!";
		}
		$sql = "SELECT user_email FROM users WHERE user_email ='$email'";        
		$result = mysqli_query($mysql,$sql);
		if (mysqli_num_rows($result) == 0) {
			if ($passErr == "" && $seckeyErr =="" ) {
			$sql = "INSERT INTO users SET
			user_email='$email',
			password= '$password',
			secret_key = '$secretkey'
			";
			$result = mysqli_query($mysql,$sql);
			if(!empty($result)){
			   $name= $email;
    			$index =0;
 				for($i=0;$name[$i] !='@';$i++){
    				 $index++;
 					}
 			$exist_name = $_SESSION['tablename'] = $tablename = substr($name,0,$index);
			 $sql = "CREATE TABLE IF NOT EXISTS ".$tablename."(
				contact_id int NOT NULL AUTO_INCREMENT,
				contact_name varchar(255) NOT NULL,
				contact_number int,
				contact_email varchar(255),
				PRIMARY KEY (contact_id)
			)";
				$result = mysqli_query($mysql,$sql);
				if($result){
					echo '<script> alert("Registration Successfull"); </script>';
					header('location:login.php');
					
				}
				
			}
		}
	}
	else{
		$msg = "Email aldready exist";
	}
} 
	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Signup to Get Started
					</span>
					<span class="txt1 p-b-11">
						E-Mail
					</span>
					<p style="color:red;"><?php 
					if ($msg != "") {
						echo $msg;
					}

					?></p>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "E-Mail is required">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<p style="color:red;"><?php 
					if ($passErr != "") {
						echo $passErr;
					}

					?></p>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
                    <span class="txt1 p-b-11">
						secret key
					</span>
					<p style="color:red;">
					<?php 
					if ($seckeyErr != "") {
						echo $seckeyErr;
					}

					?></p>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "SecretKey is required">
						<input class="input100" type="text" name="secretkey" >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
				    <input type="submit" class="login100-form-btn" value="Signup">
					</div>
                    <div><br> Already have an account? <a href="./login.php">Sign in now.</a>
                   </div> 
				</form>
			</div>
		</div>
	</div><?php
	ob_flush();
	?>
</body>
</html>