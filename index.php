<?php

require_once __DIR__ ."/Models/Movie.php";
require_once __DIR__ ."/Models/Serie.php";

class Production
{
    public $img;
    public $title;
    public $language;
    public $rating;
    public function __construct(string $img, string $title, string $language, int $rating)
    {
        $this->img = $img;
        $this->title = $title;
        $this->language = $language;
        $this->setRating($rating);
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating){
        if(is_numeric($rating) && $rating >= 0 && $rating <= 5){
                $this->rating = intval($rating);
        } else {
            $this->rating = 0;
            var_dump('Error: insert a valid number');
        }
    }

    public function printMovie()
    {
        echo $this->getTitle();
        echo '<br>';
        echo $this->getLanguage();
        echo '<br>';
        echo $this->getRating();
    }
}


$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $movie6
];

// var_dump($movies);

$series = [
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
                <?php
                foreach ($movies as $movie) {
                ?>
                    <div class="movie">
                        <img src="<?= $movie->img ?>" alt="">
                        <h3><?= $movie->title ?></h3>
                        <div class="movie__description">
                            <p><?= $movie->language ?></p>
                            <p>Profits: <?= $movie->getProfit() ?> &euro;</p>
                            <p>Duration: <?= $movie->getDuration()?> min</p>
                            <p>
                                <?php for ($i = 0; $i < $movie->rating; $i++) { ?>
                                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                                <?php } ?>
                            </p>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </section>
        <section class="container movies">
            <div class="section-title">
                <h2>Series</h2>
            </div>
            <div class="grid">
                <?php
                foreach ($series as $serie) {
                ?>
                    <div class="movie">
                        <img src="<?= $serie->img ?>" alt="">
                        <h3><?= $serie->title ?></h3>
                        <div class="movie__description">
                            <p><?= $serie->language ?></p>
                            <p>Season: <?= $serie->getSeason() ?></p>
                            <p>
                                <?php for ($i = 0; $i < $serie->rating; $i++) { ?>
                                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                                <?php } ?>
                            </p>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>