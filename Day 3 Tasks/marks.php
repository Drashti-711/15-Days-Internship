<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Marks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
				<div class="col-lg-8">
					<h2>Enter Details</h2>
					<form action="result.php" method="POST">
						<div class="form-group">
							<label >Name : </label>
							<input type="name" id="name" placeholder="Enter Name" name="txt1" required/>
						</div>	
						<div class="form-group">
							<label >Sem : </label>
							<input type="text" id="number" placeholder="Enter sem" name="txt2" required/>
						</div>	
						<div class="form-group">
							<label >sub1 : </label>
							<input type="text" id="number" placeholder="Enter Marks" name="txt3" required/>
						</div>	
						<div class="form-group">
							<label >sub2 : </label>
							<input type="text" id="number" placeholder="Enter Marks" name="txt4" required/>
						</div>	
						<div class="form-group">
							<label >sub3 : </label>
							<input type="text" id="number" placeholder="Enter Marks" name="txt5" required/>
						</div>	
						<div class="form-group">
							<label >sub4 : </label>
							<input type="text" id="number" placeholder="Enter Marks" name="txt6" required/>
						</div>	
						<div class="form-group">
							<label >sub5 : </label>
							<input type="text" id="number" placeholder="Enter Marks" name="txt7" required/>
						</div>	
						<div class="form-group">
							<input type="submit" name="submit">
						</div>	
					</form>
				</div>		
		</div>
	</div>
</body>
</html>