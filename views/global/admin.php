<?php
    if (!isset($_SESSION['role']) || $_SESSION['role'] != 'Admin') {
        header('Location: ./');
    }
?>

<div class="containerFormulaire">
    <h1>Administration du site</h1>
    <div class= "linkContainer">
        <a href="add_movie"  class="linkToAdmin">Ajouter un film</a>

        <h3 class="titleSelect">Sélectionne un film pour pouvoir le modifier </h3>
        <form action="update_movie" method="post"  class="formAdmin">
            <select name="id_movie_update" id="id_movie_update" class="selectFilm">
                <option value="">Le Seigneur des Anneaux...</option>
                <?php
                foreach ($movies as $movie) {
                ?>
                <option value="<?= $movie->id ?>"><?= $movie->name ?></option>
                <?php
                    }
                ?>
            </select>
            <input type="submit" value="Modifier ce film" class="linkToAdmin"></input>
        </form>
        <h3 class="titleSelect">Sélectionne un film pour pouvoir le supprimer </h3>
        <form action="delete_movie" method="post" class="formAdmin">
            <select name="id_movie_delete" id="id_movie_delete" class="selectFilm" >
                <option value="">Le Seigneur des Anneaux...</option>
                <?php
                foreach ($movies as $movie) {
                ?>
                    <option value="<?= $movie->id ?>"><?= $movie->name ?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Supprimer ce film" class="linkToAdmin"></input>
        </form>
    </div>
</div>