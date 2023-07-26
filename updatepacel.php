
<?php
if(isset($_REQUEST['updatepacelbtn'])){
	require_once('connect/conn.php');

     //$num = $_POST['num'];


$pin= $_POST['pin'];
	$sname = $_POST['sname'];
	$phone = $_POST['phone'];
	$sid = $_POST['sid'];
	$sidno = $_POST['sidno'];
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$content = $_POST['content'];

	
	$enter = "update sender SET pin='$pin',sname='$sname',phone='$phone',sid='$sid',sidno='$sidno',source='$source',destination='$destination',content='$content' where pin='$pin'";

if ($login->query($enter) === TRUE) {
	 
	 echo("<center> $pin Update successful </center>");
} else {
    echo "Error: " . $enter . "<br>" . $login->error;
}


	  }
	  
	 
	 



?>