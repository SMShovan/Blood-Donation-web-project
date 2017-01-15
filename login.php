<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood Save Life</title>
	<link rel="stylesheet" type="text/css" href="login.css">
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

	<form name="login-form" class="login-form" action="loginDatabase.php" method="post">
	
		<div class="header">
		<h1>Login Form</h1>
		<span>Fill out the form below to login to view your dashboard.</span>
		</div>
	
		<div class="content">
		<input name="email" type="text" class="input username" placeholder="email" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Login" class="button" />
		</div>
	
	</form>

</div>
<div class="gradient"></div>



</body>
</html>