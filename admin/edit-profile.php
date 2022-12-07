<?php session_start();
include_once('../includes/database.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:logout.php');
} else {
    //Code for Updation 
    if (isset($_POST['update'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $dob = $_POST['birthday'];
        $course_name = $_POST['course_name'];
        $faculty = $_POST['faculty'];
        $interest = $_POST['interest'];
        $contact = $_POST['number'];
        $userid = $_GET['uid'];
        $msg = mysqli_query($conn, "update user set firstname='$fname', lastname='$lname', gender='$gender', birthday='$dob', course_name='$course_name', faculty='$faculty', interest='$interest', number='$contact' where user_id='$userid'");

        $msg1 = mysqli_query($conn, "update users set fname='$fname', lname='$lname', interest='$interest' where user_id='$userid'");


        if ($msg) {
            echo "<script>alert('Profile updated successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
        }
    }



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php'); ?>
        <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <?php
                        $userid = $_GET['uid'];
                        $query = mysqli_query($conn, "select * from user where user_id='$userid'");
                        while ($result = mysqli_fetch_array($query)) { ?>
                            <h1 class="mt-4"><?php echo $result['firstname']; ?>'s Profile</h1>
                            <div class="card mb-4">
                                <form method="post">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>First Name</th>
                                                <td><input class="form-control" id="firstname" name="firstname" type="text" value="<?php echo $result['firstname']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <th>Last Name</th>
                                                <td><input class="form-control" id="lastname" name="lastname" type="text" value="<?php echo $result['lastname']; ?>" required /></td>
                                            </tr>

                                            <tr>
                                                <th>Gender</th>
                                                <td><input class="form-control" id="gender" name="gender" type="text" placeholder="Male/Female" value="<?php echo $result['gender']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td><input class="form-control" id="birthday" name="birthday" type="text" placeholder="DD/MM/YYYY" value="<?php echo $result['birthday']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <th>Course</th>
                                                <td><input class="form-control" id="course_name" name="course_name" type="text" value="<?php echo $result['course_name']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <th>Faculty</th>
                                                <td><input class="form-control" id="faculty" name="faculty" type="text" value="<?php echo $result['faculty']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <th>Interest</th>
                                                <td><input class="form-control" id="interest" name="interest" type="text" value="<?php echo $result['interest']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <th>Contact No.</th>
                                                <td colspan="3"><input class="form-control" id="number" name="number" type="text" value="<?php echo $result['number']; ?>" required /></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td colspan="3"><?php echo $result['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Enrolment No.</th>
                                                <td colspan="3"><?php echo $result['e_no']; ?></td>
                                            </tr>


                                            <tr>
                                                <th>Reg. Date</th>
                                                <td colspan="3"><?php echo $result['posting_date']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>

                    </div>
                </main>
                <?php include('../includes/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>

    </html>
<?php } ?>