<?php

class Movie extends Production {

    public $profit;
    public $duration;

    public function __construct(string $img, string $title, string $language, int $rating, int $profit, int $duration) {
        parent::__construct($img, $title, $language, $rating);
        $this->profit = $profit;
        $this->duration = $duration;
    }
    public function getProfit(){
        return $this->profit;
    }
    public function getDuration(){
        return $this->duration;
    }

    public function setProfit($profit){
        if(is_numeric($profit) && $profit > 0){
        $this->profit = $profit;
    } else {
        throw new Exception("Profit value not valid");
    }

    }

    public function setDuration($duration){
        if(is_numeric($duration) && $duration > 0){
            $this->duration = $duration;
        } else {
            throw new Exception("Duration value not valid");
        }
    }
}