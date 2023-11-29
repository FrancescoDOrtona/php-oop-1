<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Serie.php";



$movie1 = new Movie('./img/rambo.jpg', 'Rambo: First Blood', 'EN', 4, 340000, 150);
$movie2 = new Movie('./img/avatar.jpg', 'Avatar', 'IT', 5, 700000, 190);
$movie3 = new Movie('./img/pierino.avif', 'Pierino Colpisce Ancora', 'IT', 3, 120000, 80);
$movie4 = new Movie('./img/creed.jpg', 'Creed', 'EN', 4, 450000, 130);
$movie5 = new Movie('./img/rampage.jpg', 'Rampage', 'EN', 4, 260000, 120);
$movie6 = new Movie('./img/harry-2.jpg', 'Harry Potter 2', 'IT', 5, 1200000, 170);

$serie1 = new Serie('./img/altered.webp', 'Altered Carbon', 'EN', 3, 1);
$serie2 = new Serie('./img/dexter.jpg', 'Dexter', 'EN', 4, 2);
$serie3 = new Serie('./img/mare-fuori.webp', 'Mare Fuori', 'IT', 2, 1);
$serie4 = new Serie('./img/orange.webp', 'Orange is The New Black', 'EN', 5, 3);
$serie5 = new Serie('./img/the-boys.jpg', 'The Boys', 'EN', 5, 2);
$serie6 = new Serie('./img/upload.jpg', 'Upload', 'IT', 3, 1);

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $movie6,
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5,
    $serie6
];

// var_dump($series)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bfd5138bab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/app.css">
    <title>Film Production</title>
</head>

<body>
    <header class="container page-header">
        <h1>FranFlix</h1>
        <p>A new webapp where to watch all your favorites movies.</p>
    </header>
    <main>
        <section class="container movies">
            <div class="section-title">
                <h2>Movies</h2>
            </div>
            <div class="grid">
                <?php foreach ($movies as $movie) { ?>
                    <div class="movie">
                        <img src="<?= $movie->img ?>" alt="">
                        <h3><?= $movie->title ?></h3>
                        <div class="movie__description">
                            <p><?= $movie->language ?></p>
                            <?php if($movie instanceof Movie) {?>
                                <p>Profits: <?= $movie->getProfit() ?> &euro;</p>
                                <p>Duration: <?= $movie->getDuration() ?> min</p>
                            <?php } else {?>
                                <p>Season: <?= $movie->getSeason() ?></p>
                            <?php } ?>
                            <p>
                                <?php for ($i = 0; $i < $movie->rating; $i++) { ?>
                                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                                <?php } ?>
                            </p>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </section>
    </main>
</body>

</html>