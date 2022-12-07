<?php

include('includes/database.php');

$get_id =$_GET['id'];
	
	// sending query  	
	$query = "DELETE FROM comments WHERE comment_id = '$get_id'" ;
	$result = mysqli_query($conn , $query) ; 
	header("Location: home.php");
