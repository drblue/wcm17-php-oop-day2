<?php

require "includes/Horse.php";

$bengt = new Horse;
$bengt->name = "Bengt";
$bengt->breed = "Ardenner";
$bengt->weight = 845;

$kalle = new Horse;
$kalle->name = "Kalle";
$kalle->breed = "Arabiskt fullblod";
$kalle->weight = 1150;

$hastar = [$bengt, $kalle]; // samma som nedan, bara annat sätt att skriva på
$hastar = array($bengt, $kalle);

foreach ($hastar as $hast) {
    echo "<h1>" . $hast->name . "</h1>";
    echo "Name: " . $hast->name . "<br>";
    echo "Breed: " . $hast->breed . "<br>";
    echo "Weight: " . $hast->weight . "<br>";
}
