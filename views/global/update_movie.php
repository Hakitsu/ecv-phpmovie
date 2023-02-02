<form action="update_action" method="post">
    <input type="hidden" name="id" value="<?=$movies[0]->id ?>">
    <div class="inputConnexionContainer">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="<?=$movies[0]->name ?>" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="date">date :</label>
        <input type="date" id="date" name="date" value="<?=$movies[0]->date?>" placeholder=""></input>
    </div>
    

    <div class="inputConnexionContainer">
        <label for="synopsis">Synopsis :</label>
        <textarea id="synopsis" name="synopsis" placeholder=""><?=$movies[0]->synospsis?></textarea>
    </div>

    <div class="inputConnexionContainer">
        <label for="picture_movie">Lien url photo :</label>
        <input type="text" id="picture_movie" name="picture_movie" value="<?=$movies[0]->picture_movie?>" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="picture_banner">Lien url bannanière :</label>
        <input type="text" id="picture_banner" name="picture_banner" value="<?=$movies[0]->picture_banner?>" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="trailer">Lien url bande-annonce :</label>
        <input type="text" id="trailer" name="trailer" value="<?=$movies[0]->trailer?>" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="story">Histoire :</label>
        <textarea id="story" name="story" placeholder=""><?=$movies[0]->story?></textarea>
    </div>

    <div class="inputConnexionContainer">
        <input type="submit" value="Modifier le film" class="submitButton"  >
    </div>
</form>