<?php
namespace Zoo\Exceptions;
use Zoo\Cage;
use Zoo\iAnimal;
use Exception;

class DifferentAnimalsInCageException extends Exception
{
    public function __construct(Cage $cage, iAnimal $animal)
    {
        Exception::__construct("В клетку, предназначенной для " . $cage->getResidentType() . ' нельзя добавить ' . get_class($animal));
    }
}