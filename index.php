<?php

class Production
{

    public $title;
    public $language;
    public $rating;
    public function __construct(string $title, string $language, int $rating)
    {
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

$production1 = new Production('Rambo', 'En', 4);
$production2 = new Production('Avatar', 'It', 5);
$production3 = new Production('Pierino', 'It', 3);
$production4 = new Production('Creed', 'En', 4);
$production5 = new Production('Rampage', 'En', 4);
$production6 = new Production('Harry Potter', 'It', 5);

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
    <link rel="stylesheet" href="./css/app.css">
    <title>Film Production</title>
</head>

<body>
    <header class="container page-header">
        <h1>Franflix</h1>
        <p>A new webapp where to watch all your favorites movies.</p>
    </header>
    <main>
        <section class="container movies">
            <div class="grid">
                <?php
                foreach ($movies as $movie) {
                ?>
                    <p class="movie">
                        <?php $movie->printMovie() ?>
                    </p>

                <?php
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>