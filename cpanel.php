<?php
session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if($_SESSION['USER_ADMIN_ID'] == '') {
		header("location: index.php");
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Express Parcel</title>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body>
<table width="100%" border="0" align="center">
  <tr>
    <td width="13%" align="right"><strong class="txt">Welcome: </strong></td>
    <td width="55%"><?php echo $_SESSION['USER_ADMIN_ID'];?></td>
    <td width="32%" class="txt"><a href="index.php"><strong>LogOut</strong></a></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" align="right">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><div class="menubtn">
          <table width="100%" border="0">
            <tr>
              <td>&nbsp;</td>
              <td valign="top" class="menutxt"><a href="cpanel.php?addpacelbtn"><strong>Add new Parcel</strong></a></td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td align="right"><div class="menubtn">
          <table width="100%" border="0">
            <tr>
              <td>&nbsp;</td>
              <td valign="top" class="menutxt"><a href="cpanel.php?viewparcelbtn"><strong>View  Parcel</strong></a></td>
              </tr>
            </table>
          </div></td>
      </tr>
      <tr>
        <td align="right"><div class="menubtn">
          <table width="100%" border="0">
            <tr>
              <td>&nbsp;</td>
              <td valign="top" class="menutxt"><strong><a href="cpanel.php?receivebtn">Receive Parcel</a></strong></td>
              </tr>
            </table>
          </div></td>
      </tr>
      <tr>
        <td align="right"><div class="menubtn">
          <table width="100%" border="0">
            <tr>
              <td>&nbsp;</td>
              <td valign="top" class="menutxt"><strong><a href="cpanel.php?report">System Reports</a></strong></td>
              </tr>
            </table>
          </div></td>
      </tr>
      <tr>
        <td align="right"><div class="menubtn">
          <table width="100%" border="0">
            <tr>
              <td valign="middle">&nbsp;</td>
              <td valign="top" class="menutxt"><strong><a href="cpanel.php?user">Add User</a></strong></td>
              </tr>
            </table>
          </div></td>
      </tr>
      <tr>
        <td align="right"><div class="menubtn">
          <table width="100%" border="0">
            <tr>
              <td>&nbsp;</td>
              <td valign="top" class="menutxt"><strong><a href="cpanel.php?viewuser">Users Details</a></strong></td>
              </tr>
            </table>
          </div></td>
      </tr>
    </table></td>
    <td colspan="2"><div class="cpanel"><span class="dashboard">
      <?php $name = $_SESSION['USER_ADMIN_ID'];
	
           //Include database connection details
           require_once('connect/conn.php');
		   
		 
		  // including the add admin information page to the database
		   if(isset($_REQUEST['addpacelbtn'])){
				include('addparcel.php');
		   }
		   else if(isset($_REQUEST['addparcelbtn'])){
			   include('addparcel.php');
		  }
		  
		  else if(isset($_REQUEST['addbtn'])){
			  }else if(isset($_REQUEST['viewparcelbtn'])){
			  include('viewparcel.php');
			  }
			  else if(isset($_REQUEST['deletememberbtn'])){
			  include('deleteparcel.php');
			  }
			  else if(isset($_REQUEST['viewparcel'])){
				  include('parceldetails.php');
			  }
			  
			  else if(isset($_REQUEST['editpacelbtn'])){
				  include('editpacel.php');
			  }
			  else if(isset($_REQUEST['updatepacelbtn'])){
				  include('updatepacel.php');
			  }
			  else if(isset($_REQUEST['sbtn'])){
				   $search = $_REQUEST['search'];	
				$_SESSION['customer'] = $search;
			   include('search.php');
			  
			   }else if(isset($_REQUEST['receivebtn'])){
			   include('search.php');
			   }
			   else if(isset($_REQUEST['preceive'])){
				   include('receive.php');
			   }
				   else if(isset($_REQUEST['addreceivebtn'])){
					   include('receive.php');
			   }
			   else if(isset($_REQUEST['report'])){
				   include('report.php');
			   }
			   else if(isset($_REQUEST['user'])){
				   include('useradd.php');
			   }
			   else if(isset($_REQUEST['adduserbtn'])){
				   include('useradd.php');
			   }
			   else if(isset($_REQUEST['viewuser'])){
				   include('userview.php');
			   }
			   else if(isset($_REQUEST['usereditbnt'])){
				   include('useredit.php');
			   }
			   else if(isset($_REQUEST['deleteusertbtn'])){
				   include('userdelete.php');
			   }
		   else
		   include('welcome.php');
		   
           ?>
    </span></div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td colspan="2" align="center"><?php include('footer.php');?></td>
  </tr>
</table>
</body>
</html>