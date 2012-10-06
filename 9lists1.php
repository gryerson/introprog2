<?php

	$family = array('Lori', 'James', 'Olivia', 'Sami');
	
	$size = count($family);
	
	print "1.) This is my family:<br>";
	for ($i = 0; $i < $size; $i=$i+1) {
		print "family member: $i = $family[$i]<br>";
	}

	print "<br>2.) This is my family:<br>";
	foreach ($family as $var => $val) {
		print " family member: $var = $val<br>";
	}


	$myfamily = array("Mom"=>"Lori", "Dad"=>"James", "Kid1"=>"Olivia", "Kid2"=>"Sami");

	print "<br>3.) This is my family:<br>";
	foreach ($myfamily as $var => $val) {
		print "family member: $var = $val<br>";
	}

?>