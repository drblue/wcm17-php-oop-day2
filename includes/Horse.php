<?php

class Horse {
    public $name;
    public $breed;
    public $color = "White";
    public $height = "N/A";
    public $weight = "N/A";
    public $sex = "Unknown";
    public $owners = [];

    public function addOwner($newOwner) {
        if (is_string($newOwner) && !empty($newOwner)) {
            array_push($this->owners, $newOwner);
        }
    }

    public function getOwners() {
        return implode(", ", $this->owners);
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
