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

	<form name="login-form" class="login-form" action="updateDatabase.php" method="post">
	
		<div class="header">
			<h1>Update your last donation date</h1>
			<span>Fill out the form below </span>
		</div>
	
		<div class="content">

			<input name="email" type="email" class="input email" placeholder="Email" />

			<input name="password" type="password" class="input password" placeholder="Password" />

			<input name="date" type="date" class="input username" placeholder="When you last donated? (yyyy-mm-dd)" />

		</div>

		<div class="footer">
			<input type="submit" name="submit" value="Update" class="button"/>
		</div>
	
	</form>

</div>
<div class="gradient"></div>



</body>
</html>