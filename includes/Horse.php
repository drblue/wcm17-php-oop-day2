<?php

class Horse {
    public $name;
    public $breed;
    public $color = "White";
    public $height = "N/A";
    public $weight = "N/A";
    public $sex = "Unknown";
    public $owner;

    public function addOwner($newOwner) {
        $this->owner = $newOwner;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function getInfo() {
        return "Name: " . $this->name . "<br>" .
            "Breed: " . $this->breed . "<br>" .
            "Color: " . $this->color . "<br>" .
            "Height: " . $this->height . "<br>" .
            "Weight: " . $this->weight . "<br>" .
            "Sex: " . $this->sex . "<br>";
    }
}
