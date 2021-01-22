
<?php
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
        $result="Thanks ".$_POST['name']."for contacting us. We'll get back to you soon!";

    }
}
