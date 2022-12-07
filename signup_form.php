<?php
// include ('session.php');
?>
<?php
include('includes/database.php');

if (isset($_POST['submit'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$interest = $_POST['interest'];
	$birthday = $_POST['day'] . "/" . $_POST['month'] . "/" . $_POST['year'];
	$gender = $_POST['gender'];
	$number = $_POST['number'];
	$faculty = $_POST['faculty'];
	$course_name = $_POST['course_name'];
	$semester = $_POST['semester'];
	$e_no = $_POST['e_no'];
	$email = $_POST['email'];
	$email2 = $_POST['email2'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$ran_id = rand(time(), 100000000);

	// $sql=mySQLi_query("select * from user WHERE email='$email'") or die (mySQLi_error($conn));

	$sql = "SELECT * FROM `user` WHERE `email` = '$email'";

	$result = mysqli_query($conn, $sql);
	$row = mySQLi_num_rows($result);

	if ($row > 0) {
		echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
	} else if ($password != $password2) {
		echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
	} else {
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);

		$sql1 = "INSERT INTO `user` (`firstname`,`lastname`,`username`,`interest`,`birthday`,`gender`,`number`,`faculty`,`course_name`,`semester`,`e_no`,`email`,`email2`,`password`,`password2`,`profile_picture`,`cover_picture`, `c_status`)
			VALUES ('$firstname','$lastname','$username','$interest','$birthday','$gender','$number','$faculty','$course_name','$semester','$e_no','$email','$email2','$passwordHash','$passwordHash','upload/noDP.jpg','upload/coverbg.jpg', 'no')";
		$result1 = mysqli_query($conn, $sql1);
		echo mySQLi_error($conn);

		$sql2 = "INSERT INTO `users` (`unique_id`,`fname`, `lname`, `email`, `password`, `img`, `status`, `interest`) 
			VALUES ('$ran_id','$firstname', '$lastname', '$email', '$passwordHash','upload/noDP.jpg','Active now', '$interest');";
		$result2 = mysqli_query($conn, $sql2);

		echo mySQLi_error($conn);
		echo "<script>alert('Account Successfully Created! Your Profile has been Sent for Verification.'); window.location='signin.php'</script>";
	}
}

?>