<div class="container">
   
    <h1>Galerie d'images</h1>

    <?php foreach ($galery as $g) { ?>
        <img  class="picture_galery" src="<?= './'.$g->link_picture ?>" >

    <?php } ?>
            
</div>