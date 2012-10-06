<?php

	/*	A store is having a sale. They are giving 10% off purchases of $10 or lower 
		and 20% off purchases of greater that $10. 
		Write a short program that displays the discount (10% or 20%) and the final price.
		Use a variable for the item’s cost, run as many cases necessary to test the program.
	*/
	
	// get input - we will learn how to dynamically get input today!
	$cost_of_item = 2.0;   // change this as we test the program
	
	// initialize variables
	$discount = 0.0;		// to be determined
	$final_sale = 0.0;		// to be calculated
	
	// determine the discount
	if ($cost_of_item <= 10.0) {
		$discount = 10.0;
	}
	else {
		$discount = 20.0;
	}
	
	// Calculate the price
	$final_sale = $cost_of_item * ((100.0 - $discount) * 0.01);
	
	// output the results
	$break = "<br />";
	
	echo $break.$break;
	echo "The item cost is \$$cost_of_item.".$break;
	echo "The discount is $discount%.".$break;
	echo "The final sale price is \$$final_sale.";
	
	
	
	// The Anal Retentive among us are not satisfied with the above
	$cost_of_item_formatted = number_format($cost_of_item, 2);
	$final_sale_formatted = number_format($final_sale, 2);
	
	
	echo $break.$break;
	echo "For the Anal Retentive: $break";
	echo "The item cost is \$$cost_of_item_formatted.".$break;
	echo "The discount is $discount%.".$break;
	echo "The final sale price is \$$final_sale_formatted.";
	
	
	
?>
	
	