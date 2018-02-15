<?php

require "includes/Horse.php";

$bengt = new Horse;
$bengt->name = "Bengt";
$bengt->breed = "Ardenner";
$bengt->addOwner("Eva");

$kalle = new Horse;
$kalle->name = "Kalle";
$kalle->breed = "Arabiskt fullblod";
$kalle->weight = 1150;
$kalle->addOwner("Charles");
$kalle->addOwner(0);
$kalle->addOwner("");

echo $kalle->owners[0];

$pelle = new Horse;
$pelle->name = "Pelle";
$pelle->breed = "Belgisk våffla";
$pelle->weight = 150;

// $hastar = [$bengt, $kalle]; // samma som nedan, bara annat sätt att skriva på
$hastar = array($bengt, $kalle, $pelle);

// echo $hastar[1]->getInfo();

foreach ($hastar as $hast) {
    echo $hast->getInfo();
    echo "Ägare: " . $hast->getOwners() . "<br>";
    echo "<br>";
}
