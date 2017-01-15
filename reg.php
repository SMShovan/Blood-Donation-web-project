<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood Save Life</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
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
	
</div>

<div id="wrapper">

	<form name="login-form" class="login-form" action="regDatabase.php" method="post">
	
		<div class="header">
			<h1>Signup Form</h1>
		</div>
	
		<div class="content">
			<input name="username" type="text" class="input username" placeholder="Username" />

			<input name="email" type="email" class="input email" placeholder="Email" />

			<input name="password" type="password" class="input password" placeholder="Password" />

			<input name="age" type="number" class="input rpassword" placeholder="Age" />

			<input name="phone" type="number" class="input number" placeholder="Mobile Number" />

			<input name="location" type="text" class="input username" placeholder="Input you District name " />




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

		    


		</div>

		<div class="footer">
			<input type="submit" name="submit" value="Registration" class="button"/>
		</div>
	
	</form>

</div>
<div class="gradient"></div>



</body>
</html>