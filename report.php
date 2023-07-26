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
if(isset($_REQUEST['report'])){

include("connect/conn.php");


$query_pag_data = "SELECT * from report";
$result_pag_data = mysqli_query($login, $query_pag_data);

if(mysqli_num_rows($result_pag_data) >=0){
$msg = "";
$query = mysqli_num_rows($result_pag_data);
echo("<table id='newspaper-c'><tr align='center'><td><b/>Pin</td><td><b/>Sender Namae</td><td><b/>Sender ID</td><td><b/>Source </td><td><b/>Destination</td><td><b/>Reciver Telephone</td>   <td><b/>Reciever Name</td><td><b/>Reciever ID</td><td><b/>Reciever ID Number</td><td><b/>Outlet</td></tr>");
while($row=mysqli_fetch_array($result_pag_data)) {	
$pin = $row['pin'];		
$sname = $row['sname'];
$sid = $row['sid'];		
$phone = $row['phone'];
$source = $row['source'];
$destination = $row['destination'];


$rname = $row['rname'];
	$phone = $row['phone'];
	$rid = $row['rid'];
	$ridno = $row['ridno'];
	$outlet = $row['outlet'];
	$phone = $row['phone'];

echo("<tr class='txt' align='center'><td>" . $pin . "</td> <td>" . $sname . "</td><td>" . $sid . "</td><td>" . $source . "</td><td>" . $destination . "</td><td>" . $phone. "</td>  <td>" . $rname . "</td><td>" . $rid . "</td><td>" . $ridno . "</td><td>" . $outlet . "</td><td><a href='print.php'?printpin>Print</a></td></tr>");

}
						
echo("</table>");

}else if (mysqli_num_rows($result_pag_data) == 0){
echo("<center>No Record in the Database</center>");
}
}
?>
</body>
</html>