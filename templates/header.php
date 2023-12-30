<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" <?= $BASE_URL ?>style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,200;1,300&display=swap" rel="stylesheet">
    <title>Viagem & Tecnologia</title>

</head>

<body>
    <header>
        <nav>
            <ul id="navbar">
                <li><a href="<?php $BASE_URL ?>" class="nav-link">Portifolio</a></li>
                <li><a href="<?php $BASE_URL ?>" class="nav-link">viagens</a></li>
                <li><a href="<?php $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
                <li><a href="<?php $BASE_URL ?>index.php" class="nav-link">Home</a></li>
            </ul>
        </nav>
    </header>
</body>