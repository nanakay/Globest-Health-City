<!DOCTYPE html>
<html lang="en">
<head>
<title>FitLine | Diets</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/forms.css">
<link rel="stylesheet" href="css/register.css">
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page3">
<div class="bg">
	 <!--==============================header=================================-->
	<?php include 'includes/header.php';?>

	<!--==============================content================================-->
	  <section id="content">
	    <form id="sign_up_form" class="container" method="post" action="" style = "margin: auto;">
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
<!--==============================footer=================================-->
<?php include 'includes/footer.php';?>

</body>
</html>
