<?php
require('includes/database.php');
$id = $_REQUEST['user_id'];

$query = "SELECT * FROM user WHERE user_id  = '$id' ";
$result = mysqli_query($conn, $query);

$test = mysqli_fetch_array($result);
if (!$result) {
	die("Error: Data not found..");
}
$firstname = $test['firstname'];
$lastname = $test['lastname'];
$username = $test['username'];
$birthday = $test['birthday'];
$gender = $test['gender'];
$number = $test['number'];

if (isset($_POST['save'])) {
	$first_save = $_POST['firstname'];
	$last_save = $_POST['lastname'];
	$username_save = $_POST['username'];
	$birthday_save = $_POST['birthday'];
	$gender_save = $_POST['gender'];
	$number_save = $_POST['number'];

	$query1 = "UPDATE `user` SET `firstname` ='$first_save', `lastname` ='$last_save', `username` ='$username_save', 
	`birthday` ='$birthday_save' , `gender` ='$gender_save', `number` ='$number_save' WHERE user_id = '$id'";
	$result1 = mysqli_query($conn, $query1);

	echo "Saved!";

	header("Location: profile.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Welcome To AMU Versatiles </title>
	<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
	<?php include('session.php'); ?>

	<nav id="navbar">
		<div id="logo">

			<a href="home.php" title="AMU Versatiles style=" text-decoration: none;""><b>AMU Versatiles</b></a>
		</div>
		<ul>
			<li class="item"><a href="timeline.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
			<li class="item"><a href="home.php" title="Home"><label>Home</label></a></li>
			<li class="item"><a href="profile.php" title="Home"><label class="active">Profile</label></a></li>
			<li class="item"><a href="photos.php" title="Settings"><label>Photos</label></a></li>
			<li class="item"><a href="./chat/index.php" title="conversation"><label>Chat</label></a></li>
			<li class="item"><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
		</ul>
	</nav>


	<div id="container">

		<div id="left-nav">

			<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
			</div>

			<div class="user-details">
				<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
				<h2><?php echo $username ?></h2>
			</div>
		</div>



		<div id="right-nav">
			<h1>Edit Info</h1>

			<div id="left-nav1">

				<fieldset class="-------------">
					<table cellpadding="5" cellspacing="5">

						<form method="post">
							<tr>
								<td><label>First name</label></td>
								<td><label>Last name</label></td>
							</tr>
							<tr>
								<td><input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Enter your firstname....." class="form-1" title="Enter your firstname" required /></td>
								<td><input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Enter your lastname....." class="form-1" title="Enter your lastname" required /></td>
							</tr>
							<tr>
								<td><label>User name</label></td>
							</tr>
							<tr>
								<td><input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
							</tr>
					</table>
				</fieldset>
				<br />
				<fieldset class="---------------">
					<legend>
						<h1>Personal Info</h1>
					</legend>
					<table cellpadding="5" cellspacing="5">
						<tr>
							<td><label>Birthday</label></td>
							<td><input type="date" name="birthday" value="<?php echo $birthday; ?>" class="form-1" title="Enter your username" required /></td>

						</tr>
						<tr>
							<td><label>Gender</label></td>
							<td>
								<select name="gender" class="form-1" value="<?php echo $gender; ?>">
									<option>Select</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>Mobile number</label></td>
							<td><input type="text" name="number" value="<?php echo $number; ?>" placeholder="09...." maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
						</tr>
					</table>
				</fieldset>
				<br />
				<button type="submit" name="save" class="">Save</button>


			</div>

		</div>




	</div>

</body>

</html>