<?php
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
    $msg="";
    
    if(isset($_POST['signup'])){
        $firstname= mysqli_real_escape_string($connection,strtolower($_POST['firstname']));
        $lastname= mysqli_real_escape_string($connection,strtolower($_POST['lastname']));
        $email= mysqli_real_escape_string($connection,strtolower($_POST['email1']));
        $username= mysqli_real_escape_string($connection,strtolower($_POST['username']));
        $password= mysqli_real_escape_string($connection,strtolower($_POST['password'])); 
        
        
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