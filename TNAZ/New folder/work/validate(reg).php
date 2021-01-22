<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "vehicle management");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['email'])) {
 
$driverid = isset($_POST['driverid']);

$veh_reg = isset($_POST['veh_reg']);

$req_date = isset($_POST['req_date']);

$req_time = isset($_POST['req_time']);                                                         

$ret_date = isset($_POST['ret_date']);


$ret_time = isset($_POST['ret_time']);

$destination = isset($_POST['destination']);


$pickup_point = isset($_POST['pickup_point']);


$mobile = isset($_POST['mobile']);


$update_confirm =  "INSERT INTO `confirm` (`driverid`, `veg_reg`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `Lecture_Mobile`) VALUES ('$driverid','$veh_reg','$req_date','$req_time, $ret_date','$ret_time','$destination','$pickup_point','$mobile')";   

if(mysqli_query($link, $update_confirm)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $update_confirm. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>