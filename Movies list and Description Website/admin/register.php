<?php include('function.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration New Admin</title>
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
   
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	
</form>
</body>
</html>