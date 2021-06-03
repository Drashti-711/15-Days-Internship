<?php
	$host="localhost:3308";
	$username="root";
	$password="";
	$dbname="db_internship";

	$conn = mysqli_connect($host,$username,$password,$dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	// to data data manually
	$query = "insert into form(user_name, user_surname, email, dob, contact, address, area, pincode, bloodgrp, caste) VALUES('drashti','abc','a@email.com','01-01-1001','1236547899','dsff','fgdf',453423,'sdf','dsfvc')";
	$q = mysqli_query($conn,$query);

	if ($query) {
		// code...
		echo "<script> alert('Record Added'); </script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Form </title>
</head>
<body>
	<h1>Student Form</h1>
	<div class="container">
		<form method="POST">
			<div class="form-group">
				<label for="name" class="col-sm-10 col-form-label">First Name : </label>
				<div class="col-sm-10"><input type="name" name="txt1" required></div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-10 col-form-label">Last Name : </label>
				<div class="col-sm-10"><input type="name" name="txt2" required></div>
			</div>

			<div class="form-group">
				<label for="Email" class="col-sm-10 col-form-label">Email : </label>
				<div class="col-sm-10"><input type="email" name="txt3" required></div>
			</div>

			<div class="form-group">
				<label for="dob" class="col-sm-10 col-form-label">Date of Birth : </label>
				<div class="col-sm-10"><input type="dob" name="txt4" required></div>
			</div>

			<div class="form-group">
				<label for="number" class="col-sm-10 col-form-label">Contact no : </label>
				<div class="col-sm-10"><input type="text" name="txt5" required></div>
			</div>

			<div class="form-group">
				<label for="address" class="col-sm-10 col-form-label">Address : </label>
				<div class="col-sm-10"><input type="textarea" name="txt6" required></div>
			</div>

			<div class="form-group">
				<label for="area" class="col-sm-10 col-form-label">Area : </label>
				<div class="col-sm-10"><input type="area" name="txt7" required></div>
			</div>

			<div class="form-group">
				<label for="pincode" class="col-sm-10 col-form-label">Pincode : </label>
				<div class="col-sm-10"><input type="text" name="txt8" required></div>
			</div>

			<div class="form-group">
				<label for="bloodgrp" class="col-sm-10 col-form-label">Bloodgroup : </label>
				<div class="col-sm-10"><input type="text" name="txt9" required></div>
			</div>

			<div class="form-group">
				<label for="caste" class="col-sm-10 col-form-label">Caste : </label>
				<div class="col-sm-10"><input type="text" name="txt10" required></div>
			</div>

			<div>
				<button class="btn btn-primary" type="submit" value="submit">Submit</button>
			</div>
		</form>
	</div>
	
</body>
</html>