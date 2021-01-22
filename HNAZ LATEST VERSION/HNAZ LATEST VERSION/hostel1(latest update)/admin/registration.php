<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for registration
if(isset($_POST['submit']))
{

$StdID = null;
$MiddleName = null;
$Email = null;
$Gender = null;
$FirstName = null;
$LastName = null;
$Contact = null;


if(isset($_POST['Hostel'])){
$Hostel=$_POST['Hostel'];
}
if(isset($_POST['RoomNo'])){
$RoomNo=$_POST['RoomNo'];
}
if(isset($_POST['Fees'])){
$Fees=$_POST['Fees'];
}
if(isset($_POST['StudentID'])){
$StdID=$_POST['StudentID'];
}
if(isset($_POST['FirstName'])){
$FirstName=$_POST['FirstName'];
}
if(isset($_POST['MiddleName'])){
$MiddleName=$_POST['MiddleName'];
}
if(isset($_POST['LastName'])){
$LastName=$_POST['LastName'];
}
if(isset($_POST['Gender'])){
$Gender=$_POST['Gender'];
}
if(isset($_POST['Contact'])){
$Contact =$_POST['Contact'];
}
if(isset($_POST['Email'])){
$Email=$_POST['Email'];
}

$query="INSERT INTO register (Hostel,RoomNo,Fees,StudentID,FirstName,MiddleName,LastName,Gender,Contact,Email) VALUES ('$Hostel' , '$RoomNo' , '$Fees', '$StdID' , '$FirstName' , '$MiddleName' , '$LastName' , '$Gender' , '$Contact' , '$Email')";
$stmt = $mysqli->prepare($query);

$rc=$stmt->bind_param('ssisssssis',$Hostel,$RoomNo,$Fees,$StdID,$FirstName,$MiddleName,$LastName,$Gender,$Contact,$Email);

$stmt->execute();

echo"<script>alert('Student Succssfully register');</script>";
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Student Hostel Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>
function getSeater(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data:'roomid='+val,
success: function(data){
// alert(data);
$("#seater").empty()
let arr = data.split(",")
// $("seater").append($('<option>Select Room</option>'))
$.each(arr, function(val, text) {
    $("#seater").append(
        $('<option></option>').val(val).html(text)
    );
});
}
});

$.ajax({
type: "POST",
url: "get_seater.php",
data:'rid='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
}
</script>

</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
											
										
<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Room Related info </h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Hostel </label>
<div class="col-sm-8">
<select name="Hostel" id="room"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required> 
<option value="">Select Hostel</option>

<?php /* $query ="SELECT DISTINCT ID_Hostel, FROM room";
*/$query ="SELECT Name,ID FROM hostels";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->ID;?>"> <?php echo $row->Name;?></option>
<?php } ?>
</select> 
<span id="room-availability-status" style="font-size:12px;"></span>

</div>
</div>
											
<div class="form-group">
<label class="col-sm-2 control-label">Room: </label>
<div class="col-sm-8">
<select name="RoomNo" id="seater" class="form-control"  onBlur="checkAvailability()" required>
<option value="">Select Room</option>
</select>
<span id="room-availability-status" style="font-size:12px;"></span>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Fees: </label>
<div class="col-sm-8">
<input type="text" name="Fees" id="fpm"  class="form-control" readonly >
</div>
</div>

<!--
<div class="form-group">
<label class="col-sm-2 control-label">Food Status</label>
<div class="col-sm-8">
<input type="radio" value="0" name="foodstatus" checked="checked"> Without Food
<input type="radio" value="1" name="foodstatus"> With Food(Rs 2000.00 Per Month Extra)
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">Stay From</label>
<div class="col-sm-8">
<input type="date" name="stayf" id="stayf"  class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Duration</label>
<div class="col-sm-8">
<select name="duration" id="duration" class="form-control">
<option value="">Select Duration in Month</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Total Amount</label>
<div class="col-sm-8">
<input type="text" name="ta" id="ta"  class="result form-control" >
</div>
</div>
-->
<div class="form-group">
<label class="col-sm-2 control-label"><h4 style="color: green" align="left">Personal info </h4> </label>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Student No : </label>
<div class="col-sm-8">
<input type="text" name="StudentID" id="regno"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="FirstName" id="fname"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Middle Name : </label>
<div class="col-sm-8">
<input type="text" name="MiddleName" id="mname"  class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="LastName" id="lname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<select name="Gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="Contact" id="contact"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email : </label>
<div class="col-sm-8">
<input type="email" name="Email" id="email"  class="form-control" required="required">
</div>
</div>



<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#pstate').val( $('#state').val() );
                $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
</script>
	<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'ID_Hostel='+$("#room").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

</html>