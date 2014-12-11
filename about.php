		<?php 
		require_once('includes/predispatch.php');
		require_once('includes/header.php');
		require('includes/db.php');

		//gets the film class
		require_once('classes/film.class.php');
		
		// query to select from the film table a random film 
		$films = $db->query("SELECT * FROM `film` ORDER BY RAND() LIMIT 1");
		?>
		
		<?php
			// Queries the film table for latest films
			$filmposter = $db->query("SELECT * FROM `film` ORDER BY theatricalRelease DESC LIMIT 5"); 
		?>
		
		 <?php
		    if($filmposter->num_rows > 0){
		
		        while($poster = $filmposter -> fetch_assoc()){
		          $id_film[] = $poster ['id'];
		        }
		    }
		
		  ?>
			


			<!--Welcome Message--> 
			<div id="course-list" class="row" >
				<div class="list-group row text-center" style="color:#F0F8FF;">
				<p>Bring a Smile to somebody's face with Red Carpet Films</p>
				<p>Red Carpet Films provides all the facts you need for a range of films. Share your thoughts and find out what others think!</p>
				<p>Get lost in a world where anything is possible... from guardians who protect the galaxy to a winter wonderland in a wardrobe.</p>
				<p>IT'S FREE AND SIMPLE!</p>

			<?php
					// Film of the click; random film presented each time it is refreshed
		            while($film = $films->fetch_object('Film')): 
		                include('partials/filmotd.php');?>
						 <?php endwhile; ?>	 
				</div>
			</div>

		<?php require_once('includes/footer.php'); ?>