<?php  
	$num=407;  
	$sum=0;  
	$x=$num;  
	while($x!=0)  
	{  
		$rem=$x%10;  
		$sum=$sum+$rem*$rem*$rem;  
		$x=$x/10;  
	}  
	if($num==$sum)  
	{  
		echo "Yes, $num it is an Armstrong number";  
	}  
	else  
	{  
		echo "No,$num it is not an armstrong number";  
	}  

?>