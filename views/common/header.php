<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini MVC Sample</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fanwood+Text:ital@1&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/style/main.css">
    <link rel="stylesheet" href="./public/style/home.css">

</head>

<body class="<?= isset($_GET['id']) ? 'brick' : '' ?>">

<div class="header">  
    <ul class="nav">
        <li><a href="./">Accueil</a></li>
        <li><a href="./movies">Les films</a></li>
        <li><a href="./actors">Les acteurs</a></li>            <li><a href="./galery">Galerie d'images</a></li>
    </ul> 
</div>