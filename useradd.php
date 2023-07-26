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
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="cpanel.php">
  <p>
    <?php
if(isset($_REQUEST['adduserbtn'])){
require_once('connect/conn.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$dadd = $_POST['dadd'];



 $sql = "INSERT INTO users (fname,lname,username,password,dadd) VALUES ('$fname','$lname','$username','$password','$dadd')";

 
  if ($login->query($sql) === TRUE) {
	 
	 echo(" <div class='alert alert-success alert-success' align='center'>
                                <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                           $fname Record created successfully <a href='#' class='alert-link'></a>.
                            </div>");
} else {
    echo "Error: " . $sql . "<br>" . $login->error;
}
	 
}
	  	
?>
  </p>
  <p>&nbsp;</p>
  <table width="600" border="0" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="4" align="center" class="txt"><strong>Add New User</strong></td>
    </tr>
    <tr>
      <td width="17%" class="txt">First Name</td>
      <td width="32%"><label for="fname"></label>
      <input type="text" name="fname" id="fname"  required="required"/></td>
      <td width="16%" class="txt">Last Name</td>
      <td width="35%"><label for="lname"></label>
      <input type="text" name="lname" id="lname"  required="required"/></td>
    </tr>
    <tr>
      <td class="txt">Username</td>
      <td><label for="username"></label>
      <input type="text" name="username" id="username"  required="required"/></td>
      <td class="txt">Password</td>
      <td><label for="password">
        <input type="text" name="password" id="password"  required="required"/>
      </label></td>
    </tr>
    <tr>
      <td class="txt">Date Added</td>
      <td><label for="dadd"></label>
      <input type="text" name="dadd" id="dadd"  value="<?php echo date("d/m/y");?>"/></td>
      <td align="right"><input name="Reset" type="reset" class="btn" id="button" value="Clear" /></td>
      <td><input name="adduserbtn" type="submit" class="btn" id="adduserbtn" onclick="MM_validateForm('fistaname','','R','lastname','','R','username','','R','password','','R');return document.MM_returnValue" value="Add User" /></td>
    </tr>
  </table>
</form>
</body>
</html>