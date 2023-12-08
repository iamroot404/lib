<?php 
 
include("includes/connection.php");

if (isset($_POST['submit1'])) {
	
	$firstname = htmlentities(mysqli_real_escape_string($con,$_POST['firstname']));
	$lastname = htmlentities(mysqli_real_escape_string($con,$_POST['lastname']));
	$username = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
	$password = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
	$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$contact = htmlentities(mysqli_real_escape_string($con,$_POST['contact']));
	$sem = htmlentities(mysqli_real_escape_string($con,$_POST['sem']));
	$enrollment = htmlentities(mysqli_real_escape_string($con,$_POST['enrollmentno']));
	
	

	if(strlen($password) <8 ){
		echo "<script>alert('Password should be minimum of 8 characters!')</script>";
		exit();
	}

	
	$insert = "insert into student_registration (firstname,lastname,username,password,email,contact,sem,enrollment,status)
	values('$firstname','$lastname','$username','$password','$email','$contact','$sem','$enrollment','yes')";
				

	$query = mysqli_query($con, $insert);

	if ($query) {
		
		echo "<script>alert('Registration Succesfully!')</script>";
		
		
	}
	else{
		echo "<script>alert('Registration failed please try again!')</script>";
		
	}

}

?>