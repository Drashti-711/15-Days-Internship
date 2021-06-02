<?php
//Numerical array
//method 1
	
	$a[0] = 10;
	$a[1] = 10;
	$a[2] = "A";
	$a[3] = 20.40;
	$a[4] = "1";
	echo "method 1 <br>";
	//print array values 
	echo "$a[3] <br>";
	echo $a[2];
 
 	// print whole array
 	for ($i=0; $i < count($a) ; $i++) { 
 		echo "<br>$a[$i]";
 	//	echo "<br/>".$a[$i];
 	}

	//method 2  	// index dynamic array
	$a[0] = 10;
	$a[1] = 10;
	$a[2] = "A";
	$a[3] = 20.74;
	$a[4] = "1";
	echo "<br>method 2<br>";
	//print array values 
	echo "$a[3] <br>";
	echo $a[2];
 
 	// print whole array
 	for ($i=0; $i < count($a) ; $i++) { 
 		echo "<br>$a[$i]";
 	//	echo "<br/>".$a[$i];
 	}
	// method 3
	$a = array(10,20,30,"A","C",10.25);
	echo "<br>method 3<br>";
	//print array values 
	echo "$a[3] <br>";
	echo $a[2];
 
 	// print whole array
 	for ($i=0; $i < count($a) ; $i++) { 
 		echo "<br>$a[$i]";
 	//	echo "<br/>".$a[$i];
 	}
 	
	//inbuilt function to debug
	echo "<pre>";
	print_r($a);
	echo "<pre>";
	echo "<pre>";
	var_dump($a);
?>