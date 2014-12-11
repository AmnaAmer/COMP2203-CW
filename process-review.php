<?php
// Connects to the database
 include('includes/db.php');

 //Sends users review to the database to be store
$film_id = $_POST['film_id'];
$reviewer = $_POST['reviewer'];
$comment = $_POST['comment'];

//print_r($car_id);
//print_r($name);
$db->query("INSERT INTO review (film_id,reviewer,comment) VALUES('$film_id', '$reviewer', '$comment'");

try
{
	//If Film ID is not included
	if(!isset($_POST['film_id']) OR empty($_POST['film_id']) OR !is_numeric($_POST['film_id']))
		//error will occure, preventing review from being saved on the database
		throw new Exception('The ID of the film must be specified. Please go back and try again.');
else
	{
		//If all information is enter, message appears noting success
		echo'Your thoughts have been noted. Thank You!';
	}
}
catch(Exception $e){
	echo '<div class="alert alert-danger">';
	echo 	'<strong>Error!</strong>';
	echo 	'<p>'.$e->getMessage().'</p>';
	echo '</div>';
}
	
	print_r($_POST);

?>