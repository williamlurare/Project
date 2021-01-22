<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $connection= mysqli_connect('localhost','root','','vehicle management');


    $username= $_SESSION['username'];
    //echo $username;
   

    $sql= "SELECT * FROM `booking`"; 
    $res= mysqli_query($connection,$sql);
    $row2= mysqli_fetch_assoc($res);

 //   echo $row2['ret_date'];
     $fire = $row2['req_date'];
    $retdate[] = $row2['ret_date'];

    $query= "SELECT  `first_name`, `last_name`, `email` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>


<script>
   function validate() {
   
      if( document.RegForm.name.value == "" ) {
         alert( "Please provide your Full name!" );
         document.RegForm.name.focus() ;
         return false;
      }

          else if(!/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(document.RegForm.name.value)) {
         alert( "Invalid Characters!" );
         document.RegForm.name.focus() ;
         return false;
      }


      if( document.RegForm.department.value == "" ) {
         alert( "Please provide your department!" );
         document.RegForm.department.focus() ;
         return false;
      }


      if( document.RegForm.type.value == "" ) {
         alert( "Please provide Mode Of Transport!" );
         document.RegForm.type.focus() ;
         return false;
      }
          else if (document.RegForm.type.value < 5 || document.RegForm.type.value > 30 ){
             alert("Capacity too low or too high")
             document.RegForm.type.focus() ;
             return false;
          }
        /*  else if (document.RegForm.type.value  > 30 ) {
             alert("Capacity too high")
             document.RegForm.type.focus() ;
             return false;
          }*/



/*
      var type = document.RegForm.type.value;
        
          

          if( document.RegForm.type.value == "" ) {
            alert( "Please enter your type!" );
            document.RegForm.type.focus() ;
            return false;
          }


 
      var radios = document.getElementsByName("type");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid) alert("Must check some option!");
    return formValid;


     if( document.RegForm.type.value == "" ) {
         alert( "Please provide your mode of transport!" );
         document.RegForm.type.focus() ;
         return false;
      }
*/
          if( document.RegForm.req_date.value == "" ) {
         alert( "Please provide the date !" );
         document.RegForm.req_date.focus() ;
         return false;
      }

      if( document.RegForm.return_date.value == "" ) {
         alert( "Please provide the return date!" );
         document.RegForm.return_date.focus() ;
         return false;
      }

      if( document.RegForm.destination.value == "" ) {
         alert( "Please confirm your destination!" );
         document.RegForm.destination.focus() ;
         return false;
      }

      
      
      if( document.RegForm.reason.value == "" ) {
         alert( "Please provide your reason of booking a bus!" );
         document.RegForm.reason.focus() ;
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

          if( document.RegForm.mobile.value == "" ) {
         alert( "Please provide your mobile number!" );
         document.RegForm.mobile.focus() ;
         return false;
      }
      else if( document.RegForm.mobile.value.length!==10 ) {
         alert( "Mobile Numbers should be exactly 10 Characters!" );
         document.RegForm.mobile.focus() ;
         return false;
      }


   }
  



</script>





    <meta charset="UTF-8">
    <title>Booking</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
     <link rel="icon" href="img/ow.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesR.css">
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}    
</style>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Booking</h1>
                 <?php //echo $msg; ?>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <form class="animated bounce" action = "bookingaction.php" name = "RegForm" onsubmit = "return validate();"  method="post">

                   
                    <div class="input-group">
                      <span class="input-group-addon"><b>Name</b></span>
                      <input id="name" type="text" class="form-control" name="name" value="<?php echo $row['first_name']." ". $row['last_name']; ?>" >
                    </div>
                    
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Department</b></span>
                      <input id="department" type="text" class="form-control" name="department" placeholder="department" >
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Capacity</b></span>
                      <input id="type" type="text" class="form-control" name="type" placeholder="Number of People Boarding the bus" >
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Requirement</b></span>
                      <input id="req_date" type="text" class="form-control" name="req_date" placeholder="Day the car is needed" >
                      <input type="text" name="req_time" id="req_time" class="form-control"/>
                      
                    </div>
                    <style>

.highlight  {
      background-color: red !important;
      color: white !important;
  }


                    </style>
                    <script>
                      $( function() {

                          var array = '<?php echo json_encode($fire);?>;'

$('#req_date').datepicker({
  minDate:'0',
  beforeShowDay: function(date) {
    var string = jQuery.datepicker.formatDate('mm/dd/yy', date);
    return [array.indexOf(string) == -1 ]
  }
});
                   //     $( "#req_date" ).datepicker();
                        $("#req_time").wickedpicker();
                      
                        
                      } ); 
                        
                        
                        
                    </script> 
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Return</b></span>
                      <input id="return_date" type="text" class="form-control" name="return_date" placeholder="Day the car is returned" >
                      <input type="text" name="return_time" id="return_time" class="form-control"/>
                    </div>
                    
                    <script>
                      $( function() {
    
                    //    $( "#return_date" ).datepicker({ minDate: 0});
        var array = '<?php echo json_encode($retdate);?>;'

$('#return_date').datepicker({
  minDate:'0',
  beforeShowDay: function(date) {
    var string = jQuery.datepicker.formatDate('mm/dd/yy', date);
    return [array.indexOf(string) == -1]
  }
});
                 // $( "#return_date" ).datepicker({ minDate: 0});
                   //$( "#return_date" ).datepicker();
                        $( "#return_time" ).wickedpicker();

                        
                      } );
                    </script>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Destination</b></span>
                      <input id="destination" type="text" class="form-control" name="destination" placeholder="Car Destination" >
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Pickup Point</b></span>
                      <input id="pickup" type="text" class="form-control" name="pickup" placeholder="ANU" readonly>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Reason for booking</b></span>
                      <input id="reason" type="text" class="form-control" name="reason" placeholder="Reason of booking the vehicle">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" >
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Mobile</b></span>
                      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Mobile No" >
                    </div>
                    <br>
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                     
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>