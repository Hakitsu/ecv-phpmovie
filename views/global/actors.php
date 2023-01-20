<div class="container">
   <h1>Liste des acteurs </h1>
 
   <?php
        for ($i = 0; $i < count($actors); $i++) {
        
    ?>

    <div class="actor_in_list" >
       
        <?php if($i === 0){ ?>
                <img  class="actor_picture_first" src="<?= './'.$actors[$i]->actors_picture ?>" >

                <p class="text_actor"> 
                    <span class="movieTitle">Nom: </span> 
                    <?= $actors[$i]->actors_name ?> 
                </p> 
                
                
                <p class="text_actor">  
                    <span class="movieTitle">Rôle: </span> 
                    <?= $actors[$i]->actors_role ?>
                </p>
                
                <span class="movieTitlemovie">Films: </span>
                <p class="text_actor"> 
                  -  <?= $actors[$i]->name ?> 
                </p> 
                       
        <?php } ?>
            
        <?php if($i !== 0 && $actors[$i]->actors_name !== $actors[$i-1]->actors_name) { ?>
           
            
            <img  class="actor_picture" src="<?= './'. $actors[$i]->actors_picture ?>" >

            <p class="text_actor"> 
                <span class="movieTitle">Nom: </span> 
                <?= $actors[$i]->actors_name ?> 
            </p> 
            
            <p class="text_actor">  
                <span class="movieTitle">Rôle: </span> 
                <?= $actors[$i]->actors_role ?>
            </p>
             
            <span class="movieTitlemovie">Films: </span>
            <p class="text_actor"> 
                - <?= $actors[$i]->name ?> 
            </p> 
                
                                    
        <?php } ?>     
        
        <?php if($i !== 0 && $actors[$i]->actors_name === $actors[$i-1]->actors_name)  {?>
            <p class="text_actor">  - <?= $actors[$i]->name ?> </p> 
        <?php } ?> 

       
    </div>   
    <?php
        }
    ?>