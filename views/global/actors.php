<div class="container">
   <h1>Liste des acteurs </h1>
 
   <?php
        for ($i = 0; $i < count($actors); $i++) {
        
    ?>

    <div class="actor_in_list" >
       
        <?php if($i === 0){ ?>
                <img  class="actor_picture_first" src="<?= './'.$actors[$i]->actors_picture ?>" >

                <p>Nom:  <?= $actors[$i]->actors_name ?> </p> 
                
                <p>Rôle: <?= $actors[$i]->actors_role ?></p>
                
                <p>Films:  <?= $actors[$i]->name ?> </p> 
                       
        <?php } ?>
            
        <?php if($i !== 0 && $actors[$i]->actors_name !== $actors[$i-1]->actors_name) { ?>
           
            
            <img  class="actor_picture" src="<?= './'. $actors[$i]->actors_picture ?>" >

            <p>Nom:  <?= $actors[$i]->actors_name ?> </p> 
                
            <p>Rôle: <?= $actors[$i]->actors_role ?></p>
                
            <p>Films:  <?= $actors[$i]->name ?> </p> 
                
                                    
        <?php } ?>     
        
        <?php if($i !== 0 && $actors[$i]->actors_name === $actors[$i-1]->actors_name)  {?>
            <p>  <?= $actors[$i]->name ?> </p> 
        <?php } ?> 

       
    </div>   
    <?php
        }
    ?>