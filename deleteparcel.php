<?php 
//Include database connection details
  $pin = $_REQUEST['deletememberbtn'];
   require_once('connect/conn.php');
   $del="Delete from sender where pin='$pin'";
    $result = mysqli_query($login, $del);
   if(!$del){
   die("query error" . mysql_error());
   }else if($del){
   echo("<center>Deleting successful</center>");
   header("Location: cpanel.php?viewparcelbtn");
   }
?>