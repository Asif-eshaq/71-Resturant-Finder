<?php include('loginServer.php') ?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="csss/style.css">
</head>
<body>

	<div class="header">
	    <h1>Online Restaurant Finder</h1>
	    <br>
	    <h4> Admin Panel </h4>
	    <br>
		<h2>Please Login</h2>
	</div>
	
	<form method="post" action="index1.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>