<?php
	//connection
	$conn = mysqli_connect("localhost:3308","root","","db_internship");
	//query  //is_delete= 0 means it shows only the data which is not deleted
	$query = mysqli_query($conn, "select * from student_form where is_delete=0") or die(mysqli_error($conn));
	
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Surname</th>";
	echo "<th>Email</th>";
	echo "<th>DOB</th>";
	echo "<th>Contact</th>";
	echo "<th>Address</th>";
	echo "<th>Area</th>";
	echo "<th>Pincode</th>";
	echo "<th>Bloodgroup</th>";
	echo "<th>Caste</th>";
	echo "<th>Action</th>";
	echo "</tr>";
	while ($row = mysqli_fetch_array($query)) {
		// code...
		echo "<tr>";
		echo "<td>{$row['id']}</td>";
		echo "<td>{$row['user_name']}</td>";
		echo "<td>{$row['user_surname']}</td>";
		echo "<td>{$row['email']}</td>";
		echo "<td>{$row['dob']}</td>";
		echo "<td>{$row['contact']}</td>";
		echo "<td>{$row['address']}</td>";
		echo "<td>{$row['area']}</td>";
		echo "<td>{$row['pincode']}</td>";
		echo "<td>{$row['bloodgrp']}</td>";
		echo "<td>{$row['caste']}</td>";
		echo "<td><a href='delete.php?deleteid={$row['id']}'> Delete</a> </td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "<a href='../Day 6 Tasks/Formwiththeme.php'>Add Record</a>";