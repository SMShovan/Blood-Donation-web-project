

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
			<a href="Why.php">why?</a>
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

	$query = "SELECT UserName,Email,Age,Phone,BloodGroup FROM webreg2 WHERE webreg2.Email= '$email' AND webreg2.Password='$password' "; 
    $result = mysql_query($query);



	while($row = mysql_fetch_array($result)){  
	mysql_query("DELETE FROM webreg2 WHERE webreg2.Email= '$email' AND webreg2.Password='$password' ");
	echo "<script type='text/javascript'>alert('Deletion success, sorry to say you GOOD BYE');document.location='index.php'</script>";
	$count = $count +1;
	}
	if( $count == 0){
	echo "<script type='text/javascript'>alert('Wrong Email or Password');document.location='delete.php'</script>";


    }

    	
	mysql_close();
	
?>

</div>

<div class = "delete">
	<input type=button onClick="location.href='delete.php'" value='Delete'>

</div>



</body>
</html>


