

<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood Save Life</title>
	<link rel="stylesheet" type="text/css" href="searchDatabaseCss.css">
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
	$bgroup=null;
	$monthCheck=  date("Y-m-d", strtotime("-4 months"));


	mysql_connect("localhost","root","");
	mysql_select_db("webdev");


	if ( isset($_POST['bgroup']))
	{
		$bgroup = $_POST['bgroup'];
	
	}
	else
	{
				
		
	}


	$query = "SELECT UserName,Email,Age,Phone,BloodGroup,date(last_donation) as last_donation FROM webreg2 WHERE webreg2.BloodGroup= '$bgroup' and  (last_donation < '$monthCheck' or isnull( last_donation) = 1) group by last_donation desc";
    $result = mysql_query($query);

    echo "This is the list of all available people who can donate blood"."<br/>";
    echo"<br/>";
	echo"<br/>";

    $count = 1;
	while($row = mysql_fetch_array($result)){  
	echo"No ".$count."<br/>"."		" ;
	$count++;
	echo "Name: " . $row['UserName'] ."<br/>"."Email Address: ".  $row['Email'] ."<br/>"."Age: ".   $row['Age'] ."<br/>"."Phone:0".  $row['Phone'] ."<br/>"."Blood Group: ".   $row['BloodGroup'] ."<br/>"."Last Donated: ".   $row['last_donation'];  
	 echo"<br/>";
	 echo"<br/>";
	 echo"<br/>";
	}
	

	

	$count=0;

	mysql_close();
	
?>
</div>


</body>
</html>


