<html>
<head>
<title>Login</title>
<head>

	<link rel="icon" href="anulogo.png" type="image/gif" sizes="24x36">

	<link rel="stylesheet" type="text/css" href="style.css" />

	<link rel="stylesheet" type="text/css" href="style.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>


	<div class="container">

	<div class="loginbox">

		<img src="logo.png" class="anulogo">

		<h1>Login </h1>

			<form method="POST" action="validate.php">

				<p><i class="fas fa-user"></i></p>

				<input type="text" name="id" placeholder="Enter Student ID">

				<p><i class="fas fa-user-lock"></i></p>

				<input type="password" name="password" placeholder="Enter Password"><br />

				<input type="submit" name="" value="Login"><br />

				<a href="#">Forget your password?</a><br /><br />

				<a href='register.php'>Create account</a>

			</form>
		</div>
	</div>


</body>
</head>
</html>