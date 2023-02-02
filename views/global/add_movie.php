<div class="containerFormulaire">
<h1>Formulaire de création d'un film</h1>
<form action="create_movie" method="post">
    <div class="inputConnexionContainer">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" placeholder="">
    </div>

    <div class="inputConnexionContainer">
        <label for="date">date :</label>
        <input type="date" id="date" name="date" placeholder=""></input>
    </div>
    

    <div class="inputConnexionContainer">
        <label for="synopsis">Synopsis :</label>
        <input type="text" id="synopsis" name="synopsis" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="picture_movie">Lien url photo :</label>
        <input type="text" id="picture_movie" name="picture_movie" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="picture_banner">Lien url bannanière :</label>
        <input type="text" id="picture_banner" name="picture_banner" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="trailer">Lien url bande-annonce :</label>
        <input type="text" id="trailer" name="trailer" placeholder=""></input>
    </div>

    <div class="inputConnexionContainer">
        <label for="story">Histoire :</label>
        <textarea id="story" name="story" placeholder=""></textarea>
    </div>

    <div class="inputConnexionContainer">
        <input type="submit" value="Ajouter le film" class="submitButton"  >
    </div>
</form>
</div>