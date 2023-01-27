<?php
    $actors = array(
        'name' => array(),
        'role' => array(),
        'picture' => array()
    );
    $pictures_link = array();
    $users = array(
        'id_user' => array(),
        'username' => array()
    );
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
        if (!in_array($user,$users['username'])) {
            array_push($users['username'],$user);
            array_push($users['id_user'],count($users['username']));
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

    <h3>Galerie du film </h3>
    <div class="container_galery">
        <?php
            for ($i=0; $i < count($pictures_link); $i++) {
        ?>
            <div class="picture_galery_in_movie">
                <img  class="picture_galery_in_movie" src="<?= '../'.$pictures_link[$i] ?>" >
            </div>

        <?php
            }
        ?>
    </div>

    <h3>Commentaires (<?php echo count($comments['comment']);?>)</h3>
    <div class="comments">
        <?php
            for ($i=0; $i < count($comments['comment']); $i++) {
                if (in_array($comments['id_user'][$i],$users['id_user'])) {
                    $pos = array_search($comments['id_user'][$i],$users['id_user']);
                    $get_username = $users['username'][$pos];
                }
                
        ?>
            <div class="commentContainer">
                <p class="user"><?php echo $get_username ?> </p>
                <div class="comment">
                    <?php echo $comments['comment'][$i] ?>
                </div>
            </div>

        <?php
            }
        ?>

    </div>                 
   
</div>