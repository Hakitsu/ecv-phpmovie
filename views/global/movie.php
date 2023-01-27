<?php
    $actors = array(
        'name' => array(),
        'role' => array(),
        'picture' => array()
    );
    $pictures_link = array();
    $users = array();
    $comments = array(
        'id_user' => array(),
        'comment' => array()
    );
    foreach ($movie as $param) {
        $actors_name = $param->actors_name;
        $actors_picture = $param->actors_picture;
        $actors_role = $param->actors_role;
        if (!in_array($actors_name,$actors['name'])) {
            array_push($actors['name'],$actors_name);
        }
        if (!in_array($actors_role,$actors['role'])) {
            array_push($actors['role'],$actors_role);
        }
        if (!in_array($actors_picture,$actors['picture'])) {
            array_push($actors['picture'],$actors_picture);
        }

        $picture_link = $param->link_picture;
        if (!in_array($picture_link,$pictures_link)) {
            array_push($pictures_link,$picture_link);
        }

        $user = $param->username;
        if (!in_array($user,$users)) {
            array_push($users,$user);
        }

        $user_comment = $param->comment;
        if (!in_array($user_comment,$comments['comment'])) {
            array_push($comments['id_user'],$param->id_users);
            array_push($comments['comment'],$user_comment);
        }
    }
?>
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
        for ($i=0; $i < count($actors['name']); $i++) { 
        ?>
            <div class="actor">
                <img  class="actor_picture_movie" src="<?= '../'.$actors['picture'][$i] ?>" >
                <p>Acteur:  <?= $actors['name'][$i] ?> </br> Rôle: <?= $actors['role'][$i] ?> </p>

            </div>
        <?php } ?>
    </div> 

    <div class="container_picture">
        <?php
            for ($i=0; $i < count($pictures_link); $i++) {
        ?>
            <div class="movie">
                <img  class="actor_picture_movie" src="<?= '../'.$pictures_link[$i] ?>" >
            </div>

        <?php
            }
        ?>
    </div>

    <div class="container_picture">
        <?php
            for ($i=0; $i < count($comments['comment']); $i++) {
        ?>
            <div class="actor">
                <div class=""><?php echo $comments['comment'][$i] ?></div>
            </div>

        <?php
            }
        ?>
    </div>
</div>
    
    
    
                          
                     
   
   

                     
   
</div>