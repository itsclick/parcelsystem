<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
</head>

<body>


<?php
if(isset($_REQUEST['addparcelbtn'])){
	require_once('connect/conn.php');
	$pin= $_POST['pin'];
	$sname = $_POST['sname'];
	$phone = $_POST['phone'];
	$sid = $_POST['sid'];
	$sidno = $_POST['sidno'];
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$content = $_POST['content'];
	
	$sql = "INSERT INTO sender(pin,sname,phone,sid,sidno,source,destination,content) VALUES('$pin','$sname','$phone','$sid','$sidno','$source','$destination','$content')";
	
	 if ($login->query($sql) === TRUE) {
	 
	 echo(" <div class='alert alert-success alert-success' align='center'>
                                <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                           $sname Record created successfully <a href='#' class='alert-link'></a>.
                            </div>");
} else {
    echo "Error: " . $sql . "<br>" . $login->error;
}

$login->close();
	 
}

	
	

?>

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

//echo"VIP-$random_chars";

?>


<form id="form1" name="form1" method="post" action="">
  <table width="600" border="0" align="center">
    <tr>
      <td><fieldset>
        <legend class="footer"><strong>Add New Parcel</strong>        </legend>
        <table width="514" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="">
          <tr>
            <td width="148" class="txt2">Sender Pin</td>
            <td width="331"><label for="textfield37"></label>
              <input name="pin" type="text" class="inputtxt" id="textfield37" value="<?php echo"VIP-$random_chars"?>" /></td>
          </tr>
          <tr>
            <td class="txt2">Sender Full Name</td>
            <td><label for="textfield38"></label>
              <input name="sname" type="text" class="inputtxt" id="textfield38" /></td>
          </tr>
          <tr>
            <td class="txt2">Contact Number</td>
            <td><label for="textfield39"></label>
              <input name="phone" type="text" class="inputtxt" id="textfield" /></td>
          </tr>
          <tr>
            <td class="txt2">Senders Identification </td>
            <td><label for="textfield40"></label>
              <label for="sid"></label>
              <select name="sid" class="inputtxt" id="sid">
                <option>---Select Your Identification---</option>
                <option value="Voter ID">Voter ID</option>
                <option value="National ID">National ID</option>
                <option value="Drivers Lience">Drivers Lience</option>
                <option value="Student ID">Student ID</option>
              </select></td>
          </tr>
          <tr>
            <td class="txt2">Identification Number</td>
            <td><label for="textfield41"></label>
              <input name="sidno" type="text" class="inputtxt" id="textfield3" /></td>
          </tr>
          <tr>
            <td class="txt2">Package Source</td>
            <td><label for="textfield42"></label>
              <select name="source" class="inputtxt" id="source">
                <option>---Select Your Source---</option>
                <option value="Accra">Accra</option>
                <option value="Kumasi">Kumasi</option>
                <option value="Tarkoradi">Tarkoradi</option>
                <option value="Cape Coast">Cape Coast</option>
              </select></td>
          </tr>
          <tr>
            <td class="txt2">Package Destination</td>
            <td><label for="textfield43"></label>
              <select name="destination" class="inputtxt" id="destination">
                <option>---Select Your Source---</option>
                <option value="Accra">Accra</option>
                <option value="Kumasi">Kumasi</option>
                <option value="Tarkoradi">Tarkoradi</option>
                <option value="Cape Coast">Cape Coast</option>
              </select></td>
          </tr>
          <tr>
            <td class="txt2">Package Content</td>
            <td><label for="content"></label>
              <textarea name="content" cols="40" rows="5" class="inputtxt" id="content"></textarea>
              <label for="textfield44"></label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td ><input name="addparcelbtn" type="submit" class="btn" id="addparcelbtn" value="Submit" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      </table>
      </fieldset></td>
    </tr>
  </table>
</form>
</body>
</html>