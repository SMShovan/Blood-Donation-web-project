
<?php

	$email=$_POST['email'];
	$password=$_POST['password'];
	$bgroup=null;
    
$day1 = strtotime($_POST["date"]);
$day1 = date('Y-m-d', $day1);

	mysql_connect("localhost","root","");
	mysql_select_db("webdev");




	
	$valid = mysql_query("UPDATE webreg2 SET last_donation= '$day1' WHERE Email='$email' AND Password='$password'");

	if($valid)
	{
		echo "<script type='text/javascript'>alert('Successfully Updated');document.location='login.php'</script>";
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Recheck the inputs');document.location='reg.php'</script>";
	}
	mysql_close();

	
?>

