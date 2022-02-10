<?php

require_once 'AnimalInterface.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Horse.php';

class AnimalFactory
{
    public static function load(string $animalType): AnimalInterface
    {
        switch ($animalType) {
            case 'dog':
                return new Dog();
                break;
            case 'cat':
                return new Cat();
                break;
            case 'horse':
                return new horse();
                break;
            default:
                throw new Exception();
                break;
        }
    }
}
