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

    public function setRating($rating)
    {
        if (is_numeric($rating) && $rating >= 0 && $rating <= 5) {
            $this->rating = intval($rating);
        } else {
            $this->rating = 0;
            var_dump('Error: insert a valid number');
        }
    }

    public function getDetails()
    {       
    }
}