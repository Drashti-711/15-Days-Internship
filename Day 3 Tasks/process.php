<?php
// $_GET $_POST $_REQUEST //capital
	
//	$a = $_GET['name']; //shows input data in url 
//	$b = $_GET['age']; 	//shows input data in url 

//	$a = $_REQUEST['name']; //takes both get and put 
//	$b = $_REQUEST['age']; 	

	$a = $_POST['name'];  
	$b = $_POST['age']; 	

	echo "My name is $a and Age is $b";
?>