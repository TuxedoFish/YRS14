<?php
if((isset($_GET['realrating']))) {
	$realrating = $_GET['realrating'];
}
if((isset($_GET['companyname']))) {
	$companyname = $_GET['companyname'];
}
if((isset($_GET['rating']))) {
	$rating = $_GET['rating'];
}
$dbhost = 'localhost';
$dbname = 'yrs14';
$dbuser = 'harry';
$dbpass = 'geanstealer2599APPLE';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

<<<SQL
INSERT INTO `yrs14`.`people` (`Rating`, `Place`, `realrating`) VALUES('$rating', '$companyname', '$realrating')")
SQL;
?>