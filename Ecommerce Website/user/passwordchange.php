<?php include('function.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
   
</head>
<body>
<div class="header">
	<h2>Change your password</h2>
</div>

<form method="post" action="passwordchange.php">
<?php echo display_error(); ?>

	<div class="input-group">
		<label>old Password</label>
		<input type="text" name="oldpassword">
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
		<button type="submit" class="btn" name="change_btn">Change</button>
	</div>
	
</form>
</body>
</html>