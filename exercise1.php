<?php

	$break = "<br>";
	
	print $break . "Approach Number 1: Notice use of concatenation." . $break . $break;

	print "My name is James Marcus." . $break;
	print "My birthday is January 25, 1961." . $break;
	print "My favorite color is blue." . $break;
	
?>

<?php

	$break = "<br>";
	
	print $break . $break . 
		"Approach Number 2: Notice use of embedding variables in strings." . 
		$break . $break;

	
	$name = "James Marcus";
	$birthdate = "January 26, 1961";
	$favorite_color = "blue";
	
	print "My name is $name. $break";
	print "My birthday is $birthdate.$break";
	print "My favorite color is $favorite_color." . $break;
	
?>