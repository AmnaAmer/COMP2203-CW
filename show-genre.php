	<?php
	require_once('includes/predispatch.php');
	require_once('includes/header.php');
	
	// get the database connection
	require('includes/db.php');
	// get the genre and film classes
	require_once('classes/genre.class.php');
	require_once('classes/film.class.php');
	?>
	<!-- main content of webpage-->
	<div id="content" class="row">
		<?php
		try{
			// check that the ID exists and it is the correct type
			// Throwing an expception ensures messages appears if there is no connection 
			if(!isset($_GET['id']) OR empty($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('No connection');
			
			// get the genre we want to use
			// ensuring we escape the GET string
			$genre = $db->query('SELECT * FROM genre WHERE id = '.$db->real_escape_string($_GET['id']))->fetch_object('genre');;
			
			// get all of the films by a specific genre id 
			$films = $db->query('SELECT * FROM film WHERE genre_id= '.$db->real_escape_string($_GET['id']));
			
			?>
	
			<!-- Film's list -->
			<div id="film-list" class="row">
				<?php while($film = $films->fetch_object("Film")): ?>
					<div class="film-item">
						<div class="row">
							<div class="col-md-6"><h3><?=$film->name?></h3></div>
							<!-- Button links to info.php, where more information regarding the film is stored -->
							<div class="col-md-4 pull-right"><a href="info.php?id=<?=$film->id?>" class="btn btn-primary pull-right">Find out more!</a></div>
						</div>
							
						<div class="row">
							<!-- Displays the poster of the films-->
							<?php echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$film->id."_small.jpg'>" ?>
							<!-- Take decription and film classification from the database and displays them on the webpage -->
							<div class="col-md-6"><strong><?=$film->description?></strong></div>
							<div class="col-md-4 pull-right"><p class="film-classification pull-right"><strong><?=$film->classification?></strong><p></div>
						</div>
					</div>
				<?php endwhile; ?>
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