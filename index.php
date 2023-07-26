<?php
session_start();
?>
<?php
unset($_SESSION['USER_ADMIN_ID']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Express Parcel</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFEFEF;
}
</style>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<br />
<br />
<table width="500" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="400" border="0" align="center" class="loginscreen">
      <tr>
        <td><form id="form1" name="form1" method="post" action="login-exec.php">
          <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <td colspan="3" align="center"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '"<table width="100%" align="center" class="errormsg">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<tr><td>',$msg . '</td></tr>'; 
		}
		echo '</table>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></td>
              </tr>
            <tr>
              <td colspan="3" align="center" class="txt"><strong>User Authentication</strong></td>
              </tr>
            <tr>
              <td width="111" align="right" class="txt">Username</td>
              <td colspan="2"><label for="username"></label>
                <input name="username" type="text" class="inputtxt" id="username" /></td>
            </tr>
            <tr>
              <td align="right" class="txt">Password</td>
              <td colspan="2"><label for="password"></label>
                <input name="password" type="password" class="inputtxt" id="password" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2" align="center"><input name="button" type="submit" class="btn" id="button" value="Login" /></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="68">&nbsp;</td>
              <td width="171">&nbsp;</td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<br />
<br />
<div class="topbar" align="center"><?php include('footer.php');?></div>
</body>
</html>