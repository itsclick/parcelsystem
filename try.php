<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.tryit {
	font-family: "Courier New", Courier, monospace;
	font-size: 12px;
	text-transform: lowercase;
	color: #FFF;
	text-decoration: blink;
	background-color: #060;
}
</style>
</head>

<body>
<p>
  <?php
//To Pull 7 Unique Random Values Out Of AlphaNumeric

$characters = array("0","1","2","3","4","5","6","7","8","9");

//make an "empty container" or array for our keys
$keys = array();

//first count of $keys is empty so "1", remaining count is 1-6 = total 7 times
while(count($keys) < 10) {
    //"0" because we use this to FIND ARRAY KEYS which has a 0 value
    //"-1" because were only concerned of number of keys which is 32 not 33
    //count($characters) = 33
    $x = mt_rand(0, count($characters)-1);
    if(!in_array($x, $keys)) {
       $keys[] = $x;
    }
}

foreach($keys as $key){
   @$random_chars .= $characters[$key];
}

echo"VIP-$random_chars";

?>
</p>
<div class="tryit">Helo world</div>
<p>&nbsp;</p>
</body>
</html>