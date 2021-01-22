<?php
   
	$connect=mysqli_connect("localhost","root","");
	
	if(!$connect){
		echo "Could not connect to the database server";
	}
	else{
		echo "Connectin Successful";
		echo "<br /> ";
		echo "<br /><a href='login.php'>Login here!</a> <br />";
	}
	

	
	mysqli_select_db($connect, "anudb")
	or die("Could not select the database???");
	
	
	$username=$_POST['username'];
	$id=$_POST['id'];
	$password=$_POST['password'];
	
	

	mysqli_query($connect, "Insert into login (username, id, password) value ('$username' , '$id' , '$password')") ;
	

	mysqli_close($connect);
	
?>