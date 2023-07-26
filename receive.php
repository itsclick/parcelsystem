<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/pacel.css" rel="stylesheet" type="text/css" />
</head>

<body>


<?php
if(isset($_REQUEST['addreceivebtn'])){
	require_once('connect/conn.php');
	$pin= $_POST['pin'];
	$rname = $_POST['rname'];
	$phone = $_POST['phone'];
	$rid = $_POST['rid'];
	$ridno = $_POST['ridno'];
	$outlet = $_POST['outlet'];
	$status = $_POST['status'];
	
	
	$check = "SELECT pin FROM receive WHERE  pin = '$pin'";
	$result_pag_data = mysqli_query($login, $check);

 if(!$check){
	echo "error" . mysql_error();
}

if(mysqli_num_rows($result_pag_data) > 0){
	
	echo("<div align='center' class='errormsg'>Sorry Parcel ID $pin, Already Received</div>");
	
}else{
	
	
	$sql = "INSERT INTO receive(pin,rname,phone,rid,ridno,outlet,status) VALUES('$pin','$rname','$phone','$rid','$ridno','$outlet','$status')";
	
	if ($login->query($sql) === TRUE) {
	 
	 echo(" <div class='alert alert-success alert-success' align='center'>
                                <button type='button' class='close' data-sucess='alert' aria-hidden='true'>&times;</button>
                           $pin Record created successfully <a href='#' class='alert-link'></a>.
                            </div>");
} else {
    echo "Error: " . $sql . "<br>" . $login->error;
}
	 
}
}
	
	

?>


<form id="form1" name="form1" method="post" action="">
  <table width="600" border="0" align="center">
    <tr>
      <td><fieldset>
        <legend class="footer"><strong>Add New Parcel</strong>        </legend>
        <p>&nbsp;</p>
        <table width="514" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="">
          <tr>
            <td width="148" class="txt2">Sender Pin</td>
            <td width="331"><label for="textfield37"></label>
              <span class="infospace">
              <?php
					  include('connect/conn.php');
       $sub = "select pin from sender ORDER BY id ASC";
	   $result_pag_data = mysqli_query($login, $sub);

	  if(!$sub){
		echo mysqli_error();  
	  }
		
	 while($subj = mysqli_fetch_array($result_pag_data)){
		 
		 $pin = $subj['pin'];
	 }
		 
		 
	echo "<input name='pin' type='text' class='inputtxt' id='textfield' value='$pin' readonly='readonly'/>";
	
	 
	  
	  ?>
              </span></td>
          </tr>
          <tr>
            <td class="txt2">Receiver  Full Name</td>
            <td><label for="textfield38"></label>
              <input name="rname" type="text" class="inputtxt" id="textfield38" /></td>
          </tr>
          <tr>
            <td class="txt2">Receiver Contact Number</td>
            <td><label for="textfield39"></label>
              <input name="phone" type="text" class="inputtxt" id="textfield" /></td>
          </tr>
          <tr>
            <td class="txt2">Receiver Identification </td>
            <td><label for="textfield40"></label>
              <label for="rid"></label>
              <select name="rid" class="inputtxt" id="rid">
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
              <input name="ridno" type="text" class="inputtxt" id="textfield3" /></td>
          </tr>
          <tr>
            <td class="txt2">Point of Collection</td>
            <td><label for="textfield42"></label>
              <select name="outlet" class="inputtxt" id="outlet">
                <option>---Select Your Source---</option>
                <option value="Accra">Accra</option>
                <option value="Kumasi">Kumasi</option>
                <option value="Tarkoradi">Tarkoradi</option>
                <option value="Cape Coast">Cape Coast</option>
              </select></td>
          </tr>
          <tr>
            <td class="txt2">&nbsp;</td>
            <td ><label for="status"></label>
              <input name="status" type="text" class="inputtxt" id="status" value="<?php echo "Received";?>" readonly="readonly" / hidden="hidden"><br />
              <input name="addreceivebtn" type="submit" class="btn" id="addreceivebtn" value="Save" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td >&nbsp;</td>
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