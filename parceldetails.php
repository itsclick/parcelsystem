<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$pin = $_REQUEST['viewparcel'];
include("connect/conn.php");
$actcode = "SELECT * from sender where pin = '$pin'";
$result = mysqli_query($login, $actcode) or die('MySql Error' . mysqli_error());
 if(!$actcode){
	echo "error" . mysqli_error();
}


while($rows = mysqli_fetch_array($result)){
    
	$pin = $rows['pin'];
      $sname= $rows['sname'];
	  $phone= $rows['phone'];
?>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="600" border="0" align="center">
    <tr>
      <td><fieldset>
        <legend class="footer"><strong>Parcel Details</strong>        </legend>
        <table width="514" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="">
          <tr>
            <td width="148" class="txt2">Sender Pin</td>
            <td width="331"><label for="textfield37"></label>
              <?php echo $pin ?></td>
          </tr>
          <tr>
            <td class="txt2">Sender Full Name</td>
            <td><label for="textfield38"></label>
              <?php echo $sname?></td>
          </tr>
          <tr>
            <td class="txt2">Contact Number</td>
            <td><label for="textfield39"></label>
              <?php echo $phone ?></td>
          </tr>
          <tr>
            <td class="txt2">Senders Identification </td>
            <td><?php echo $rows['sid'];?></td>
          </tr>
          <tr>
            <td class="txt2">Identification Number</td>
            <td><label for="textfield41"></label>
              <?php echo $rows['sidno'];?></td>
          </tr>
          <tr>
            <td class="txt2">Package Source</td>
            <td><?php echo $rows['source'];?></td>
          </tr>
          <tr>
            <td class="txt2">Package Destination</td>
            <td><?php echo $rows['destination'];?></td>
          </tr>
          <tr>
            <td class="txt2">Package Content</td>
            <td><label for="content"></label>
              <?php echo $rows['content'];?></td>
          </tr>
      </table>
      </fieldset></td>
    </tr>
  </table>
</form>
<?php
}
?>
</body>
</html>