<?php include('function.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="css/login-register.css">
    
</head>
<body>
	<div class="header">
    <h1>Geez Movie Center</h1>
    <h2>Admin Panel</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		
	</form>
</body>
</html>