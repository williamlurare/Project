<?php
 //  include('validate(reg).php');
    $connection= mysqli_connect("localhost","root","","vehicle management");
    session_start();
    
    $id= $_GET['id'];

    $sql= "SELECT * FROM `booking` WHERE booking_id='$id'"; 

    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    $driver_id= $_POST['driverid'];

   $sql2="SELECT * FROM `driver` WHERE driverid='$driver_id'";
   $res2= mysqli_query($connection,$sql2);
    $row2= mysqli_fetch_assoc($res2);

    $sql= "SELECT * FROM `booking` WHERE booking_id='$id'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    $sql1= "SELECT * FROM `vehicle` WHERE veh_available='0'"; 
    //echo $sql;
    $res1= mysqli_query($connection,$sql1);

    $sql2= "SELECT * FROM `driver` WHERE dr_available='0'"; 
    //echo $sql;
    $res2= mysqli_query($connection,$sql2);

if(isset($_POST['email'])) {
 
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    
    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    
    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure='tls';
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    $mail->Username   = 'theyisonlyonewilliamlurare@gmail.com';                     // SMTP username
    $mail->Password   = 'exitpath';                               // SMTP password
    
    //Set who the message is to be sent from
    $mail->setFrom('noble8team@gmail.com', 'TNAZ');
    
    //Set an alternative reply-to address
    //$mail->addReplyTo('theyisonlyonewilliamlurare@gmail.com', 'Jeff Headerson');
    
    //Set who the message is to be sent to
    $mail->addAddress($row['email'] , $row['name']);
    
    //Set the subject line
    $mail->Subject = 'Booking Details';
    
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    
    
    if(isset($_POST['booking_id'])){
        $booking_id = $_POST['booking_id'];
    }
    
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['req_date'])){
        $req_date = $_POST['req_date'];
    }
    if(isset($_POST['req_time'])){
        $req_time = $_POST['req_time'];                                                         
    }
    if(isset($_POST['ret_date'])){
        $ret_date = $_POST['ret_date'];
    }
    if(isset($_POST['ret_time'])){
        $ret_time = $_POST['ret_time'];
    }
    if(isset($_POST['destination'])){
        $destination = $_POST['destination'];
    }
    if(isset($_POST['pickup_point'])){
        $pickup_point = $_POST['pickup_point'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['mobile'])){
        $mobile = $_POST['mobile'];
    }
    
    if(isset($_POST['pickup_point'])){
        $pickup_point = $_POST['pickup_point'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['mobile'])){
        $mobile = $_POST['mobile'];
    }
    
    
    
    echo $row['booking_id']; 
                    
                   
    echo $row['name'];
    
    
    echo $row['req_date'];
    echo $row['req_time']; 
    
    
     echo $row['ret_date'];
    
    echo $row['ret_time']; 
    
    echo $row['destination']; 
    
    echo $row['pickup_point']; 
    
     echo $row['email']; 
    
    echo $row['mobile'];
    
    
    $email_message = " This is an email from TNAZ Vehicle Management to confirm your proposal is approved. Booking Details are given below:\n\n";
    $mail->Body = 
    
    '<p><strong><center></center></strong>'.$email_message.'</p> 
    
    <p><strong>Booking Id: </strong>'.$row['booking_id'].'</p> 
                    
                   
    <p><strong>Customer Name:'.$row['name'].'</p> 
    
    
    <p><strong>Confirm Date: </strong>'.$row['req_date'].'</p> 
    
    
    <p><strong>Confirm Time: </strong>'.$row['req_time'].'</p> 
    
    
    <p><strong>Return Date: </strong>'.$row['ret_date'].'</p> 
    
    
    <p><strong>Return Time: </strong>'.$row['ret_time'].'</p> 
    
    
    <p><strong>Destination: </strong>'.$row['destination'].'</p> 
    
    
    <p><strong>PickUp Point: </strong>'.$row['pickup_point'].'</p> 
    
    
    <p><strong>Email: </strong>'.$row['email'].'</p> 
    
    
    <p><strong>Mobile: </strong>'.$row['mobile'].'</p>' ;
    
    
    
    
    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';
    
    //Attach an image file
    
    
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: '. $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
  
    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
   
 
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

$veh_reg = ($_POST['veh_reg']);
$update_query="UPDATE `booking` SET `confirmation`='1',`veh_reg`='$veh_reg',`driverid`='$driver_id' WHERE booking_id='$id'; UPDATE `vehicle` SET `veh_available`='1' WHERE veh_reg='$veh_reg';UPDATE `driver` SET `dr_available`='1' WHERE driverid='$driver_id'"; 

/*$sql =  "INSERT INTO `confirm`(`req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `Lecture_Mobile`) VALUES ('$fire','$reqtime','$retdate','$rettime','$destination1','$pickuppoint','$Lecture_Mobile')"; 
//$result = mysqli_query($connection,$sql);


if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }*/
//$update_query="UPDATE `booking` SET `confirmation`='1' WHERE booking_id='$id'";
//echo $update_query;
    

    
//$res3=mysqli_query($connection,$update_query);
$res3=mysqli_multi_query($connection,$update_query);  //to run multiple query
 
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>success</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <?php include 'navbar_admin.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <br><br><br><br><br>
                <div class="alert alert-success animated tada">
                      <strong>Success!</strong> Mail has been sent successfully.
                </div>
                
                <a class="btn btn-default" href="bookinglist.php">Go Back</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
     
 </body>
 </html>
 

 
 <?php
 
}
 
?>
