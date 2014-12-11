	<?php
	require_once('includes/predispatch.php');
	require_once('includes/header.php');
	require('includes/db.php');
	// get the film and review classes
	require_once('classes/film.class.php');
	require_once('classes/review.class.php');
	?>
	
	<!-- main content -->
	<div id="content" class="row">

		<?php
		try{
			// check that the ID exists and it is the correct type
			// Throwing an expception ensures messages appears if there is no connection
			if(!isset($_GET['id']) OR empty($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('No connection found');
			
			// get the genre we want to use
			// ensuring we escape the GET string
			$film = $db->query('SELECT * FROM film WHERE id = '.$db->real_escape_string($_GET['id']))->fetch_object('Film');
			
			// get a film using a specific ID
			$films = $db->query('SELECT * FROM film WHERE id= '.$db->real_escape_string($_GET['id']));
			?>
				<!--Films List -->			
				<div id="film-list" class="row">
				
				<?php while($film = $films->fetch_object("Film")): ?>
					<?php $rtID = $film->rt_id; ?>
					<div class="film-item">
						<div class="row">
							<div class="col-md-8 font-weight:bold" ><h3><?=$film->name?></h3></div>
							<div class="col-md-4 pull-right"><a href="filminfo.php?id=<?=$film->id?>" class="btn btn-primary pull-right" id="button">Find out more?</a></div>
						</div>
							
						<div class="row">
							  <?php echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$film->id."_medium.jpg'>" ?>
							<div class="col-md-8"><strong><?=$film->description?></strong></div>
							
						</div>
					</div>

				<?php endwhile; ?>
			</div>


						
	</div>
</div>

<div style="font-size: 14px; font-weight:bold;">
			<!-- Obtains up to 10 reviews from the database-->
			<?php $reviews = $db->query('SELECT * FROM review WHERE film_id= '.$db->real_escape_string($_GET['id']).' LIMIT 10'); ?>
				<h3>Current Thoughts</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<!-- Heading included within the review table -->
							<th>Reviewer</th>
							<th>Thoughts</th>
							<th>Liked or Disliked</th>
						</tr>
					</thead>
					<body>
						<!-- Fetches the Reviews from database -->
						<?php while($review = $reviews->fetch_object("Review")): ?>
							<tr>
								<!--Specifies which data I want from the data-->
								<td><?=$review->reviewer?></td>
								<td><?=$review->comment?></td>
								<td>
									<?php
									// provide a liked or disliked symbol depending on the results
									if($review->liked == 1){
									echo ("<span class=' glyphicon glyphicon-ok'></span>");
									} else{
										echo ("<span class='glyphicon glyphicon-remove'></span>");
									}?>

								</td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>

<div class="row">
			<!--Adding a review form-->
			<h3>Share your opinion!</h3>

			<!--User can enter thier personal details and thoughts regarding a specific film -->
			<form action="process-review.php" method="post">
			<input type="hidden" name="film_id" value="<?=$_GET['id']?>">
			Name: <input type="text" name="reviewer">
			Thoughts: <input type="text" name="comment">
			Like?:<input type="checkbox" name="like" value= "1">
			Dislike?:<input type="checkbox" name="like" value= "0">
			<input type="submit" value="Submit">
			</form>

		</div>

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