<?php

class Movie extends Production
{

    public $profit;
    public $duration;

    public function __construct(string $img, string $title, string $language, int $rating, int $profit, int $duration)
    {
        parent::__construct($img, $title, $language, $rating);
        $this->setProfit($profit);
        $this->setDuration($duration);
    }
    public function getProfit()
    {
        return $this->profit;
    }
    public function getDuration()
    {
        return $this->duration;
    }

    public function setProfit($profit)
    {
        if (is_numeric($profit) && $profit > 0) {
            $this->profit = number_format($profit);
        } else {
            throw new Exception("Profit value not valid");
        }
    }

    public function setDuration($duration)
    {
        if (is_numeric($duration) && $duration > 0) {
            $this->duration = $duration;
        } else {
            throw new Exception("Duration value not valid");
        }
    }
}

$movie1 = new Movie('./img/rambo.jpg', 'Rambo: First Blood', 'EN', 4, 340000, 150);
$movie2 = new Movie('./img/avatar.jpg', 'Avatar', 'IT', 5, 700000, 190);
$movie3 = new Movie('./img/pierino.avif', 'Pierino Colpisce Ancora', 'IT', 3, 120000, 80);
$movie4 = new Movie('./img/creed.jpg', 'Creed', 'EN', 4, 450000, 130);
$movie5 = new Movie('./img/rampage.jpg', 'Rampage', 'EN', 4, 260000, 120);
$movie6 = new Movie('./img/harry-2.jpg', 'Harry Potter 2', 'IT', 5, 1200000, 170);
