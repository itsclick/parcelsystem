<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="scripts/table.css" rel="stylesheet" type="text/css" />
<link href="scripts/zion.css" rel="stylesheet" type="text/css" />
<link href="css/table.css" rel="stylesheet" type="text/css" />
<link href="css/pacel.css" rel="stylesheet" type="text/css" />

</style>

<SCRIPT type="text/javascript">


function confirmDelete()
{
var agree=confirm("Are you sure you wish to continue?");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>
 

</head>

<body>
<form id="form1" name="form1" method="post" action="cpanel.php">
  <table width="550" border="0" align="center">
    <tr>
      <td width="110" class="fonttxt">&nbsp;</td>
      <td width="202" align="center" class="txt"><strong>Parcel Report Details</strong></td>
      <td width="224">&nbsp;</td>
    </tr>
  </table>
</form>
 <?php
if(isset($_REQUEST['viewparcelbtn'])){

include("connect/conn.php");
$search = $_REQUEST['viewparcelbtn'];
$query_pag_data = "SELECT * from sender where pin ='$search' or CONCAT(pin,' ',sname) like '%$search%' or sid like '%$search%' or phone like '$search' or source like '$search' or destination like '$search'";
$result = mysqli_query($login, $query_pag_data);

if(mysqli_num_rows($result) >=0){
$msg = "";
$query = mysqli_num_rows($result);
echo("<table id='newspaper-c'><tr align='center' ><td><b/>PIN</td><td><b/>SENDER NAME</td><td><b/>SENDER ID</td><td><b/>TELEPHONE NUMBER</td><td><b/>SOURCE</td><td><b/>DESTINATION</td><td><b/>VIEW DETAILS</td><td><b/>EDIT</td><td><b/>DELETE</td></tr>");
while($row=mysqli_fetch_array($result)) {	
$pin = $row['pin'];		
$sname = $row['sname'];
$sid = $row['sid'];		
$phone = $row['phone'];
$source = $row['source'];
$destination = $row['destination'];

echo("<tr class='txt' align='center'><td>" . $pin . "</td> <td>" . $sname . "</td><td>" . $sid . "</td><td>" . $phone . "</td><td>" . $source . "</td><td>" . $destination. "</td><td><a href='cpanel.php?viewparcel=$pin'><img src='images/viewde.png'></a></td><td><a href='cpanel.php?editpacelbtn=$pin'><img src='images/editbtn.png'></a></td><td><a href='cpanel.php?deletememberbtn=$pin' onclick='return confirmDelete()'><img src='images/deletebtn.png'></a></td>");

}
						
echo("</table>");

}else if (mysqli_num_rows($result) == 0){
echo("<center>No Record in the Database</center>");
}
}
?>
</body>
</html>