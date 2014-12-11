        <?php 
        require_once('includes/predispatch.php');
        require_once('includes/header.php');
        
        //connects the database
        require('includes/db.php');
        require_once('classes/film.class.php');
        
        //queries all the films that exist within the database
        $films = $db->query("SELECT * FROM `film`");
        ?>
        <div id="content">
            <div class="row">
                <div class="list-group row text-left">
                    <!-- fetches the films from the database-->
                <?php while($film = $films->fetch_object('Film')): ?>
                    <div class="col-md-3">
            
                            <a href="show-film.php?id=<?=$film->id?>" <class="list-group-item">                
                                <!-- obtains the films from database, providing the id and the name-->
                                <p class="list-group-item-text overflow"><?=$film->name?></p>
    
                               <?php echo "<img style= 'height:200px; width=200px' src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/".$film->id."_small.jpg'>" ?>
                                
                                <br>
                            </a>
                                <br>
                    </div>   
                    <?php endwhile?>  
                </div>
    
            </div>
        
        </div>
        
        <?php require_once('includes/footer.php'); ?> 