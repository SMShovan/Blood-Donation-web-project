

<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood Save Life</title>
	<link rel="stylesheet" type="text/css" href="loginDatabaseCss.css">
</head>
<body >

<div class="navBar">

	<ul class="meta">
		<li>
			<a href="index.php">Home</a>
		</li>

		<li>
			<a href="Why.php">Why?</a>
		</li>

		<li>
			<a href="login.php">Log in</a>
		</li>

		<li>
			<a href="reg.php">Registration</a>
		</li>






	</ul>
		
</div>

<div class="wrapdata">



<?php
    echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
    echo "Dashboard"."<br/>";
    echo "<br/>";
	echo "<br/>";

	$email=$_POST['email'];
	$password=$_POST['password'];
	$count = 0;


	mysql_connect("localhost","root","");
	mysql_select_db("webdev");

	$query = "SELECT UserName,Email,Age,Phone,BloodGroup,date(last_donation)as last_donation FROM webreg2 WHERE webreg2.Email= '$email' AND webreg2.Password='$password' "; 
    $result = mysql_query($query);



	while($row = mysql_fetch_array($result)){  
	echo "Name: " . $row['UserName'] ."<br/>"."Email Address: ".  $row['Email'] ."<br/>"."Age: ".   $row['Age'] ."<br/>"."Phone:0".  $row['Phone'] ."<br/>"."Blood Group: ".   $row['BloodGroup'] ."<br/>"."Last Donated: ".   $row['last_donation'];  
	 echo"<br/>";
	 echo"<br/>";
	 echo"<br/>";
	 $count = $count +1;
	}
	if( $count == 0){
	echo "<script type='text/javascript'>alert('Wrong Email or Password');document.location='login.php'</script>";


    }

    	
	mysql_close();
	
?>

</div>

<div class = "delete">
	<input type=button onClick="location.href='delete.php'" value='Delete'>

</div>
<div class = "delete">
	<input type=button onClick="location.href='update.php'" value='Update'>

</div>


</body>
</html>


