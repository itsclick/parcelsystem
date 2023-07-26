<?php
$hostname_login = "localhost";
$database_login = "pacel";
$username_login = "root";
$password_login = "";
$login = mysqli_connect($hostname_login, $username_login, $password_login) or trigger_error(mysqli_error(),E_USER_ERROR); 
$data = mysqli_select_db($login, $database_login);
if(!$data){
die("No database Selected");
}
?>