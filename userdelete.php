<?php 
//Include database connection details
  $id = $_REQUEST['deleteusertbtn'];
   require_once('connect/conn.php');
   $del="Delete from users where id='$id'";
   $result = mysqli_query($login, $del);
   if(!$del){
   die("query error" . mysqli_error());
   }else if($del){
   echo("<center>User ID $id Deleted Successful</center>");
   }
?>

