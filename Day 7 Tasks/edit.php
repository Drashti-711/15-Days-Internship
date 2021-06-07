<?php

	//connection
	$conn = mysqli_connect("localhost:3308","root","","db_internship");
	//(!isset) = if value is not set 
	if (!isset($_GET['editid']) || empty($_GET['editid'])) {
	 	// code...
	 	header("location:displaytableform.php");
	 } 

	$id = $_GET['editid'];

	// select data from table
	$editquery = mysqli_query($conn, "select * from student_form where id = '$id' ") or die(mysqli_error($conn));

	$editdata = mysqli_fetch_array($editquery);

	//print_r($editdata);

	if ($_POST) {
		// code...
		$txt1 = $_POST['txt1'];
		$txt2 = $_POST['txt2'];
		$txt3 = $_POST['txt3'];
		$txt4 = $_POST['txt4'];
		$txt5 = $_POST['txt5'];
		$txt6 = $_POST['txt6'];
		$txt7 = $_POST['txt7'];
		$txt8 = $_POST['txt8'];
		$txt9 = $_POST['txt9'];
		$txt10 = $_POST['txt10'];

		$uq = mysqli_query($conn, "update student_form set user_name='$txt1' , user_surname='$txt2', email='$txt3',dob='$txt4',contact='$txt5', address='$txt6', area='$txt7', pincode='$txt8', bloodgrp='$txt9', caste='$txt10' where id='$id' ") or die(mysqli_error($conn));

		if ($uq) {
			// code...
			echo "<script>alert('Record Updates'); window.location='displaytableform.php'; </script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
		First Name : <input type="name" name="txt1" value="<?php echo $editdata['user_name'] ?>"><br>
		Last Name : <input type="name" name="txt2" value="<?php echo $editdata['user_surname'] ?>"><br>
		email : <input type="name" name="txt3" value="<?php echo $editdata['email'] ?>"><br>
		dob : <input type="name" name="txt4" value="<?php echo $editdata['dob'] ?>"><br>
		Contact : <input type="name" name="txt5" value="<?php echo $editdata['contact'] ?>"><br>
		Address : <input type="name" name="txt6" value="<?php echo $editdata['address'] ?>"><br>
		Area : <input type="name" name="txt7" value="<?php echo $editdata['area'] ?>"><br>
		Pincode : <input type="name" name="txt8" value="<?php echo $editdata['pincode'] ?>"><br>
		Bloodgroup : <input type="name" name="txt9" value="<?php echo $editdata['bloodgrp'] ?>"><br>
		Caste : <input type="name" name="txt10" value="<?php echo $editdata['caste'] ?>"><br>
		<input type="submit" name="submit">

	</form>
</body>
</html>