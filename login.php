<?php
ob_start();
session_start();

include ('./db_config/db_connection.php');
$_SESSION['page'] = 'Login';
$_SESSION['loggedin'] = false;
$_SESSION['username'] ="";
$_SESSION['id'] = 0;
$_SESSION['tablename'] = "";
?>
<?php include('./header.php') ?>
<?php include('./navbar.php') ?>
<head>
<link rel="icon" type="image/png" href="./icons/icon.ico"/>
<title>Login</title>
</head>
<body>	
    <?php
	$user_email ="";
	$user_password = "";
	$mismatchErr = "";
	$err ="";
	$msg ="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT u_id,user_email, password FROM users WHERE user_email ='$email' AND password='$password'";        
		$result = mysqli_query($mysql,$sql);
		if($result){
		$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(!empty($data) && $data['password'] == $password ){
			$id = $data['u_id'];
			$final_email = $data['user_email'];
			$final_password = $data['password'];
			if($email == $final_email && $password == $final_password){
				$name= $email;
    			$index =0;
 				for($i=0;$name[$i] !='@';$i++){
    				 $index++;
 					}
 			$_SESSION['tablename'] = $_SESSION['username'] = substr($name,0,$index);
				$msg = "Login Successfull";
				$_SESSION['loggedin'] = true;
				$_SESSION['id'] = $id;
				header('location:index.php');

			}
		}
		else {
			$err = "Password or Email doesn't match";
		}
	}
	else{
		$mismatchErr = "Somthing Went Wrong" ;
	}
}
	?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
						<?php if ($mismatchErr != "") { ?>
							<p style="color:red;"> <?php echo $mismatchErr; ?></p>
							
						<?php } ?>
						<?php if ($err != "") { ?>
							<p style="color:red;"> <?php echo $err; ?></p>
							
						<?php } ?>
						
					<span class="login100-form-title p-b-32">
						Login to Your Account
					</span>

					<span class="txt1 p-b-11">
						E-Mail
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
                    
					
					

					<div class="container-login100-form-btn">
					<input type="submit" value="Signin" class="login100-form-btn">
					</div>
           
                   <div><br> Don't have an account? <a href="./register.php">Sign up now.</a>
                   </div> 
				</form>
			</div>
		</div>
	</div>
	<?php ob_flush(); ?>
</body>
</html>