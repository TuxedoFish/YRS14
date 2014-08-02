<?php
$companyname="";
if((isset($_GET['companyname']))) {
	$companyname = $_GET['companyname'];
	$companyname=str_replace('"', "", $companyname);
	$companyname=str_replace("'", "", $companyname);
}
$dbhost = 'localhost';
$dbname = 'yrs14';
$dbuser = 'harry';
$dbpass = 'geanstealer2599APPLE';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Error " . mysqli_error($link));

$query = "SELECT Rating FROM people WHERE Place='" . $companyname . "'" or die("Error in the consult.." . mysqli_error($link)); 

$result = $link->query($query); 

while($row = $result->fetch_array())
  {
  echo $row['Rating'] . " ";
  echo "<br />";
  }
?>