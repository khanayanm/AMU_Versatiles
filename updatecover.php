<!DOCTYPE html>
<html>

<head>
	<title>Welcome To AMU Versatiles </title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
	<?php include('session.php'); ?>

	<nav id="navbar">
		<div id="logo">

			<a href="home.php" title="AMU Versatiles "><b>AMU Versatiles</b></a>
		</div>
		<ul>
			<li class="item"><a href="timeline.php" title="<?php echo $username ?>"><label class="active"><?php echo $username ?></label></a></li>
			<li class="item"><a href="home.php" title="Home"><label>Home</label></a></li>
			<li class="item"><a href="profile.php" title="Home"><label>Profile</label></a></li>
			<li class="item"><a href="photos.php" title="Settings"><label>Photos</label></a></li>
			<li class="item"><a href="./chat/index.php" title="conversation"><label>Chat</label></a></li>
			<li class="item"><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
		</ul>
	</nav>

	<form method="post" enctype="multipart/form-data" style="margin-left: 20px; margin-top:40px;">
		<input type="file" name="image">
		<input type="submit" value="save" name="image" />
		<?php
		include('includes/database.php');

		if (!isset($_FILES['image']['tmp_name'])) {
			echo "";
		} else {
			$file = $_FILES['image']['tmp_name'];
			$image = $_FILES["image"]["name"];
			$image_name = addslashes($_FILES['image']['name']);
			$size = $_FILES["image"]["size"];
			$error = $_FILES["image"]["error"];

			if ($error > 0) {
				die("Error uploading file! Code $error.");
			} else {
				if ($size > 10000000) //conditions for the file
				{
					die("Format is not allowed or file size is too big!");
				} else {

					move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
					$location = "upload/" . $_FILES["image"]["name"];
					$user = $_SESSION['id'];

					$query = "UPDATE user SET cover_picture = '$location' WHERE user_id='$user'";
					$result = mysqli_query($conn, $query);
				}
				header('location:timeline.php');
			}
		}
		?>
	</form>

</body>

</html>