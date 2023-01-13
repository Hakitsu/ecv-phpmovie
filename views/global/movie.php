<div class="container">

    <h1>
        <?= $movie[0]->name ?>
    </h1>
    
    <h3>Résumé: </h3>
    <!-- <p>
        <?= $movie[0]->story ?>
    </p> -->

    

    <img  class="landscape" src="<?= $movie[0]->picture_banner ?>" >

    <?php echo '<iframe width="560" height="315" src="' . $movie[0]->trailer . '" frameborder="0" allowfullscreen></iframe>';
    ?>

    <?php
        foreach ($movie as $m) {
    ?>


    
    
    <!-- <?php var_dump($m) ?> -->
                          
                     
    <?php
        }
    ?>
   

                     
   
</div>