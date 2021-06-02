<?php
	//Associative Array
	// key = Value
	//method 1
	$a[0] = 12;
	$a['c'] = 'Computer';
	$a['html'] = "Web Development";
	$a[2] = 12;
	echo "method 1";
	foreach ($a as $value) {
		echo "<br> value is $value";
	}
	//method 2
	$a = array(
		'1' => 10,
		'C' => "cake",
		'html' => 10,
		'5' => 10.25,
		 );
	echo "<br>method 2";
	foreach ($a as $key => $value) {
		echo "<br> Key is $key and value is $value";
	}

	//inbuilt function to debug
	echo "<pre>";
	print_r($a);
	echo "<pre>";
	echo "<pre>";
	var_dump($a);

?>