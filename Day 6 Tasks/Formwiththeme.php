<?php
	$host="localhost:3308";
	$username="root";
	$password="";
	$dbname="db_internship";

	$conn = mysqli_connect($host,$username,$password,$dbname);
	//echo "connect";

	if(isset($_POST['submit']))
{
	$user_name = mysqli_real_escape_string($conn, $_POST['txt1']);
    $user_surname = mysqli_real_escape_string($conn, $_POST['txt2']);
    $email = mysqli_real_escape_string($conn, $_POST['txt3']);
    $dob = mysqli_real_escape_string($conn, $_POST['txt4']);
    $contact = mysqli_real_escape_string($conn, $_POST['txt5']);
    $address = mysqli_real_escape_string($conn, $_POST['txt6']);
    $area = mysqli_real_escape_string($conn, $_POST['txt7']);
    $pincode = mysqli_real_escape_string($conn, $_POST['txt8']);
    $bloodgrp = mysqli_real_escape_string($conn, $_POST['txt9']);
    $caste = mysqli_real_escape_string($conn, $_POST['txt10']);

    //Check email already present in table or not
    $emailquery = "select * from student_form where email = '$email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);

     if($emailcount > 0)
    {
        echo  '<script type="text/javascript">
                    alert("Email already exists.. !");
                </script>';
    }
    else
    {
    	$insertquery = "insert into student_form(user_name, user_surname, email, dob, contact, address, area, pincode, bloodgrp, caste) values('$user_name', '$user_surname', '$email', '$dob', '$contact', '$address', '$area', '$pincode', '$bloodgrp', '$caste') ";

            $iquery = mysqli_query($conn, $insertquery);
            if($iquery)
            {
                ?>
                <script type="text/javascript">
                    alert("REGISTER SUCCESSFULLY");
                    location.replace("Formwiththeme.php");
                </script>

                <?php
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert("SOME ERROR OCCURED IN REGISTRATION");
                    location.replace("Formwiththeme.php");
                </script>

                <?php
            }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.container .form-group{
			display: inline-block;
			margin-top: 30px;
			padding-right: 25px;
			padding-left: 50px;
			box-sizing: border-box;	

		}
		.form-group button{
			width: 100;
		}
		.container {
		  border-radius: 15px;
		  background-color: #f2f2f2;
		  padding: 20px;
		  padding-bottom: 25px;
		}
		body{
			background-color: skyblue;
		}
		div{
			text-align: center;
		}
		.topnav {
			overflow: hidden;
			background-color: green;
			padding: 15px 20px;
			display: block;
			font-size: 20px;
			text-align: center;
			overflow: hidden;
		}

		.topnav a:hover {
		  background: #ddd;
		  color: red;
		  padding: 15px 20px;
		  font-size: 20px;
		}
		.footer{
			background-color: green;
			font-size: 22.5px;
			padding: 16px;
		}
		.footer a{
			color: black;
		}
	</style>

</head>
<body>
	<div class="topnav">
	  <a class="active" href="#home">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <a href="#about">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <a href="#about">Studentlogin</a>
	</div>
	<h1 align="center">Student Form</h1>
	<div class="container">
		<form method="POST">
			<div class="form-group">
				<label for="name" class="col-sm-10 col-form-label">First Name : </label>
				<div class="col-sm-10"><input type="name" name="txt1"></div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-10 col-form-label">Last Name : </label>
				<div class="col-sm-10"><input type="name" name="txt2"></div>
			</div>

			<div class="form-group">
				<label for="Email" class="col-sm-10 col-form-label">Email : </label>
				<div class="col-sm-10"><input type="email" name="txt3"></div>
			</div>

			<div class="form-group">
				<label for="dob" class="col-sm-10 col-form-label">Date of Birth : </label>
				<div class="col-sm-10"><input type="dob" name="txt4"></div>
			</div>

			<div class="form-group">
				<label for="number" class="col-sm-10 col-form-label">Contact no : </label>
				<div class="col-sm-10"><input type="text" name="txt5"></div>
			</div>

			<div class="form-group">
				<label for="address" class="col-sm-10 col-form-label">Address : </label>
				<div class="col-sm-10"><input type="textarea" name="txt6"></div>
			</div>

			<div class="form-group">
				<label for="area" class="col-sm-10 col-form-label">Area : </label>
				<div class="col-sm-10"><input type="area" name="txt7"></div>
			</div>

			<div class="form-group">
				<label for="pincode" class="col-sm-10 col-form-label">Pincode : </label>
				<div class="col-sm-10"><input type="text" name="txt8"></div>
			</div>

			<div class="form-group">
				<label for="bloodgrp" class="col-sm-10 col-form-label">Bloodgroup : </label>
				<div class="col-sm-10"><input type="text" name="txt9"></div>
			</div>

			<div class="form-group">
				<label for="caste" class="col-sm-10 col-form-label">Caste : </label>
				<div class="col-sm-10"><input type="text" name="txt10"></div>
			</div>

			<div>
				<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
			</div>
		</form>
	</div>

</body>
</html>