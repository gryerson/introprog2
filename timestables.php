<?php

	/*	Write a short program to print a multiplication or times table. 
		Your program should output something like:
		Here is the 5’s table:
		5 x 1 = 5, etc.
	*/
	
	// Get the input
	$factor = 5;
	
	// Here we have format the output as we iterate through the loop.
	$break = '<br />';
	
	echo $break.$break;
	// Using a for loop
	
	for ($multiplier = 0; $multiplier <= 10; $multiplier++) {
		$product = $factor * $multiplier;
		echo "$factor * $multiplier = ".$product.$break;
	}
	
	echo $break.$break;
	// Using a while loop
	$multiplier = 0;
	while ($multiplier <= 10) {
		$product = $factor * $multiplier;
		echo "$factor * $multiplier = ".$product.$break;
		$multiplier += 1;
	}
	


	
	// For all the elementary school teachers out there:
	echo $break.$break;
	
	// Do all your multiplication tables
	$stop_point = 12;
	for ($factor = 0; $factor <= $stop_point; $factor = $factor + 1) {
	
		for ($multiplier = 0; $multiplier <= 10; $multiplier++) {
			$product = $factor * $multiplier;
			echo "$factor * $multiplier = ".$product.$break;
		}
		echo $break;

	}	


	
?>