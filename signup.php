<!DOCTYPE html>
<html>

<head>
	<title>Welcome To AMU Versatiles </title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>

	<div id="container">
		<div class="sign-in-form">
			<center>
				<h1>Welcome to AMU Versatiles</h1>
			</center>

			<h2>Sign up</h2>
			<b>All fields are required.</b>
			<br />

			<fieldset class="sign-up-form-1">
				<form method="post" action="signup_form.php" enctype="multipart/form-data">
					<table cellpadding="5" cellspacing="5">
						<tr>
							<td><label>First name*</label></td>
							<td><label>Last name *</label></td>
						</tr>
						<tr>
							<td><input type="text" name="firstname" placeholder="Enter your firstname....." class="form-1" title="Enter your firstname" required /></td>
							<td><input type="text" name="lastname" placeholder="Enter your lastname....." class="form-1" title="Enter your lastname" required /></td>
						</tr>
						<tr>
							<td><label>User name*</label></td>
							<td><label>Select Your Interest*</label></td>
						</tr>
						<tr>
							<td><input type="text" name="username" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
							<td>
								<select class="form-1" name="interest" required>
									<option selected value="coding">Coding</option>
									<option value="studying">Photography</option>
									<option value="playing">Calligraphy</option>
									<option value="music">Music</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">Note: No one can follow your username.</td>
						</tr>
					</table>
			</fieldset>

			<br />

			<fieldset class="sign-up-form-1">
				<legend>Profile information</legend>
				<table cellpadding="5" cellspacing="5">
					<tr>
						<td><label>Birthday</label></td>
						<td>
							<select name=day style="font-size:18px;" required>
								<?php

								$day = 1;
								while ($day <= 31) {
									echo "<option> $day
					  </option>";
									$day++;
								}
								?>
							</select>
							<select name=month style="font-size:18px;" required>
								<option>January</option>
								<option>Febuary</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
							</select>
							<select name=year style="font-size:18px;" required>
								<?php
								$year = 1950;
								while ($year <= 2050) {
									echo "<option> $year
					  </option>";
									$year++;
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Gender</label></td>
						<td>
							<label>Male</label><input type="radio" name="gender" value="male" required />
							<label>Female</label><input type="radio" name="gender" value="female" required />
						</td>
					</tr>
					<tr>
						<td><label>Mobile number*</label></td>
						<td><input type="text" name="number" placeholder="09...." maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
					</tr>
				</table>
			</fieldset>

			<br />

			<fieldset class="sign-up-form-1">
				<legend>Educational Information*</legend>
				<table cellpadding="5" cellspacing="5">
					<tr>
						<td><label>Faculty*</label></td>
						<td><label>Course *</label></td>
					</tr>
					<tr>
						<td><select class="form-1" name="faculty" required>
								<option selected value="Arts">Arts</option>
								<option value="Commerce">Commerce</option>
								<option value="Law">Law</option>
								<option value="Medicine">Medicine</option>
								<option value="Science">Science</option>
							</select></td>
						<td><input type="text" name="course_name" class="form-1" title="Enter your course name" placeholder="Enter Your Course Name" required /></td>
					</tr>

					<tr>
						<td><label>Semester*</label></td>
						<td><label>Enrolment No*</label></td>
					</tr>
					<tr>
						<td><select class="form-1" name="semester" required>
								<option selected value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>\
								<option value="10">10</option>
							</select></td>
						<td><input type="text" name="e_no" class="form-1" title="Enter your Enrolment No" placeholder="XY1234" required /></td>
					</tr>
					<tr>
						<td colspan="2">Note: Your Details are Safe with Us.</td>
					</tr>

				</table>
			</fieldset>

			<fieldset class="sign-up-form-1" style="margin-top: 25px;">
				<legend>Log in information*</legend>
				<table cellpadding="5" cellspacing="5">
					<tr>
						<td><label>Your email address*</label></td>
						<td><label>Repeat email *</label></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Enter your email address....." class="form-1" title="Enter your firstname" required /></td>
						<td><input type="text" name="email2" class="form-1" title="Enter your lastname" required /></td>
					</tr>
					<tr>
						<td colspan="2">Note: no-one can see your email address.</td>
					</tr>
					<tr>
						<td><label>Password*</label></td>
						<td><label>Repeat password*</label></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Enter your password....." class="form-1" title="Enter your username" required /></td>
						<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
					</tr>
					<tr>
						<td colspan="2">Note: no-one else can see your password.</td>
					</tr>
				</table>
			</fieldset>

			<br />

			<strong>Yes, I have read and I accept the <a href="#">AMU Versatiles Terms of Use</a> and the <a href="#">AMU Versatiles Privacy Statement</a></strong>

			<br />
			<br />
			<input type="submit" name="submit" value="I Agree - Continue" class="btn-sign-in" title="Log in" />
			</form>

		</div>
	</div>

</body>

</html>