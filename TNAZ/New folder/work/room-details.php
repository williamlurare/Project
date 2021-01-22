<?php
session_start();
include('includes/config.php');

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<link rel="icon" href="anulogo.png" type="image/gif" sizes="16x16">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Room Details</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>

</head>

<body>


	<div class="ts-main-content">
	
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title"></h2>
						<h2 class="page-title">Rooms Details</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Room Details</div>
							<div class="panel-body">
								<table id="zctb" class="table table-bordered " cellspacing="0" width="100%">
									
									
									<tbody>
<?php	
$aid=$_SESSION['login'];
	$ret="select * from register where Email=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('s',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

<tr>
<td colspan="4"><h4>Room Realted Info</h4></td>
<td><a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/jeff/hostel1/full-profile.php?id=<?php echo $row->Email;?>');" title="View Full Details">Print Data</a></td>
</tr>
<tr>
<td colspan="6"><b>Student no. :</b></td>
</tr>



<tr>
<td><b>Hostel :</b></td>
<td><?php echo $row->Hostel;?></td>
<td><b>Room No :</b></td>
<td><?php echo $row->RoomNo;?></td>
<td><b>Fees  :</b></td>
<td><?php echo $Fees=$row->Fees;?></td>
</tr>


<tr>
<td colspan="6"><h4>Personal Info Info</h4></td>
</tr>

<tr>
<td><b>Student No. :</b></td>
<td><?php echo $row->StudentID;?></td>
<td><b>Full Name :</b></td>
<td><?php echo $row->FirstName;?><?php echo $row->MiddleName;?><?php echo $row->LastName;?></td>
<td><b>Email :</b></td>
<td><?php echo $row->Email;?></td>
</tr>


<tr>
<td><b>Contact No. :</b></td>
<td><?php echo $row->Contact;?></td>
<td><b>Gender :</b></td>
<td><?php echo $row->Gender;?></td>
</tr>





<?php
$cnt=$cnt+1;
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

	<!-- Loading Scripts -->
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

</html>
