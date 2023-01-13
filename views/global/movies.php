<div class="container">
    <h1>La trilogie du Seigneur des Anneaux</h1>      
    <p>La saga comporte 3 films, cliquez sur l'un d'eux pour en découvrir un peu plus sur le Seigneur des Anneaux. </p>

    <?php
        foreach ($movies as $movie) {
    ?>
    
    <a href="./movies/movie?id=<?= $movie->id ?>" >
                               
        <div class="containerMovie">
            <div class="containerImageDesktop">
                <img class="imgMovies" src="public/assets/landscape2.jpg" >
            </div>
            <div class="generalInformations">
                <h3 class="title"> 
                    <?= $movie->name ?> 
                </h3>
                <div class="containerImageMobile">
                    <img class="imgMovies" src="public/assets/landscape2.jpg" >
                </div>
                <span> 
                    date de sortie : <?= $movie->date ?>
                </span>

                <p class="synopsis">
                <span class="synopsisTitle">
                        synopsis:
                    </span>
                        <?= $movie->synospsis ?>
                </p >
            </div>
            
        </div>
    </a>
                          
                     
    <?php
        }
    ?>
</div>