<?php

session_start();

include("includes/connection.php");

if (isset($_POST['submit1'])) {
	
	$username = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
	$password = htmlentities(mysqli_real_escape_string($con, $_POST['password']));

	$select_user = "select * from librarian_registration where username='$username' AND password='$password'";
	$query = mysqli_query($con, $select_user);
	$check_user = mysqli_num_rows($query);

	if ($check_user == 1) {
		
		$_SESSION["librarian"]=$_POST["username"];

	echo "<script>window.open('display_student_info.php', '_self')</script>";
	}else{
		echo "<script>alert('Your Username or Password is incorrect')</script>";
	}
}
?>