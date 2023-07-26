<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="cpanel.php">
  <?php
$id = $_REQUEST['usereditbnt'];
include("connect/conn.php");
$query_pag_data = "SELECT * from users where id = '$id'";
$result = mysqli_query($login, $query_pag_data);


while($rows = mysqli_fetch_array($result)){
    
	$id = $rows['id'];
      $fname= $rows['fname'];
?>
  <table width="50%" border="0" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td class="txt">&nbsp;</td>
      <td><input name="id" type="hidden" id="id" tabindex="1" value="<?php echo $rows['id'];?>" height="hidden"/></td>
      <td class="txt">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="17%" class="txt">First Name</td>
      <td width="36%"><label for="fname"></label>
      <input type="text" name="fname" id="fname" value="<?php echo $rows['fname'];?>"/></td>
      <td width="18%" class="txt">Last Name</td>
      <td width="29%"><label for="lname"></label>
      <input type="text" name="lname" id="lname" value="<?php echo $rows['lname'];?>"/></td>
    </tr>
    <tr>
      <td class="txt">Username</td>
      <td><label for="edate"></label>
      <input type="text" name="username" id="username" value="<?php echo $rows['username'];?>"/></td>
      <td class="txt">Password</td>
      <td><label for="password"></label>
      <input type="text" name="password" id="password" value="<?php echo $rows['password'];?>"/></td>
    </tr>
    <tr>
      <td class="txt">Date Added</td>
      <td><label for="dadd"></label>
      <input type="text" name="dadd" id="dadd" value="<?php echo $rows['dadd'];?>"/></td>
      <td align="right">&nbsp;</td>
      <td><input type="submit" name="userupdatebtn" id="userupdatebtn" value="Update User" /></td>
    </tr>
  </table>
</form>
<?php
}
?>
</body>
</html>