<?php
	if((isset($_GET['area']))) {
		$area = $_GET['area'];	
		$link="http://ratings.food.gov.uk/search/^/" . $area . "/json";
		$json = file_get_contents($link);
		echo($json);
	} else if((isset($_GET['name']))) {
		$name = $_GET['name'];
		$link="http://ratings.food.gov.uk/search/" . $name . "/json";
		$json = file_get_contents($link);
		echo($json);		
	} else {
		echo 'no paramaters were given';
	}
?>