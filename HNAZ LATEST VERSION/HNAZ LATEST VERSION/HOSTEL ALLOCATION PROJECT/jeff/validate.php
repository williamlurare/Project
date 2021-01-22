<?php
    //establish connection to the database server 
	$connect=mysqli_connect("localhost","root","") or die("Could not connect to the database server");
	
	
	//select the database for user
	
	mysqli_select_db($connect, "anudb")
	or die("Could not select the database???");


//Receive login data and store in variable
$id=$_POST['id'];
$pass=($_POST['password']);


//check if username and password are in the mysqli list table
$result=mysqli_query($connect, "select * from login where id='$id' AND password='$pass' ");


/*$count = mysqli_nums_rows($result);
if($count ==1){

  echo "<br /> Login Successful <br />";

}else{


	echo "<br /> Login Failed <br />";
}*/


while 
(($row = mysqli_fetch_row($result))!=FALSE){

  echo $row[0];


  if(($row[0]=$id) and ($row[1]=$pass)){

 echo "<br /> Login Successful <br />";


}

else {

    echo "<br /> Login Failed <br />";
}



}
//close connection
 mysqli_close($connect);

?>
 