<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
$pin = $_REQUEST['editpacelbtn'];
include("connect/conn.php");
$actcode = "SELECT * from sender where pin = '$pin'";
$result = mysqli_query($login, $actcode) or die('MySql Error' . mysqli_error());
 if(!$actcode){
	echo "error" . mysqli_error();
}


while($rows = mysqli_fetch_array($result)){
    
	$pin = $rows['pin'];
	$sname= $rows['sname'];
      $phone = $rows['phone'];
?>
<form id="form1" name="form1" method="post" action="cpanel.php">
  <table width="600" border="0" align="center">
    <tr>
      <td><fieldset>
        <legend class="footer"><strong>Edit Parcel Records</strong>        </legend>
        <table width="514" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="">
          <tr>
            <td width="148" class="txt2">Sender Pin</td>
            <td width="331"><label for="textfield37"></label>
              <input name="pin" type="text" class="inputtxt" id="textfield37" value="<?php echo $rows['pin'];?>" /></td>
          </tr>
          <tr>
            <td class="txt2">Sender Full Name</td>
            <td><label for="textfield38"></label>
              <input name="sname" type="text" class="inputtxt" id="textfield38" value="<?php echo $rows['sname'];?>"/></td>
          </tr>
          <tr>
            <td class="txt2">Contact Number</td>
            <td><label for="textfield39"></label>
              <input name="phone" type="text" class="inputtxt" id="textfield" value="<?php echo $rows['phone'];?>"/></td>
          </tr>
          <tr>
            <td class="txt2">Senders Identification </td>
            <td><label for="textfield40"></label>
              <label for="sid"></label>
              <select name="sid" class="inputtxt" id="sid">
                <option value="<?php echo $rows['sid'];?>" selected><?php echo $rows['sid'];?></option>
                <option value="Voter ID">Voter ID</option>
                <option value="National ID">National ID</option>
                <option value="Drivers Lience">Drivers Lience</option>
                <option value="Student ID">Student ID</option>
              </select></td>
          </tr>
          <tr>
            <td class="txt2">Identification Number</td>
            <td><label for="textfield41"></label>
              <input name="sidno" type="text" class="inputtxt" id="textfield3"value="<?php echo $rows['sidno'];?>"/></td>
          </tr>
          <tr>
            <td class="txt2">Package Source</td>
            <td><label for="textfield42"></label>
              <select name="source" class="inputtxt" id="source">
                <option value="<?php echo $rows['source'];?>" selected><?php echo $rows['source'];?></option>
                <option value="Accra">Accra</option>
                <option value="Kumasi">Kumasi</option>
                <option value="Tarkoradi">Tarkoradi</option>
                <option value="Cape Coast">Cape Coast</option>
              </select></td>
          </tr>
          <tr>
            <td class="txt2">Package Destination</td>
            <td><label for="textfield43"></label>
              <select name="destination" class="inputtxt" id="destination">
                <option value="<?php echo $rows['destination'];?>" selected><?php echo $rows['destination'];?></option>
                <option value="Accra">Accra</option>
                <option value="Kumasi">Kumasi</option>
                <option value="Tarkoradi">Tarkoradi</option>
                <option value="Cape Coast">Cape Coast</option>
              </select></td>
          </tr>
          <tr>
            <td class="txt2">Package Content</td>
            <td><label for="content"></label>
              <label for="content2"></label>
              <textarea name="content" class="inputtxt" id="content2"><?php echo $rows['content'];?></textarea>
<label for="textfield44"></label></td> 
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td ><input name="updatepacelbtn" type="submit" class="btn" id="updatepacelbtn" value="Update" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
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