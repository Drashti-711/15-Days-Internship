<?php
	echo "<table border='1'>";
	//Array_count_values //count how many times the value is present
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - arraycountvalues</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,"C","php","C",34);
			$newarr = array_count_values($a);
			foreach ($newarr as $key => $value) {
				echo "<td>Key is <b> $key</b> - value is $value </td>";
			}
		echo "</tr>";

		//Array_sum
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - array_sum()</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,32,43,34);
			$sum = array_sum($a);
			echo "<td colspan='4'> The sum of all four values entered = $sum</td>";
		//	echo array_sum($a); // sum and print directly
		echo "</tr>";

		//Array_product 
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - array_product()</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,32,43,34);
			$product = array_product($a);
			echo "<td colspan='4'> The product of all four values entered = $product</td>";
		//	echo array_product($a); // sum and print directly
		echo "</tr>";

		//in array // this function checks that the value is present in array or not 
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - in_()</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,32,43,34);
			$check = in_array(34, $a);	// checks 34 is present in array "a" or not	
			echo "<td colspan='4'> $check </td>";
		//	echo array_product($a); // sum and print directly
		echo "</tr>";

		//Array_random // picks random value from the array 
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - array_rand()</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,32,43,34);
			$random = array_rand($a);
			echo "<td colspan='4'> the random value from the array is $a[$random]</td>";
		//	echo array_product($a); // sum and print directly
		echo "</tr>";

		//Array_search // search the value
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - array_search()</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,32,43,34,32,12);
			$check = array_search(43,$a);
			echo "<td colspan='4'> the value present at index  $check</td>";
		//	echo array_product($a); // sum and print directly
		echo "</tr>";

		//Array_range //
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - arrayrange</td>";
		echo "</tr>";
		echo "<tr>";
			$a = range(12,15);
			foreach ($a as $key => $value) {
				echo "<td><b> $key</b> - $value </td>";	// this can also be done using select tag 
			}
		echo "</tr>";

		//key sort // aarange in ascending order 
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - key sort</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(
				2 => 12,
				1 => 15,
				"apple" => "red",
				"banana" => "yellow");
			ksort($a);
			foreach ($a as $key => $value) {
				echo "<td><b> $key</b> - $value </td>";
			}
		echo "</tr>";

		//reverse key sort // aarange in descending order 
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - key sort</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(
				2 => 12,
				1 => 15,
				"apple" => "red",
				"banana" => "yellow");
			krsort($a);
			foreach ($a as $key => $value) {
				echo "<td><b> $key</b> - $value </td>";
			}
		echo "</tr>";

		//Array_shuffle // it shuffle all values in the array 
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - arrayrange</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,34,56,15);
			shuffle($a);
			foreach ($a as $key => $value) {
				echo "<td> $value </td>";	 // 
			}
		echo "</tr>";

		//Array_key_exist //
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - array key exists</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(
				1 => 12,
				'a' =>65,
				"v" => 68,
				5 => 15);
			$check = array_key_exists('v', $a);
			echo "<td colspan='4'><b> $check key found  </td>";
		echo "</tr>";

		//end // return last value of array
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - end()</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array(12,65,68,15);
			$end = end($a);
			echo "<td colspan='4'> the last element of the array is $end </td>";
		echo "</tr>";

		//implode 
		echo "<tr>";
			echo "<td colspan='4' align ='center'>function - implode()</td>";
		echo "</tr>";
		echo "<tr>";
			$a = array("i","like","php","language");
			$mystring = implode(" ", $a);
			echo "<td colspan='4'>$mystring </td>";
		echo "</tr>";

	echo "</table>";
?>
