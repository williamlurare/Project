<!DOCTYPE HTML>
<?php
$result="";

$result="";


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];



    require 'phpmailer/PHPMailerAutoload.php';
   
    $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username   = 'theyisonlyonewilliamlurare@gmail.com';                     // SMTP username
    $mail->Password   = 'exitpath';                           // SMTP password

    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('noble8team@gmail.com');
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :' .$_POST['name'].'<br>Email: '.$_POST['email'].'
    <br> Phone Number: '.$_POST['phone'].'<br>
    Message: '.$_POST['msg'].'</h1>';

    if(!$mail->send()){
        $result="Oh no :(";
        
    }
    else{
        $result="Thanks " .$_POST['name']. " for contacting us. We'll get back to you soon!";

    }
}


?>
<html>
    <head>

        <script>
           function validate() {
   
   if( document.RegForm.name.value == "" ) {
      alert( "Please provide your name!" );
      document.RegForm.name.focus() ;
      return false;
   }
   else if(!/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(document.RegForm.name.value)) {
      alert( "Invalid Characters!" );
      document.RegForm.name.focus() ;
      return false;
   }

   if( document.RegForm.phone.value == "" ) {
      alert( "Please provide your number!" );
      document.RegForm.phone.focus() ;
      return false;
   }
      else if(/^[a-zA-Z]*$/g.test(document.RegForm.phone.value)) {
      alert( "Invalid Characters!" );
      document.RegForm.phone.focus() ;
      return false;
   }
   else if( document.RegForm.phone.value.length!== 10 ) {
      alert( "Need 10 Characters!" );
      document.RegForm.phone.focus() ;
      return false;
   }

   var email = document.RegForm.email.value;
          atpos = email.indexOf("@");
          dotpos = email.lastIndexOf(".");
          

          if( document.RegForm.email.value == "" ) {
            alert( "Please enter your email!" );
            document.RegForm.email.focus() ;
            return false;
          }
          else if (atpos < 1 || ( dotpos - atpos < 2 )) {
             alert("Please enter correct email ID")
             document.RegForm.email.focus() ;
             return false;
          }

          if( document.RegForm.msg.value == "" ) {
      alert( "Please wirte your message!" );
      document.RegForm.msg.focus() ;
      return false;
   }

          }

           

        </script>         

  <meta charset="UTF-8">
  <title>TNAZ - Contact us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="styleCU.css">
<link rel="icon" href="img/ow.png" type="image/gif" sizes="16x16">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="contact-address-area">
    <div class="container">
        <div class="sec-title-style1 text-center max-width">
            <div class="title">Contact Us</div>
            <div class="text"><div class="decor-left"><span></span></div><p>Quick Contact</p><div class="decor-right"><span></span></div></div>
            <div class="bottom-text">
                <p>This is the Contact page where you can contact us!</p>
            </div>
        </div>
                <div class="contact-address-box row">
                    <!--Start Single Contact Address Box-->
                    <div class="col-sm-4 single-contact-address-box text-center">
                        <div class="icon-holder">
                            <span class="icon-clock-1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span>
                            </span>
                        </div>
                        <h3>TNAZ</h3><br><br>
                        <a href="../Website/index.html"><img src="https://img.icons8.com/color/50/000000/overwatch--v1.png"/></a>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-sm-4 single-contact-address-box main-branch">
                        <h3>Contact Info</h3>
                        <div class="inner">
                            <ul>
                                <li>
                                    <div class="title">
                                        <h4>Address:</h4>
                                    </div>
                                    <div class="text">
                                        <p>Magadi Rd<br>Nairobi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <h4>Ph & Fax:</h4>
                                    </div>
                                    <div class="text">
                                        <p>+254 20 252 7170-5 <br> +254 703 970 520/5<br> info@anu.ac.ke</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <h4>Office Hrs:</h4>
                                    </div>
                                    <div class="text">
                                        <p>Mon-Fri: 8:00am - 5:00pm<br> Sat-Sun: Closed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-sm-4 single-contact-address-box text-center">
                        <div class="icon-holder">
                            <span class="icon-question-2">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </span>
                        </div>
                        <h3>Talk To Us</h3>
                        <h2>What's on your mind :)</h2>
                        </div>
                    <!--End Single Contact Address Box-->
        </div>
    </div>
</section>  
<!--End Contact Address Area-->  
 
<!--Start contact form area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="sec-title-style1 float-left">
                                <div class="title">Send Your Message</div>
                                <div class="text"><div class="decor-left"><span></span></div><p>Contact Form</p></div>
                            </div>
                            <div class="text-box float-right">
                            <?php echo $result; ?>
                            </div>
                        </div> 
                    </div>   
                    <div class="inner-box">
                        <form id="contact-form" name="RegForm" onsubmit = "return validate();" class="default-form" action="" method="post">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">   
                                                <input type="text" name="name" value="" placeholder="Name" >
                                            </div> 
                                             <div class="input-box"> 
                                                <input type="text" name="phone" value="" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box"> 
                                                <input type="text" name="email" value="" placeholder="Email Address">
                                            </div>
                                            <div class="input-box"> 
                                                <input type="text" name="subject" value="" placeholder="Subject">
                                            </div> 
                                        </div>  
                                    </div> 
                                    <div class="row">
                                         
                                    </div>   
                                </div>
                                <div class="col-xl-6 col-lg-12">
                                    <div class="input-box">    
                                        <textarea name="msg" placeholder="Your Message..."></textarea>
                                    </div>
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button name="submit" type="submit" data-loading-text="Please wait...">Send Message<span class="flaticon-next"></span></button>    
                                    </div>         
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- partial -->
  
</body>
</html>
