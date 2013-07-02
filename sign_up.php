<?php
	session_start();
	
	include("includes/db_connect.php");
	
	if(isset($_POST['submit'])){
		$error= array();
		
		//username
		
		if(empty($_POST['username'])){
				$error[]='please enter a username. ';
		}	else if ( ctype_alnum($_POST['username'])) {
				$username = $_POST['username'];
		} 	else{
			$error[]='Username must consist of letters and numbers only. ';
		}
        
        //phone number
		if (empty($_POST['phone_number'])) {
			# code...
			$error [] = 'please enter a valid phone number';
		}elseif (ctype_digit($_POST['phone_number'])) {
			# code...
			$phone_number= $_POST['phone_number'];
		}else{
			$error [] = 'Mobile number must consist of only numbers';
		}


		//email
		if(empty($_POST['email'])){
				$error[]='please enter your email. ';
		}	else if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$_POST['email'])){
				$email = mysql_real_escape_string($_POST['email']);
		} 	else {
			$error[]='Your e-mail address is invalid';
		}
		
		//password
		if(empty($_POST['password'])){
			$error[]='please enter a password. ';
		}	else {
				$password = mysql_real_escape_string ($_POST['password']);
		}	
		
		if (empty ($error)){
			$result = mysql_query("SELECT * FROM users WHERE email='$email' or username='$username'") or die (mysql_error());
			if (mysql_num_rows($result)==0){
				$activation = md5(uniqid(rand(), true));
				$result2 = mysql_query("INSERT INTO users (user_id,firstName,lastName,username,phone_number,email,password) VALUES('','$username','$email','$password') ") or die (mysql_error());
					if(!$result2){
						die('Choud not insert into database: '.mysql_error());
					}else {
						echo "You have succesfully signed up";
					}
			
		}else{
			 	header('Location:promt.php?x=2');
			 }
		}else{
			$error_message ='<span class="error">' ;
				foreach($error as $key => $values) {
					$error_message.= "$values";
				}
			$error_message.="</span> <br/><br/>";
		}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Registration</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/forms.css">
	<link rel="stylesheet" href="css/register.css">
	<!--<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">-->
</head>
<body>
	<div class = "bg" >
	<?php include 'includes/header.php';?>
	<div id="wrapper">
		<!--<aside id="left_side">
			<h3>Put the logo of globest here</h3>
			<img src="images/logo.png" alt="there should be registration banner" />
		</aside>-->
		<section id="right_side">
			<form id="sign_up_form" class="container" method="post" action="">
				<h3>Register</h3>
				 <div class="field">
					<label for="firstName">First Name:</label>
					<input type="text" class="input" id="firstName" name="firstName" maxlength="50" />
					<p class="hint">maximum 50 characters (letters and numbers only) </p>
				</div>
				<div class="field">
					<label for="lastName">Last Name:</label>
					<input type="text" class="input" id="last_name" name="lastName" maxlength="50" />
					<p class="hint">maximum 50 characters (letters and numbers only) </p>
				</div>
				<div class="field">
					<label for="username">Username:</label>
					<input type="text" class="input" id="username" name="username" maxlength="20" />
					<p class="hint">maximum 20 characters (letters and numbers only) </p>
				</div>
				<div class="field">
					<label for="username">Mobile Number:</label>
					<input type="text" class="input" id="phone_number" name="phone_number"/>
					<p class="hint">maximum 20 characters (Numbers only) </p>
				</div>
				<div class="field">
					<label for="email">Email:</label>
					<input type="text" class="input" id="email" name="email" />
				</div>
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" class="input" id="password" name="password" maxlength="20" />
					<p class="hint">maximum 20 characters (letters and numbers only) </p>
				</div>
				<input type="submit" class="buttons" name="submit" id="submit" value="Register" />
			</form>
		</section>
	</div>
	</div>
</body>
</html>