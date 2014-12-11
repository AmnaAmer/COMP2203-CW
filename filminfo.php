<?php
require_once('includes/predispatch.php');
require_once('includes/header.php');

// Provides a database's connection
require('includes/db.php');
// Gets the genre and film classes
require_once('classes/genre.class.php');
require_once('classes/film.class.php');

?>

<!-- Main Content on the page -->
<div id="content" class="row">
	
	<?php
	
	try{
		// check that the ID exists and it is the correct type
		if(!isset($_GET['id']) OR empty($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('no connection');
		
		// get the films we are dealing with
		// ensuring we escape the GET string
		$film = $db->query('SELECT * FROM film WHERE id = '.$db->real_escape_string($_GET['id']))->fetch_object('Film');
		?>
			
		<div class="row">
			
			<div>
				<!-- Information obtained from the database and displayed -->
				<dl class="dl-horizontal">
					<dt>Runtime (Minutes)</dt>
						<dd><?=$film->runtime?></dd>
					<dt>Director</dt>
						<dd><?=$film->director?></dd>
					<dt>Classification</dt>
						<dd><?=$film->classification?></dd>
					<dt>Release Date</dt>
						<dd><?=$film->theatricalRelease?></dd>
					<dt>Dvd Release</dt>
						<dd><?=$film->dvdRelease?></dd>
				</dl>
			</div>
			
			</div> 
			
			
				
	<?php
	}
	catch(Exception $e){
		echo '<div class="alert alert-danger">';
		echo 	'<strong>Error!</strong>';
		echo 	'<p>'.$e->getMessage().'</p>';
		echo '</div>';
	}
	
	?>
	
</div>
<?php require_once('includes/footer.php'); ?>