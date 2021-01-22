<!DOCTYPE html>


<?php 
  
    $connection=mysqli_connect("localhost","root","","vehicle management"); 
    
    $msg1="";
    if(isset($_POST['submit'])){

      session_start();

      $_SESSION['username'] = $_POST['username'];

   

        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `user` WHERE username='$username' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$username;
            header('Location:../Website/index1.php');
        } 
        else{
             $msg1= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <strong>Unsuccessful!</strong> Invalid Username or Password!.
                  </div>';
        }
    }

?>


<?php
    $connection=mysqli_connect("localhost","root","","vehicle management");

 
    $msg="";
    
    if(isset($_POST['signup'])){
        $firstname= mysqli_real_escape_string($connection,strtolower($_POST['firstname']));
        $lastname= mysqli_real_escape_string($connection,strtolower($_POST['lastname']));
        $email= mysqli_real_escape_string($connection,strtolower($_POST['email1']));
        $username= mysqli_real_escape_string($connection,strtolower($_POST['username']));
        $password= mysqli_real_escape_string($connection,strtolower($_POST['password'])); 
      //  $password = md5($password);
        
        $signup_query= "INSERT INTO `user`(`user_id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES ('','$firstname','$lastname','$email','$username','$password')"; 
        
        $check_query= "SELECT * FROM `user` WHERE username='$username' or email='$email'";
        
        $check_res=mysqli_query($connection,$check_query);
        
        if(mysqli_num_rows($check_res)>0){
             $msg= '<div class="alert alert-warning" style="margin-top:30px";>
                      <strong>Failed!</strong> Username or Email already exists.
                      </div>';
            
        }
        
        else{
            $signup_res= mysqli_query($connection,$signup_query); 
                 $msg= '<div class="alert alert-success" style="margin-top:30px";>
                      <strong>Success!</strong> Registration Succefull.
                      </div>';
            
        }
        
    }

?>


<html>
<head>

  <script type = "text/javascript">
   
       function validateUser() {
        
       if( document.myForm.username.value == "" ) {
            alert( "Please enter your username!" );
            document.myForm.username.focus() ;
            return false;
         }

       
       if( document.myForm.password.value == "" ) {
            alert( "Please enter your password!" );
            document.myForm.password.focus() ;
            return false;
         }
         return( true );
       }
    
 </script>

<script>
   function validate() {
   
      if( document.RegForm.firstname.value == "" ) {
         alert( "Please provide your First name!" );
         document.RegForm.firstname.focus() ;
         return false;
      }
         else if(!/^[a-zA-Z]*$/g.test(document.RegForm.firstname.value)) {
         alert( "Invalid Characters!" );
         document.RegForm.firstname.focus() ;
         return false;
      }

      if( document.RegForm.lastname.value == "" ) {
         alert( "Please provide your Last name!" );
         document.RegForm.lastname.focus() ;
         return false;
      }
         else if(!/^[a-zA-Z]*$/g.test(document.RegForm.lastname.value)) {
         alert( "Invalid Characters!" );
         document.RegForm.lastname.focus() ;
         return false;
      }


      var email1 = document.RegForm.email1.value;
          atpos = email1.indexOf("@");
          dotpos = email1.lastIndexOf(".");
          

          if( document.RegForm.email1.value == "" ) {
            alert( "Please enter your email!" );
            document.RegForm.email1.focus() ;
            return false;
          }
          else if (atpos < 1 || ( dotpos - atpos < 2 )) {
             alert("Please enter correct email ID")
             document.RegForm.email1.focus() ;
             return false;
          }

          if( document.RegForm.username.value == "" ) {
         alert( "Please provide your user name!" );
         document.RegForm.username.focus() ;
         return false;
      }

      if( document.RegForm.password.value == "" ) {
         alert( "Please provide your password!" );
         document.RegForm.password.focus() ;
         return false;
      }
      else if( document.RegForm.password.value.length < 8 ) {
         alert( "Please provide more than 8 Characters!" );
         document.RegForm.password.focus() ;
         return false;
      }
      if( document.RegForm.pass1.value == "" ) {
         alert( "Please confirm your password!" );
         document.RegForm.pass1.focus() ;
         return false;
      }
      else if( document.RegForm.pass1.value.length < 8 ) {
         alert( "Please provide more than 8 Characters!" );
         document.RegForm.pass1.focus() ;
         return false;
      }

      password1 = RegForm.password.value; 
      password2 = RegForm.pass1.value; 

       // If Not same return False.     
        if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 


   }
  



</script>

	<title>Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link rel="icon" href="css/img/ow.png" type="image/gif" sizes="16x16">
</head>
<body>
  <div class="cont">
  <?php echo $msg1; ?>
  <?php echo $msg; ?>
    <div class="form sign-in">
      <form  name = "myForm" onsubmit = "return validateUser();" method="post"  action="">
      <h2>Sign In</h2>
      <label>
        <span>User Name</span>
        <input type="text" name="username">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit" name="submit"  type="submit" value="submit">Sign In</button>
      </form>
      <a href ="ForgotPassword/Recovery.html"> <p class="forgot-pass">Forgot Password ?</p></a>

      <h3 class="follow-us">Follow Us</h3>
      <div class="social-media">
        <ul>
            <a href="https://web.facebook.com/william.lurare"><li><img src="css/img/facebook.png" alt=""></li></a>
            <a href="https://www.instagram.com/williamlurare/"><li><img src="css/img/instagram-sketched.png" alt=""></li></a>
            <a href="https://discord.com/channels/609104128546963466/609104129310195714"><li><img src="css/img/discord.png" alt=""></li></a> 
            <a href="../Website/index.html"><li><img src="css/img/ow.png" alt=""></li></a>
            
        </ul>
    </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
            <h2>New around here? ;)</h2>
            <p>Sign up and experiences the system first hand!</p>
        </div>
        <div class="img-text m-in">
            <h2>Already have an account?</h2>
            <p>If you already have an existing account, Sign in.</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <form action = "" name = "RegForm" onsubmit = "return validate();"  method="post">
        <label>
          <span>First Name</span>
          <input type="text" name="firstname"> 
        </label>
        <label>
          <span>Last Name</span>
          <input type="text" name="lastname">
        </label>
        <label>
          <span>Email</span>
          <input type="text" name="email1">
        </label>
        <label>
          <span>Username</span>
          <input type="text" name="username">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="pass1">
        </label>
        <button type="submit" name="signup" value="submit" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
 
  
  </form>
<script type="text/javascript" src="script.js"></script>

</body>
</html>