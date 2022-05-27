<?php
include './db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DISCHI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<header>
    <img class="py-2" src="./assets/img/pngwing.png" alt="">
</header>   
<main>
    <div class="container px-0">
        <div class="row m-0 ps-5">
            
                <?php foreach ($discs as $key => $response) : ?>
                    <?php foreach ($response as $element) : ?>

                        <div class="col-2 m-3 text-center p-2">
                            <img src="<?= $element['poster'] ?>" alt="album cover">
                            <h5 class="text-uppercase text-light pt-2"><?= $element['title'] ?></h5>
                            <p> <?= $element['author'] ?> <br> <?= $element['year'] ?></p>
                        </div>

                    <?php endforeach ?>
                <?php endforeach ?>
    
        </div>
    </div>
</main>

    







</body>
</html>