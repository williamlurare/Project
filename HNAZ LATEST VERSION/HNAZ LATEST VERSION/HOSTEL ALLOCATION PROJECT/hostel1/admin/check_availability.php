<?php 
session_start();
$aid=$_SESSION['id'];
require_once("includes/config.php");
if(!empty($_POST["ID_Room"])) 
{
$roomno=$_POST["ID_Room"];
$result ="SELECT count(*) FROM register WHERE ID_Room=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$roomno);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
echo "<span style='color:red'>$count. Rooom already Taken.</span>";
else
	echo "<span style='color:red'>Rooms are Available</span>";
}

if(!empty($_POST["oldpassword"])) 
{
$pass=$_POST["oldpassword"];
$result ="SELECT password FROM userregistration WHERE password=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$pass);
$stmt->execute();
$stmt -> bind_result($result);
$stmt -> fetch();
$opass=$result;
if($opass==$pass) 
echo "<span style='color:green'> Password  matched .</span>";
else echo "<span style='color:red'> Password Not matched</span>";
}
?>
