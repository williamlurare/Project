<!DOCTYPE html>

<?php

$msg="";
 $connection=mysqli_connect("localhost","root","","vehicle management"); 

if(isset($_POST['submit'])){

    $email= mysqli_real_escape_string($connection,strtolower($_POST['email']));


   $sql= "SELECT user_id FROM `user` WHERE email='$email'";

    $check_res=mysqli_query($connection,$sql);
        
        if(mysqli_num_rows($check_res)>0){

            $token = "QdYQgUVyFn0UC7QsO5hZbtkNR1PskY";
            $token = str_shuffle($token);
            $token = substr($token,0, 10);

            $connection->query("UPDATE user SET token= '$token', 
            tokenExpire =DATE_ADD(NOW(), INTERVAL 5 MINUTE)
            WHERE email='$email'
             
            ");


            
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

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure='tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

$mail->Username   = 'theyisonlyonewilliamlurare@gmail.com';                     // SMTP username
$mail->Password   = 'exitpath';            

$mail->setFrom('noble8team@gmail.com', 'TNAZ');

//Set an alternative reply-to address
//$mail->addReplyTo('theyisonlyonewilliamlurare@gmail.com', 'Jeff Headerson');

//Set who the message is to be sent to
$mail->addAddress($email);

$mail->Subject = "Reset Password";
$mail->isHTML(true);
$mail->Body ="
            Hello There <br><br>

            Here is the link to reset your password:<br><br>


            <a href='http://localhost/William/TNAZ/New%20folder/Login/ForgotPassword/ResetPassword.php?email=$email&token=$token'>http://localhost/William/TNAZ/New%20folder/Login/ForgotPassword/ResetPassword.php?email=$email&token=$token</a><br><br>
                        

            Sincerely,<br>
            TNAZ

";


//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent! Please check your email';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

            $msg= '<div class="alert alert-success" style="margin-top:30px";>
            <strong>Success!</strong> Please check your email inbox
            </div>'; 

    }else{

        $msg= '<div class="alert alert-success" style="margin-top:30px";>
        <strong>Failed!</strong> We couldnt find your account with that information
        </div>';

    }
}



?>


<html lang="en">
    <head>


<script>

   
    function validateEmail() {
          var email = document.myForm.email.value;
          atpos = email.indexOf("@");
          dotpos = email.lastIndexOf(".");
          

          if( document.myForm.email.value == "" ) {
            alert( "Please enter your email!" );
            document.myForm.email.focus() ;
            return false;
          }
          else if (atpos < 1 || ( dotpos - atpos < 2 )) {
             alert("Please enter correct email ID")
             document.myForm.email.focus() ;
             return false;
          }
          }
   
   </script>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Recovery Page</title>

          <!-- Owl-Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

        <!---Font Awesome CDN-->
        <script src="https://kit.fontawesome.com/8e2b6d16c1.js" crossorigin="anonymous"></script>


        <!---Custom Style-->
        <link rel="stylesheet" href="css/Style.css">
    </head>
    <body>

        <div class="container">
           <div class="panel">
               <div class="row">
                 <div class="col liquid">
                     <h4><i class="fas fa-drafting-campass"></i>TNAZ</h4>

                    <!---Owl-Carousel-->

                    <div class="owl-carousel owl-theme">
                        <img src="assets/undraw_wireframing_nxyi.svg" alt="" class="login_img">
                        <img src="assets/undraw_maker_launch_crhe.svg" alt="" class="login_img">
                        <img src="assets/90514649-fe5b-4e5f-aac5-0adf456827c5_undraw_startup_life_2du2.svg" alt="" class="login_img">
                    </div>
                        <!--/Owl-Carousel-->
                        <div class="follow">
                            Follow Us <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            
                        </div>
                 </div>
                 <div class="col login">
                    
                    <a href ="../login.php"> <button type="submit" class="btn btn-signup">Sign In</button></a>
                    
                    <form action = "" name = "myForm" onsubmit = "return validateEmail();" method="post">
                        <div class="titles">
                            <h6>We keep everything</h6>
                            <h3>Recovery Email</h3>
                            <?php echo $msg; ?>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-input" name="email">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        

                        <button type="submit" name="submit" value="submit" class="btn btn-login">Recovery</button>
                    </form>

                    

                 </div>  
               </div>
           </div> 
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
    
        <script>
            $(document).ready(function () {
    
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    items: 1
                });
            });
        </script>
    </body>
    </html>