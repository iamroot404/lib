<?php
session_start();

include("includes/connection.php");

if (isset($_POST['submit1'])) {
	
	$username = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
	$password = htmlentities(mysqli_real_escape_string($con, $_POST['password']));

	$select_user = "select * from student_registration where username='$username' AND password='$password' AND status='yes'";
	$query = mysqli_query($con, $select_user);
	$check_user = mysqli_num_rows($query);
	
	$select_status = "select * from student_registration where status='no'";
	$queryy = mysqli_query($con, $select_status);
	$check_status = mysqli_num_rows($queryy);

	if ($check_user == 1) {
		
		$_SESSION["username"]=$_POST["username"];

	echo "<script>window.open('my_books.php', '_self')</script>";
	
	}elseif ($check_status == 1) {
		echo "<script>alert('Sorry your account has been suspended please contact the Librarian')</script>";
	}else{
		echo "<script>alert('Your Username or Password is incorrect')</script>";
	}
}
?>
