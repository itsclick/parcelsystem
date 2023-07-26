
<?php
if(isset($_REQUEST['userupdatebtn'])){
	require_once('connect/conn.php');

     //$num = $_POST['num'];

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$dadd = $_POST['dadd'];

	
	$enter = mysql_query("update users SET fname='$fname',lname='$lname',username='$username',password='$password',dadd='$dadd' where id='$id'");

if(!$enter){
	 echo ("query error" . mysql_error());
}else{
	  echo("<center>$username Account Updated successful </center>");
	  
}

	  }
	  
	 
	 



?>