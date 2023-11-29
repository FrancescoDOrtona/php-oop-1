<?php

class Serie extends Production {

    public $season;

    public function __construct(string $img, string $title, string $language, int $rating, $season) {
        parent::__construct($img, $title, $language, $rating);
        $this->season = $season;
    }

    public function getSeason(){
        return $this->season;
    }

    public function setSeason($season){
        if(is_numeric($season) && $season > 0){
            $this->season = $season;
        } else {
            throw new Exception("Season value not valid");
        }
    }

}