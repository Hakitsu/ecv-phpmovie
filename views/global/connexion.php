<div class="connexion">
    <div class="containerIllustrationConnexion">
        <img src="public/assets/img/movie/lorPicture1.jpg" class="illustrationConnexion"/>
    </div>

    <div class="cardConnexion">
        <form action="check_connexion" method="post">
            <h1>Connexion </h1>

            <div class="inputConnexionContainer">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="username" placeholder="Quentin">
            </div>

            <div class="inputConnexionContainer">
                <label for="msg">Mot de passe :</label>
                <input type="password" id="passsword" name="password" placeholder="motdepasse1234"></input>
                    
                <input type="submit" value="Je me connecte" class="submitButton"  >
            </div>           
        </form>

        <div class="registerLink">
            <a href="register">créer un compte</a>
        </div>
    </div>
</div>
