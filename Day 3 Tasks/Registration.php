<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
   .form-group{
  		font-size: 17px;
  	}
  	h1{
  		margin-left: 70px;
  	}
  </style>
</head>
<body>

<div class="container">
  <h1>Registration Form</h1>
  <form class="form-horizontal" action="" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">First Name:</label>
      <div class="col-sm-4">
        <input type="name" class="form-control" id="fname" placeholder="Enter name" name="txt1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Last Name:</label>
      <div class="col-sm-4">          
        <input type="name" class="form-control" id="lname" placeholder="Enter surname" name="txt2">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age :</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control" id="number" placeholder="Enter Age" name="txt3">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">          
        <input type="Email" class="form-control" id="email" placeholder="Enter Email" name="txt4">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="number">Contact No.:</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control" id="number" placeholder="Enter Number" name="txt5">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
