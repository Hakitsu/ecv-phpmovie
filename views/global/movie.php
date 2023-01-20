<div class="container">
    
    <h1>    
        <?= $movie[0]->name ?>
    </h1>
    
    <img  class="banner" src="<?= '../'.$movie[0]->picture_banner ?>" >
    <!-- <?php echo '<iframe class="bo" width="560" height="315" src="' . $movie[0]->trailer . '" frameborder="0" allowfullscreen></iframe>';
    ?> -->
    <h3>Résumé: </h3>
    <p>
        <?= $movie[0]->story ?>
    </p>

    

    <div class="actors">

    <h3>Liste des acteurs </h3>

    <div class="container_actors" >
        <?php
            foreach ($movie as $m) {
        ?>
            <div class="actor">
                <img  class="actor_picture_movie" src="<?= '../'.$m->actors_picture ?>" >
                <p>Acteur:  <?= $m->actors_name ?> </br> Rôle: <?= $m->actors_role ?> </p>

            </div>
        <?php } ?>
    </div>
</div>
    
    
    
                          
                     
   
   

                     
   
</div>