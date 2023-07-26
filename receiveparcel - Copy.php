<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
</head>

<body>

<form id="form1" name="form1" method="post" action="cpanel.php">
  <table width="600" border="0" align="center">
    <tr>
      <td><fieldset>
        <legend class="footer"><strong>Receive  Parcel</strong>        </legend>
        <table width="514" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="">
          <tr>
            <td width="148" class="txt2">Enter Pin</td>
            <td width="331"><label for="textfield37"></label>
              <input name="pin" type="text" class="inputtxt" id="textfield37" value="" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td ><input name="checkpinbtn" type="submit" class="btn" id="checkpinbtn" value="Submit" /></td>
          </tr>
      </table>
      </fieldset></td>
    </tr>
  </table>
</form>
<?php
if(isset($_REQUEST['checkpinbtn'])){

include("connect/conn.php");
$search = $_POST['search'];
$query_pag_data = "SELECT * from sender where pin ='$search' or sname ='$search' like '%$search%' or phone like '%$search%' or source like '$search' or destination like '$search'";
$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());

if(mysql_num_rows($result_pag_data) >0){
$msg = "";
$query = mysql_num_rows($result_pag_data);
echo("<table id='newspaper-c'><tr align='center' ><td><b/>PIN</td><td><b/>SENDER NAME</td><td><b/>PHONE NUMBER</td><td><b/>sOURCE</td><td><b/>DESTINATION</td><td><b/>Place of Residence</td><td><b/>View Details</td><td><b/>Edit</td><td><b/>Delete</td></tr>");
while($row=mysql_fetch_array($result_pag_data)) {	
$pin = $row['pin'];		
$sname = $row['sname'];
$phone = $row['phone'];		
$source = $row['source'];
$destination = $row['destination'];


echo("<tr class='txt' align='center'><td>" . $pin . "</td> <td>" . $sname . "</td><td>" . $phone . "</td><td>" . $source . "</td><td>" . $destination . "</td><td><a href='cpanel.php?membersdetailsbtn=$pin'><img src='images/viewde.png'></a></td><td><a href='cpanel.php?editmemberdetailsbtn=$pin'><img src='images/editbtn.png'></a></td><td><a href='cpanel.php?deletememberbtn=$pin' onclick='return confirmDelete()'><img src='images/deletebtn.png'></a></td>");

}
						
echo("</table>");

}else if (mysql_num_rows($result_pag_data) == 0){
echo("<center>No Record in the System</center>");
}
}
?>
</body>
</html>