<!DOCTYPE html>

<?php 

$msg="";

$connection=mysqli_connect("localhost","root","","vehicle management");

    if(isset($_GET['email']) && isset($_GET['token'])){

        $email = $_GET['email'];


        if(isset($_POST['submit'])){ 
        $pass= mysqli_real_escape_string($connection,strtolower($_POST['pass']));


        $sql = "UPDATE  user SET password='$pass' where email= '".$email."'";


    if (mysqli_query($connection, $sql)) {

        header('Location:ResetSuccess.php');
  } else {
    echo"<script>alert('Error updating record:');</script> " . mysqli_error($connection);
    }
  }
    }



     
?>

<html lang="en">
    <head>


<script>

   
    function validateEmail() {

        if( document.RegForm.pass.value == "" ) {
         alert( "Please provide your password!" );
         document.RegForm.pass.focus() ;
         return false;
      }
      else if( document.RegForm.pass.value.length < 8 ) {
         alert( "Please provide more than 8 Characters!" );
         document.RegForm.pass.focus() ;
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

      password1 = RegForm.pass.value; 
      password2 = RegForm.pass1.value; 

       // If Not same return False.     
        if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 


          }
   
   </script>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reset Password Page</title>

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
                    <form action = "" name = "RegForm" onsubmit = "return validateEmail();" method="POST">
                        <div class="titles">
                            <h6>We keep everything</h6>
                            <h3>Recovery Email</h3>
                        
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" class="form-input" name="pass">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" class="form-input" name="pass1">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        

                        <button type="submit" value="submit" name="submit" class="btn btn-login">Submit</button>
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