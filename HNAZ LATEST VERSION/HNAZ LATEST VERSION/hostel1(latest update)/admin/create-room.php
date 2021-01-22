<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{


$ID_Room = null;
$ID_Hostel = null;
$Fees = null;



if(isset($_POST['ID_Room'])){
$ID_Room=$_POST['ID_Room'];
}

if(isset($_POST['ID_Hostel'])){
$ID_Hostel=$_POST['ID_Hostel'];
}

if(isset($_POST['RoomType'])){
$RoomType=$_POST['RoomType'];
}

if(isset($_POST['Fees'])){
$Fees=$_POST['Fees'];
}



$sql="SELECT ID_Room FROM room where ID_Room=?";
$stmt1 = $mysqli->prepare($sql);
$stmt1->bind_param('s',$ID_Room);
$stmt1->execute();
$stmt1->store_result(); 
$row_cnt=$stmt1->num_rows;;
if($row_cnt>0)
{
echo"<script>alert('Room alreadt exist');</script>";
}
else
{
$query="INSERT INTO  room (ID_Room,ID_Hostel,RoomType,Fees) VALUES(?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sisi',$ID_Room,$ID_Hostel,$RoomType,$Fees);
$stmt->execute();
echo"<script>alert('Room has been added successfully');</script>";
}
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
	<title>Create Hostel/Room</title>
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
					
						<h2 class="page-title"></h2>
						<h2 class="page-title">Add a Hostel/Room </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add a Hostel/Room</div>
									<div class="panel-body">
									<?php if(isset($_POST['submit']))
{ ?>
<p style="color: red"><?php 

if(isset($_SESSION['msg'])){

echo htmlentities($_SESSION['msg']); }?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
<?php } ?>
										<form method="post" class="form-horizontal">
											
											<div class="form-group">

<label class="col-sm-2 control-label">Hostel: </label>
<div class="col-sm-8">
<select name="ID_Hostel" id="room"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required> 

<option value="">Select Hostel</option>

<?php $query ="SELECT DISTINCT Name,ID FROM hostels";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->ID;?>"> <?php echo $row->Name;?></option>
<?php } ?>
</select> 
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Room No: </label>
<div class="col-sm-8">
<input type="text" class="form-control" name="ID_Room" id="rmno" value="" required="required">
</div>
</div>


<!--<div class="form-group">
<label class="col-sm-2 control-label">Room No: </label>
<div class="col-sm-8">
<input type="text" class="form-control" name="RoomNo" id="rmno" value="" required="required">
</div>
</div>-->


<div class="form-group">
<label class="col-sm-2 control-label">RoomType: </label>
<div class="col-sm-8">
<select name="RoomType" id="room"class="form-control"  required> 
<option value="">Select RoomType</option>

<?php $query ="SELECT DISTINCT RoomType FROM room";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->RoomType;?>"> <?php echo $row->RoomType;?></option>
<?php } ?>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Fees: </label>
<div class="col-sm-8">
<input type="text" name="Fees" id="fpm"  class="form-control" readonly >
</div>
</div>

<br/>
<br/>

<input class="btn btn-primary" type="submit" name="submit" value="Create Room ">
												</div>
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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</script>
</body>

</html>