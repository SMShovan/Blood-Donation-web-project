
<?php
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$location=$_POST['location'];
	$bgroup=null;


	mysql_connect("localhost","root","");
	mysql_select_db("webdev");


	if ( isset($_POST['bgroup']) and $username and endswith($email,'.com') and strlen($password)>7 and 
		$age>=18 and strlen($phone)==11 and $location )
	{
		$bgroup = $_POST['bgroup'];
		
	
	}

	else if ($age<18)
	{
		echo "<script type='text/javascript'>alert('You must be above 18 for registration!!!');document.location='reg.php'</script>";	
		
	}
	else if (strlen($password)<=7)
	{
		echo "<script type='text/javascript'>alert('Password is too weak,choose a larger one!!!');document.location='reg.php'</script>";	
		
	}
	else if (strlen($phone)!=11)
	{
		echo "<script type='text/javascript'>alert('Check your phone number!!!');document.location='reg.php'</script>";	
		
	}
	else if (!endswith($email,'.com'))
	{
		echo "<script type='text/javascript'>alert('Check your email!!');document.location='reg.php'</script>";	
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Input values correctly');document.location='reg.php'</script>";	
		
	}


	
	$valid = mysql_query("INSERT INTO webreg2 (UserName, Email, Password, Age, Phone, location, BloodGroup  )  VALUES ('$username','$email','$password','$age','$phone','$location','$bgroup')");

	if($valid)
	{
		echo "<script type='text/javascript'>alert('Successfully Registared');document.location='login.php'</script>";
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Recheck the inputs');document.location='reg.php'</script>";
	}
	mysql_close();

	function startsWith($haystack, $needle)
    {
     	$length = strlen($needle);
     	return (substr($haystack, 0, $length) === $needle);
	}

	function endsWith($haystack, $needle)
	{
    	$length = strlen($needle);
   		if ($length == 0) {
       		return true;
    }

    return (substr($haystack, -$length) === $needle);
}
	
?>

