<?php

	for ($i = 1; $i < 10; $i = $i + 1) {
		if ($i == 3 || ($i % 2 == 0)) continue;
		if ($i == 7) break;
		print $i;
		print "<br>";
	}

?>
