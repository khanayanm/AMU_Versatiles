<!DOCTYPE html>
<html>

<head>
	<title>Welcome To AMU Versatiles </title>
	<link rel="stylesheet" type="text/css" href="css/photos.css">
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
			<li class="item"><a href="profile.php" title="Home"><label>Profile</label></a></li>
			<li class="item"><a href="photos.php" title="Settings"><label class="active">Photos</label></a></li>
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

			<?php
			include("includes/database.php");
			$query = "SELECT * from user where user_id='$id' order by user_id DESC";
			$result = mysqli_query($conn, $query);

			while ($row = mySQLi_fetch_array($result)) {
				$id = $row['user_id'];
			?>

				<div id="left-nav1">

					<h2>Personal Info</h2>
					<table>
						<tr>
							<td><label>Username</label></td>
							<td width="20"></td>
							<td><b><?php echo $row['username']; ?></b></td>
						</tr>
						<tr>
							<td><label>Birthday</label></td>
							<td width="20"></td>
							<td><b><?php echo $row['birthday']; ?></b></td>
						</tr>
						<tr>
							<td><label>Gender</label></td>
							<td width="20"></td>
							<td><b><?php echo $row['gender']; ?></b></td>
						</tr>
						<tr>
							<td><label>Interest</label></td>
							<td width="20"></td>
							<td><b><?php echo $row['interest']; ?></b></td>
						</tr>
						<tr>
							<td><label>Course</label></td>
							<td width="20"></td>
							<td><b><?php echo $row['course_name']; ?></b></td>
						</tr>
						<tr>
							<td><label>Contact</label></td>
							<td width="20"></td>
							<td><b><?php echo $row['number']; ?></b></td>
						</tr>
						<tr>
							<td><label>Email</label></td>
							<td width="20"></td>
							<td><b><?php echo $row['email']; ?></b></td>
						</tr>
						<tr>
							<td><label>Image</label></td>
							<td width="20"></td>
							<td><img src="<?php echo $row['profile_picture']; ?>"></td>
						</tr>
					</table>
				<?php
			}
				?>
				</div>

		</div>

		<div id="right-nav">
			<h1>Your Photos</h1>
			<div>
				<form method="post" action="add_photo.php" enctype="multipart/form-data">
					<input type="file" name="image">
					<button class="btn-submit-photo" name="Submit" value="Log out">Add Photos</button>
				</form>
				<hr />
			</div>


			<?php
			include("includes/database.php");

			$query = "SELECT * from photos where user_id='$id' ";
			$result = mysqli_query($conn, $query);

			while ($row = mySQLi_fetch_array($result)) {
				$id = $row['photo_id'];
			?>

				<div class="photo-select">
					<center>
						<img src="<?php echo $row['location']; ?>">
						<hr>
						<a href="delete_photos.php<?php echo '?id=' . $id; ?>" class="btn-delete-photos">Delete</a>
					</center>
				</div>

			<?php
			}
			?>
		</div>


	</div>

</body>

</html>