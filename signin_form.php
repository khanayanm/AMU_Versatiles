					
<?php
include('includes/database.php');

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	//password_verify($password,$passwordInDatabase);

	// $result = mysqli_query("SELECT * FROM user WHERE email = '$email' and password='$password'")
	// or die(mysqli_error());
	$sql = "SELECT * FROM `user` WHERE `email` = '$email'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if ($count == 0) {
		echo "<script>alert('Please check your username'); window.location='signin.php'</script>";
	} else {
		if ($row = mysqli_fetch_array($result) and $row['c_status'] == 'yes') {
			$passwordInDatabase = $row["password"];
			if (!password_verify($password, $passwordInDatabase)) {
				echo "<script>alert('Please check your password!'); window.location='signin.php'</script>";
			} else {
				session_start();
				$_SESSION['id'] = $row['user_id'];
				include_once "./chat/php/config.php";

				$sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
				$row = mysqli_fetch_assoc($sql);
				$status = "Active now";
				$sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
				if ($sql2) {
					$_SESSION['unique_id'] = $row['unique_id'];
					echo "success";
				} else {
					echo "Something went wrong. Please try again!";
				}

				header("location:home.php");
			}
		}
		else{
			echo "<script>alert('You are Not Authorised to Access Your Account | Admin Verification Pending');  window.location='index.php';</script>";
		}
	}
}
?>