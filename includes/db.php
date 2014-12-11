
<?php

// database credentials
$dbHost		 = 'comp2203.ecs.soton.ac.uk';
$dbUsername	 = 'comp2203-cw-1415';
$dbPassword	 = '8VMMx2m80YsN4t3T2Oc28hO38F49NC';
$dbSchema	 = 'comp2203-cw-1415';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbSchema);

// checks if the database connection failed
if($db->connect_errno){
	echo "Failed to connect to MySQL: " . $db->connect_error;
}