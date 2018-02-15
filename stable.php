<?php

require "includes/Horse.php";

$bengt = new Horse("Bengt");
$bengt->breed = "Ardenner";
$bengt->addOwner("Eva");

$kalle = new Horse("Kalle");
$kalle->breed = "Arabiskt fullblod";
$kalle->weight = 1150;
$kalle->addOwner("Charles");
$kalle->addOwner(0);
$kalle->addOwner("");

$pelle = new Horse("Pelle");
$pelle->breed = "Belgisk våffla";
$pelle->weight = 150;

$stefan = new Horse();

// $hastar = [$bengt, $kalle]; // samma som nedan, bara annat sätt att skriva på
$hastar = array($bengt, $kalle, $pelle, $stefan);

// echo $hastar[1]->getInfo();

foreach ($hastar as $hast) {
    echo $hast->getInfo();
    echo "Ägare: " . $hast->getOwners() . "<br>";
    echo "<br>";
}
