

<?php 
     session_start();

     
     $connection=mysqli_connect("localhost","root","","vehicle management"); 
     
     $msg="";
    
     if(isset($_POST['signup'])){


         $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
         
         $password=mysqli_real_escape_string($connection,$_POST['password']); 
         
         $login_query="SELECT * FROM `user` WHERE username='$username' and password='$password'";
         
         $login_res=mysqli_query($connection,$login_query);
         if(mysqli_num_rows($login_res)>0){ 
             $_SESSION['username']=$username;
             header('Location:Contactus.html');
         } 
         else{

            echo 'failed';
         }
        }
 
?>
