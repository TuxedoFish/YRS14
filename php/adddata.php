<?php
$realrating="";
$rating="";
$companyname="";
if((isset($_GET['realrating']))) {
	$realrating = $_GET['realrating'];
}
if((isset($_GET['companyname']))) {
	$companyname = $_GET['companyname'];
	$companyname=str_replace('"', "", $companyname);
	$companyname=str_replace("'", "", $companyname);
}
if((isset($_GET['rating']))) {
	$rating = $_GET['rating'];
}
$dbhost = 'localhost';
$dbname = 'yrs14';
$dbuser = 'harry';
$dbpass = 'geanstealer2599APPLE';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Error " . mysqli_error($link)); 

$query = "INSERT INTO `yrs14`.`people` (`Rating`, `Place`, `realrating`) VALUES('" . $rating . "', '" . $companyname . "', '" . $realrating ."')" or die("Error in the consult.." . mysqli_error($link)); 

$result = $link->query($query); 
?>