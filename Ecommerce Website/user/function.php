<?php 
require('../db.php');
session_start();
// connect to database
$db = $con;

// variable declaration

$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['change_btn'])) {
	changepass();
}
// REGISTER USER
function changepass(){
	global $db, $errors;
	$user=$_SESSION['username'];
	// call these variables with the global keyword to make them available in function
	
	
	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$oldpassword =  md5($_POST['oldpassword']);
	$password_1  =  md5($_POST['password_1']);
	$password_2  =  md5($_POST['password_2']);

	$query = "SELECT password from user_profile WHERE full_name='$user' ";
        $result = mysqli_query($db,$query);
        $row = mysqli_fetch_array($result);
        $oldpassworddb=$row[0];
	// form validation: ensure that the form is correctly filled

	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($oldpassword != $oldpassworddb) {
		array_push($errors, "oldpassword do not match");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The New passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		

					$querchange=" UPDATE user_profile SET password='$password_1' WHERE full_name='$user'";
					$res=mysqli_query($db,$querchange);
					$_SESSION['success']  = "New user successfully created!!";
					session_destroy();
					
					header('location: login.php');
	
}
}
// return user array from their id


// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM user_profile WHERE full_name='$username' AND password='$password' LIMIT 1";
		$result = mysqli_query($db,$query);
		$rows = mysqli_num_rows($result);
		if($rows==1){
			$_SESSION['username'] = $username;
			$_SESSION['type'] = "user";
			header("Location: index.php");
			 }
	
		else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
?>