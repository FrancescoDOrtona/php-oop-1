<?php

class Production {

    public $title;
    public $language;
    public $rating;
    public function __construct(string $title, string $language, int $rating) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getLanguage() {
        return $this->language;
    }
    public function getRating() {
        return $this->rating;
    }
}

$production1 = new Production('Rambo', 'En', 4);
$production2 = new Production('Avatar', 'It', 5);

var_dump($production1, $production2);

