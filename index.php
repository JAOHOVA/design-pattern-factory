<?php

require_once 'AnimalFactory.php';

$animalTypes = ['horse', 'dog', 'mice', 'cat', 'lion'];

foreach ($animalTypes as $animalType) {
    try {
        $animal = AnimalFactory::load($animalType);
        echo sprintf("%s : %s <br/>", $animalType, $animal->getSoundType());
    } catch (Exception $e) {
        echo sprintf("%s : cet animal n'a pas été implémenté dans le système <br/>", $animalType);
    }
}