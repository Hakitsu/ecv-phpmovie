<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini MVC Sample</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/style/main.css">
</head>

<body class="<?= isset($_GET['id']) ? 'brick' : '' ?>">
<nav >
    <div>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="./movies">Les films</a></li>
            <li><a href="./actors">Les acteurs</a></li>
            <li><a href="./galery">Galerie d'images</a></li>
        </ul>
        <a  href="/">Connexion</a>
        <!-- <ul class="nav nav-pills">
            <?php
            if (\utils\SessionHelpers::isLogin()) {
                echo '<li class="nav-item"><a href="./me" class="nav-link">Mon compte</a></li>';
            }
            ?>
            <li class="nav-item"><a href="./about" class="nav-link">À propos</a></li>
            
        </ul> -->

       
    </div>

   
</nav>