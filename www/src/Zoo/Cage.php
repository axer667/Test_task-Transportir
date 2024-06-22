<?php
namespace Zoo;
use Zoo\Exceptions\DifferentAnimalsInCageException;

/**
 * Class Cage
 *
 * @version 0.1.0
 */
class Cage {
    /**
     * Содержит тип (класс) животных, которых можно содержать в клетке
     *
     * @var Animal::class $resident
     */
    protected $resident;

    /**
     * @var array $animals Animal[]
     */
    protected array $animals = [];

    public function __construct($resident) {
        $this->resident = $resident;
    }

    /**
     * Добавление животного в клетку
     *
     * @param Animal $animal Любой из наследников Animal
     *
     * @throws DifferentAnimalsInCageException
     */
    public function addAnimal(Animal $animal): void {
        if ($animal instanceof $this->resident) {
            $this->animals[] = $animal;
        } else {
            throw new DifferentAnimalsInCageException($this, $animal);
        }
    }

    /**
     * Возвращает тип (класс) содержащихся в клетке животных
     *
     * @return string
     */
    public function getResidentType() {
        return $this->resident;
    }

    /**
     * Возвращает список содержащихся в клетке животных
     *
     * @return array Animal[]
     */
    public function getAnimals(): array {
        return $this->animals;
    }
}