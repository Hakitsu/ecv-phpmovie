<div class="container">
    <h1>Administration du site</h1>
    <div class= "linkContainer">
        <a href="add_movie"  class="linkToAdmin">>Ajouter un film</a>
        <form action="update_movie" method="post">
        <select name="id_movie_update" id="id_movie_update">
            <option value=""></option>
            <?php
            foreach ($movies as $movie) {
            ?>
                <option value="<?= $movie->id ?>"><?= $movie->name ?></option>
            <?php
                }
            ?>
        </select>
        <input type="submit" value="Modifier ce film"></input>
        </form>
        <form action="delete_movie" method="post">
            <select name="id_movie_delete" id="id_movie_delete">
                <option value=""></option>
                <?php
                foreach ($movies as $movie) {
                ?>
                    <option value="<?= $movie->id ?>"><?= $movie->name ?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Supprimer ce film"></input>
        </form>
    </div>
</div>