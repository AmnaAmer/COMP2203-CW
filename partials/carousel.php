	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <ol class="carousel-indicators">
		      	<!-- Collect 5 posters from the database to incorporate into the carousel -->
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		        <li data-target="#myCarousel" data-slide-to="3"></li>
		        <li data-target="#myCarousel" data-slide-to="4"></li>
		      </ol>
		      <div class="carousel-inner" role="listbox" style="centre;">
		        <div class="item active">
		        	<div style='text-align:center;'>
		        		<!-- Displays the medium sized posters using the ID (0-4) -->
		                    <?php 
		                    echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$id_film[0]."_medium.jpg'>"
		                    ?>
		             </div>
		          </div>
		
		          <div class="item">
	
		          	<div style='text-align:center;'>
		                    <?php 
		                    echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$id_film[1]."_medium.jpg'>"
		                    ?>
		               </div>
		          </div>
		
		
		          <div class="item">
		          	<div style='text-align:center;'>
		                    <?php 
		                    echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$id_film[2]."_medium.jpg'>"
		                    ?>
		             </div>
		          </div>
		
		            <div class="item">
		            	<div style='text-align:center;'>
		                    <?php 
		                    echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$id_film[3]."_medium.jpg'>"
		                    ?>
		                 </div>
		          </div>
		
		            <div class="item">
		            	<div style='text-align:center;'>
		                    <?php 
		                    echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$id_film[4]."_medium.jpg'>"
		                    ?>
		                </div>
		          </div>


		       <!-- Indicators allowing using to manually move the carasoul left or right-->
		      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		      </a>
		      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		      </a>
		    </div>