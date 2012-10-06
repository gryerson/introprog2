<?php

	$DaysPerWeek = 7;
	$HoursPerDay = 24;
	$MinutesPerHour = 60;
	
	print "On Earth, the number of minutes per week is:<br>";
	print "$DaysPerWeek * $HoursPerDay * $MinutesPerHour = ";
	print $DaysPerWeek*$HoursPerDay*$MinutesPerHour;
	
	print "<br><br><br>But in the Bilky Way, the number of minutes per week is:<br>";
	
	$HoursPerDay = 26;
	print "$DaysPerWeek * $HoursPerDay * $MinutesPerHour = ";
	print $DaysPerWeek*$HoursPerDay*$MinutesPerHour;
	
?>
