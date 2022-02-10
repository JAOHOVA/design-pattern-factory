<?php

require_once 'AnimalInterface.php';

class Horse implements AnimalInterface
{
    public function getSoundType(): string
    {
        return 'Hennissement';
    }
}