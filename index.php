<?php

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
        $this->rating = $rating;
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

    public function printMovie()
    {
        echo $this->getTitle();
        echo '<br>';
        echo $this->getLanguage();
        echo '<br>';
        echo $this->getRating();
    }
}

$production1 = new Production('./img/rambo.jpg', 'Rambo: First Blood', 'En', 4);
$production2 = new Production('./img/avatar.jpg', 'Avatar', 'It', 5);
$production3 = new Production('./img/pierino.avif', 'Pierino Colpisce Ancora', 'It', 3);
$production4 = new Production('./img/creed.jpg', 'Creed', 'En', 4);
$production5 = new Production('./img/rampage.jpg', 'Rampage', 'En', 4);
$production6 = new Production('./img/harry-2.jpg', 'Harry Potter 2', 'It', 5);

// var_dump($production1, $production2);

$movies = [
    $production1,
    $production2,
    $production3,
    $production4,
    $production5,
    $production6
];

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
            <div class="grid">
                <?php
                foreach ($movies as $movie) {
                ?>
                    <div class="movie">
                        <img src="<?= $movie->img ?>" alt="">
                        <h3><?= $movie->title ?></h3>
                        <div class="movie__description">
                            <p><?= $movie->language ?></p>
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
    </main>
</body>

</html>