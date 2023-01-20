<div class="container">
   <h1>Liste des acteurs </h1>
 
   <?php
        for ($i = 0; $i < count($actors); $i++) {
        
    ?>

        <?php if($i === 0){ ?>

            <p>Nom:  <?= $actors[$i]->actors_name ?> </p> 
                
                <p>Rôle: <?= $actors[$i]->actors_role ?></p>
                
                <p>Films:  <?= $actors[$i]->name ?> </p> 
                
        <?php } ?>
            
        <?php if($i !== 0 && $actors[$i]->actors_name !== $actors[$i-1]->actors_name) { ?>
            <div>
                <!-- <img class="jackson" src="public/assets/jackson.jpg" >
            <img class="landscape2" src="<?= $actor->actors_picture ?>" >  -->
                <p>Nom:  <?= $actors[$i]->actors_name ?> </p> 
                
            <p>Rôle: <?= $actors[$i]->actors_role ?></p>
                
                <p>Films:  <?= $actors[$i]->name ?> </p> 
                
                
            </div>           
        <?php } ?>     
        
        <?php if($i !== 0 && $actors[$i]->actors_name === $actors[$i-1]->actors_name)  {?>
            <p>  <?= $actors[$i]->name ?> </p> 
        <?php } ?> 

        
           
    <?php
        }
    ?>
</div>