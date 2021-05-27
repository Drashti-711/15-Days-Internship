<?php
	if (isset($_POST['submit'])) {
	$name = $_POST['txt1'];
	$sem = $_POST['txt2'];
	$maths = $_POST['txt3'];
	$sci = $_POST['txt4'];
	$hindi = $_POST['txt5'];
	$english = $_POST['txt6'];
	$guj = $_POST['txt7'];
	$sum = $maths + $sci + $hindi + $english + $guj;
	$totalmark = 500;
	$per = ($sum*100)/500;
	//table created
	echo "<table border='1'>";
		echo "<tr>";
			echo "<td colspan='2'>Result</td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Name  </td>";
			echo "<td>$name </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Sem  </td>";
			echo "<td>$sem </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Maths  </td>";
			echo "<td>$maths </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Science  </td>";
			echo "<td>$sci </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Hindi  </td>";
			echo "<td>$hindi </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>English  </td>";
			echo "<td>$english </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Gujarati  </td>";
			echo "<td>$guj </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Total </td>";
			echo "<td>$sum </td>";
		echo "<tr>";
		echo "<tr>";
			echo "<td>Percentage </td>";
			echo "<td>$per </td>";
		echo "<tr>";
	echo "</table>";
	//check pass fail
		if ($per>80 && $per<100) {
			echo "<font color='blue' size='5'>Congratulations !! You have passed with distinction..!</font>";
		}
		//elsif ($per>60 && $per<80) {
		//	echo "Congratulations !! You have passed with second class";
		//}
		elseif ($per>60 && $per<80) {
			echo "<font color='green' size='5'>Congratulations !! You have passed with third class..!<>/font";
		}
		elseif ($per>45 && $per<60) {
			echo "<font color='darkviolet' size='5'>Congratulations !! You have passed with third class..!</font>";
		}
		else{
			echo "<font color='red' size='5'>You failed in this semester! </font>";
		}
	}
?>