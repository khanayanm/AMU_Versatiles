<!DOCTYPE html>
<html>

<head>
	<title>Welcome To AMU Versatiles </title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
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
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"><button>Update Picture</button></a>

			</div>

			<div class="user-details">
				<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
				<h2><?php echo $username ?></h2>
			</div>
		</div>



		<div id="right-nav">
			<h1>Personal Info</h1>
			<hr />
			<br />
			<?php
			include('includes/database.php');


			$query = "SELECT * FROM user where user_id='$id' ";
			$result = mysqli_query($conn, $query);

			while ($test = mysqli_fetch_array($result)) {
				$id = $test['user_id'];
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['firstname'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['lastname'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['username'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['birthday'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['gender'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Enrolment No.</label>&nbsp;&nbsp;&nbsp;<b>" . $test['e_no'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Course</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['course_name'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Faculty</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['faculty'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Interest</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['interest'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>" . $test['number'] . "</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo "</div> ";
				echo "<br /> ";
				echo " <div class='edit-info'>";
				echo " <a href ='edit_profile.php?user_id=$id'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";
				echo "<br /> ";
			}
			?>

			<p><b>Note:</b> All the Other Details can only be Updated by the Admin.</p>

		</div>


	</div>




	</div>

</body>

</html>