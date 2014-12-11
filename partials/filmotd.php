	<div class="col-md-12">
					<a href="show-film.php?id=<?=$film->id?>" class="list-group-item" style="color:red; background-color:#000033; border:1px solid  #000033; font-size:16px;">
						
						<!-- Displays name and release data of film -->
						<p class="list-group-item-text"> Film of the click: <?=$film->name?></p>
						<p class="list-group-item-text"> Theatrical Release Date: <?=$film->theatricalRelease?></p>

						<!-- Displayed the poster of the random film -->
						<?php echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$film->id."_medium.jpg'>" ?>
					</a>
	</div>