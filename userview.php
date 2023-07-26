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
<link href="css/table.css" rel="stylesheet" type="text/css" />

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
<?php
 
 //Include database connection details
require_once('connect/conn.php');



$query="SELECT * from users";
$result = mysqli_query($login, $query);
if (mysqli_num_rows($result) <> 0){	
echo("<table id='newspaper-c'><tr align='center'><td><b/>ID</td><td><b/>First Name</td><td><b/>Last Name</td><td><b/>Username</td><td><b/>Password</td><td><b/>Date Added</td></tr>");
while($row=mysqli_fetch_array($result)) {
						
$id = $row['id'];	
$fname = $row['fname'];		
$lname = $row['lname'];
$username = $row['username'];		
$password = $row['password'];
$dadd = $row['dadd'];


 	 	 	 	 	 	 

echo("<tr class='txt' align='center'><td>" . $id . "</td><td>" . $fname . "</td> <td>" . $lname . "</td><td>" . $username . "</td><td> ******** </td><td>" . $dadd . "</td><td><a href='cpanel.php?usereditbnt=$id'>[ Edit ]</a></td><td><a href='cpanel.php?deleteusertbtn=$id' onclick='return confirmDelete()'>[ Delete ]</a></td>");

//echo  (" <tr><td colspan='4'>`</td></tr><tr><td width='400' bgcolor='#EEEEEE'> " . $fname . "</td><td width='50' bgcolor='#EEEEEE'> <a href='view.php?edit=$mid'>Edit </a></td></td><td width='50' bgcolor='#EEEEEE'><a href='view.php?delete=$mid' onClick='show_confirm()'>Delete</a></td></td></tr>" );
}
						
echo("</table>");

}else if (mysqli_num_rows($query) == 0){
echo("<center>No Record in the System</center>");
}
?>
</body>
</html>