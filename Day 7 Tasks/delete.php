<?php

	//connection
	$conn = mysqli_connect("localhost:3308","root","","db_internship");

	$id = $_GET['deleteid'];
	echo $id;
	//method 1 simple method
	$q = mysqli_query($conn," delete from student_form where id = '$id'" ) or die(mysqli_error($conn));
	//method 2 //soft delete
	$q = mysqli_query($conn," update student_form set is_delete = 1 where id = '$id'" ) or die(mysqli_error($conn));
	if ($q) {
			// code...
		echo "<script>alert('Record Deleted')</script>";
		}	
?>