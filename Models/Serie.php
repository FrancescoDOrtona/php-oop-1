<?php

class Serie extends Production
{

    public $season;

    public function __construct(string $img, string $title, string $language, int $rating, $season)
    {
        parent::__construct($img, $title, $language, $rating);
        $this->setSeason($season);
    }

    public function getSeason()
    {
        return $this->season;
    }

    public function setSeason($season)
    {
        if (is_numeric($season) && $season > 0) {
            $this->season = $season;
        } else {
            throw new Exception("Season value not valid");
        }
    }
}

$serie1 = new Serie('./img/altered.webp', 'Altered Carbon', 'EN', 3, 1);
$serie2 = new Serie('./img/dexter.jpg', 'Dexter', 'EN', 4, 2);
$serie3 = new Serie('./img/mare-fuori.webp', 'Mare Fuori', 'IT', 2, 1);
$serie4 = new Serie('./img/orange.webp', 'Orange is The New Black', 'EN', 5, 3);
$serie5 = new Serie('./img/the-boys.jpg', 'The Boys', 'EN', 5, 2);
$serie6 = new Serie('./img/upload.jpg', 'Upload', 'IT', 3, 1);
