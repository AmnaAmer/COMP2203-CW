	<?php
	require_once('includes/predispatch.php');
	require_once('includes/header.php');
	
	// get the database connection
	require('includes/db.php');
	// get the car and bid classes
	require_once('classes/genre.class.php');
	require_once('classes/film.class.php');
	
	?>
	
	<!-- main content -->
	<div id="content" class="row">
		
		
		<?php
		
		try{
			// check that the ID exists and it is the correct type
			if(!isset($_GET['id']) OR empty($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('no connection');
			
			// get the film we are dealing with through the ID
			// ensuring we escape the GET string
			$film = $db->query('SELECT * FROM film WHERE id = '.$db->real_escape_string($_GET['id']))->fetch_object('Film');
			?>

			
			<h2>Film - <?=$film->name?> (<?=$film->name?>)</h2>
		
			<div class="row">
				
				<div>
					<!--Information about the film obtained and displayed--> 
					<dl class="dl-horizontal">
						<dt>What its about?</dt>
							<dd><?=$film->description?></dd>
						<dt>Runtime (Minutes)</dt>
							<dd><?=$film->runtime?></dd>
						<dt>Director</dt>
							<dd><?=$film->director?></dd>
						<dt>Release Date</dt>
							<dd><?=$film->theatricalRelease?></dd>
						<dt>Dvd Release</dt>
							<dd><?=$film->dvdRelease?></dd>
					</dl>
				</div>
				
				</div> 
					<!-- Poster of the film displayed-->
					<div style='text-align:right;'><?php echo "<img id=img1 src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$film->id."_medium.jpg'>" ?>			
		
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