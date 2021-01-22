<?php



// include('validate(reg).php');
 $connection= mysqli_connect("localhost","root","","vehicle management");
 if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$sql= "SELECT * FROM `booking`"; 
//echo $sql;
$res= mysqli_query($connection,$sql);
$row= mysqli_fetch_assoc($res);


  $driverid = isset($_POST['driverid']);

    echo $row['req_date'];
    
    $req_date = isset($_POST['req_date']);

    $req_time = isset($_POST['req_time']);                                                         

    $ret_date = isset($_POST['ret_date']);


    $ret_time = isset($_POST['ret_time']);

    $destination = isset($_POST['destination']);


  $pickup_point = isset($_POST['pickup_point']);


    $mobile = isset($_POST['mobile']);

    echo $row['driverid'];

    $did = $row['driverid'];
    
  


    
    
    //$type =  ($row['veh_type']);

    $fire = $row['req_date'];

    $reqtime = $row['req_time']; 
    

     $retdate = $row['ret_date'];
    

    $rettime = $row['ret_time']; 
    
    
    $destination1 = $row['destination']; 


    $pickuppoint = $row['pickup_point'];     


    

    $Lecture_Mobile =  $row['mobile'];

$sql =  "INSERT INTO `confirm`(`req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `Lecture_Mobile`) VALUES ('$fire','$reqtime','$retdate','$rettime','$destination1','$pickuppoint','$Lecture_Mobile')"; 
$result = mysqli_query($connection,$sql);


if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }