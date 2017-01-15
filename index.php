<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood Save Life</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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

<div class="indexBody">
	
	<div class="BigLogo">

		<img src='BigLogo.png' alt="Donate Blood" >


	</div>

	<blockquote>
			<h3>The blood you donate gives someone another chance in life. <br>
			One day that someone may be a close relative, a friend, a loved one or even you.</h3>
	</blockquote>



	<form name="searchbg" class="searchbg" action="searchDatabase.php" method="post">

			<h3>Look for the donator according to the blood group </h3>


			<fieldset  class="radiobutton">
				<input type="radio" name="bgroup" value="a+" >
				<label >A+</label>
			    <input type="radio" name="bgroup" value="a-">
			    <label >A-</label>
			    <input type="radio" name="bgroup" value="b+">
			    <label >B+</label>
			    <input type="radio" name="bgroup" value="b-">
			    <label >B-</label>
			    <input type="radio" name="bgroup" value="ab+">
			    <label >AB+</label>
			    <input type="radio" name="bgroup" value="ab-">
			    <label >Ab-</label>
			    <input type="radio" name="bgroup" value="o+">
			    <label >O+</label>
			    <input type="radio" name="bgroup" value="o-">
			    <label >O-</label>
		    </fieldset>

		    <div class="footer">
			<input type="submit" name="submit" value="Search" class="button"/>
			</div>


			<input type=button onClick="location.href='login.php'" value='Login'>

			<input type=button onClick="location.href='reg.php'" value='Registration'>
		    
		</div>

		













	

</div>

<div class="cols3">
	
	<div class="col1">
		<img src='bloodDonate.png' alt="Donate Blood" >
		<h2>Give you blood<br>Save a life</h2>
	</div>

	<div class="col2">
		<img src='save3.png' alt="One donation can save 3 "  >
		<h2>One donation can save<br>up to 3 prople</h2>
	</div>

</div>


<footer class="foot">

	<div class="col1">
	<h2>Contacts<br></h2>
	<h4>Email: sm.shovan@gmail.com<br>Mobile:01843756745<br>Address:RUET<br></h4>

				
	</div>

	<div class="col2">

		<h2>Thanks Giving<br></h2>
	<h4>Special Thanks <br>to <br>Prof. Dr.Md. Shahid Uz Zaman <br>Department of Computer Science and Engineering,<br> RUET, Bangladesh</h4>

	</div>
	

</footer>
<div class ="top">
	<a href="#top"><img border="0" alt="W3Schools" src="top.png" width="50" height="50" alt="Top"></a>
</div>



</body>
</html>