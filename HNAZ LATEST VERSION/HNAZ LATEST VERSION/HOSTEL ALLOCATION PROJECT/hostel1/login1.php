<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT email,password,id FROM userregistration WHERE email=? and password=? ");
				$stmt->bind_param('ss',$email,$password);
				$stmt->execute();
				$stmt -> bind_result($email,$password,$id);
				$rs=$stmt->fetch();
				$stmt->close();
				$_SESSION['id']=$id;
				$_SESSION['login']=$email;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
             $uid=$_SESSION['id'];
             $uemail=$_SESSION['login'];
$ip=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
$city = $addrDetailsArr['geoplugin_city'];
$country = $addrDetailsArr['geoplugin_countryName'];
$log="insert into userLog(userId,userEmail,userIp,city,country) values('$uid','$uemail','$ip','$city','$country')";
$mysqli->query($log);
if($log)
{
header("location:dashboard.php");
				}
}
				else
				{
					echo "<script>alert('Invalid Username/Email or password');</script>";
				}
			}
				?>

<html>
<head>
<title style="font-family: sans-serif;">Login</title>
<head>

	<link rel="icon" href="anulogo.png" type="image/gif" sizes="24x36">

	<link rel="stylesheet" type="text/css" href="styleLog.css" />

	<link rel="stylesheet" type="text/css" href="styleLog.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>


	<div class="container">

	<div class="loginbox">

<a href="Home.html">
  <img src="anulogo.png" class="anulogo" alt="Hnaz logo" style="height: 96px; width:96px;">
</a>


		<h1>Login </h1>

			<form>

				<p><i class="fas fa-user"></i></p>

				<input type="email" name="email" placeholder="Enter Email">

				<p><i class="fas fa-user-lock"></i></p>

				<input type="password" name="password" placeholder="Enter password"><br />

				<input type="submit" name="login" class="btn btn-primary btn-block" value="login" ><br />

				<a href="#" style="font-family: sans-serif;">Forget your password?</a><br /><br />
				<a href="register.html"style="font-family: sans-serif;">Create account</a>

			</form>
		</div>
	</div>


</body>
</head>
</html>
