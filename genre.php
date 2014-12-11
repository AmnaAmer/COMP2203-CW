        <?php 
        require_once('includes/predispatch.php');
        require_once('includes/header.php');
    
        //connect to the database
        require('includes/db.php');
       //Gets the genre class
        require_once('classes/genre.class.php');
        
        //queries all the genres that exist within the database
        $genres = $db->query("SELECT * FROM `genre`");
       
        ?>
    
        <div >
           <div  class="row">
                <div class="list-group row text-left">
                        <div class="col-md-12">
                                <!--fetches the different genres that exists within the data -->
                              <?php  while($genre = $genres->fetch_object('Genre')):   ?>
                            <a href="show-genre.php?id=<?=$genre->id?>" class="list-group-item"> 
                                <!--Provides all the genre's names -->              
                                <p class="list-group-item-text"><?=$genre->name?></p>
                            </a>
                    <?php endwhile; ?>
                    </div>  
                </div>
            </div>
        </div>
        
        <?php require_once('includes/footer.php'); ?> 