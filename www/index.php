<?php
require_once './vendor/autoload.php';

use Zoo\Cage;
use Zoo\Elephant;
use Zoo\Exceptions\DifferentAnimalsInCageException;
use Zoo\Helpers\JsonHelper;
use Zoo\Lion;
use Zoo\Zoo;

$lionAlex = new Lion('Alex');
$lionBobi = new Lion('Bobi');
$elephantJohn = new Elephant('John');

$cageLion = new Cage(Lion::class);

$animals = [
    $lionAlex,
    $lionBobi,
    $elephantJohn
];

foreach ($animals AS $animal) {
    try {
        $cageLion->addAnimal($animal);
        echo "Льва, по имени {$animal->getName()} удалось посадить в клетку";
    } catch (DifferentAnimalsInCageException $e) {
        echo $e->getMessage();
    } finally {
        echo " / Мы попытались посадить животное вида {$animal->getType()} по имени {$animal->getName()} в клетку, предназначенную для львов <br/>";
    }
}

$zooLionAlex = new Zoo('Lion Alex');
$zooLionAlex->addCage($cageLion);

echo JsonHelper::encodeZoo($zooLionAlex);