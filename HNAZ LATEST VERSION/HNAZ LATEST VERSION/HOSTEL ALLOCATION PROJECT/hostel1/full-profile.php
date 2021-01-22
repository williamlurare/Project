<?php
session_start();
//include("includes/config.php");
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "hostel";
$prefix = "";

$connection = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password);
if (!$connection) {
    die("Database connection failed: " . mysqli_error());
}



//$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");


//mysqli_select_db($mysql_database, $bd) or die("Could not select database");


 $db_select = mysqli_select_db($connection, "hostel");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="icon" href="anulogo.png" type="image/gif" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student  Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
<?php 
		 $ret= mysqli_query($connection, "SELECT * FROM register where Email = '".$_GET['id']."'");
			while($row=mysqli_fetch_array($ret))
			{
			?>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			
			<tr>
			  <td colspan="2"  class="font"><?php echo ucfirst($row['FirstName']);?> <?php echo ucfirst($row['LastName']);?>'S <span class="font1"> information &raquo;</span> </td>
  </tr>
			
			<tr>
			  <td colspan="2"  class="heading" style="color: red;">Room Related Info &raquo; </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Hostel : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['Hostel'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Room No : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['RoomNo'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Fees : </td>
                      <td class="comb-value1"><?php echo $fpm=$row['Fees'];?></td>
                    </tr>
                     
                    
  <tr>
   <td colspan="2" align="left"  class="heading" style="color: red;">Personal Info &raquo; </td>
  </tr>

<tr>
<td width="12%" valign="top" class="heading">Student No: </td>
<td class="comb-value1"><?php echo $row['StudentID'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">First Name: </td>
<td class="comb-value1"><?php echo $row['FirstName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Middle name: </td>
<td class="comb-value1"><?php echo $row['MiddleName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Last: </td>
<td class="comb-value1"><?php echo $row['LastName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Gender: </td>
<td class="comb-value1"><?php echo $row['Gender'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Contact No: </td>
<td class="comb-value1"><?php echo $row['Contact'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Email id: </td>
<td class="comb-value1"><?php echo $row['Email'];?></td>
</tr>

<?php } ?>


                   
                  </table></td>
                </tr>
               
					
                  </table></td>
                </tr>
              </table></td>
  </tr>
		
           
 
	 
    </table></td>
  </tr>

  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Prints this Document " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="txtbox4" value="Close this document " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
