<?php
include('includes/pdoconfig.php');
if(!empty($_POST["roomid"])) 
{	
$id=$_POST['roomid'];
$stmt = $DB_con->prepare("SELECT * FROM `room` WHERE `ID_Hostel` = $id");
$stmt->execute(array('$id' => $id));

 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	 	echo $row['ID_Room'] .",";
 }
}

if(!empty($_POST["rid"])) 
{	
	$id=$_POST['rid'];
	$stmt = $DB_con->prepare("SELECT * FROM room WHERE ID_Hostel = $id");
	$stmt->execute(array('$id' => $id));

 if($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	echo htmlentities($row['Fees']);
 }
}
?>


