<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="scripts/zion.css" rel="stylesheet" type="text/css" />
<link href="scripts/table.css" rel="stylesheet" type="text/css" />
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
<link href="css/table.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="cpanel.php">
  <table width="544" border="0" align="center">
    <tr>
      <td width="70" class="fonttxt"><em><strong>Enter Pin</strong></em></td>
      <td width="212"><label for="search"></label>
      <input name="search" type="text" class="inputtxt" id="search" /></td>
      <td width="248"><input name="sbtn" type="submit" class="btn" id="sbtn" value="Search" /></td>
    </tr>
  </table>
</form>
<?php
if(isset($_REQUEST['sbtn'])){

include("connect/conn.php");
$search = $_REQUEST['search'];
$query_pag_data = "SELECT * from sender where pin ='$search' or CONCAT(pin,' ',sname) like '%$search%' or sid like '%$search%' or phone like '$search' or source like '$search' or destination like '$search'";
$result_pag_data = mysqli_query($login, $query_pag_data);

if(mysqli_num_rows($result_pag_data) >=0){
$msg = "";
$query = mysqli_num_rows($result_pag_data);
echo("<table id='newspaper-c'><tr align='center' ><td><b/>PIN</td><td><b/>SENDER NAME</td><td><b/>SENDER ID</td><td><b/>TELEPHONE NUMBER</td><td><b/>SOURCE</td><td><b/>DESTINATION</td><td><b/>ACTION</td></tr>");
while($row=mysqli_fetch_array($result_pag_data)) {	
$pin = $row['pin'];		
$sname = $row['sname'];
$sid = $row['sid'];		
$phone = $row['phone'];
$source = $row['source'];
$destination = $row['destination'];

echo("<tr class='txt' align='center'><td>" . $pin . "</td> <td>" . $sname . "</td><td>" . $sid . "</td><td>" . $phone . "</td><td>" . $source . "</td><td>" . $destination. "</td><td><a href='cpanel.php?preceive=$pin'>Process Parcel</a></td></tr>");

}
						
echo("</table>");

}else if (mysqli_num_rows($result_pag_data) == 0){
echo("<center>No Record in the Database</center>");
}
}
?>
</body>
</html>