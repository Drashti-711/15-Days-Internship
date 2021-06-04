<?php
	//connection
	$conn = mysqli_connect("localhost:3308","root","","db_internship");
	//query
	$query = mysqli_query($conn, "select * from student_form ") or die(mysqli_error($conn));
	//below function will fetch numerical array
	$row = mysqli_fetch_row($query); // this will give only one row
	//debug
	print_r($row);
	echo $row[0] .$row[1] .$row[2] .$row[3] .$row[4] .$row[5] .$row[6] .$row[7] .$row[8] .$row[9] .$row[10];

	//numerical and associative //method 2
	$q = mysqli_query($conn, "select * from student_form ") or die(mysqli_error($conn));
	$row = mysqli_fetch_array($q);
	echo "<pre>";
	print_r($row);
	echo $row[0] .$row[1] .$row[2] .$row[3] .$row[4] .$row[5] .$row[6] .$row[7] .$row[8] .$row[9] .$row[10];
	echo $row['id'] .$row['user_name'] .$row['user_surname'] .$row['email'] .$row['dob'] .$row['contact'] .$row['address'] .$row['area'] .$row['pincode'] .$row['bloodgrp'] .$row['caste'];
?>