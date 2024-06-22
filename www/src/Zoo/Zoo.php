<?php
namespace Zoo;

class Zoo {
    private string $title;

    /**
     * @var array $cages Cage[]
     */
    private array $cages = [];

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function addCage(Cage $cage): void {
        $this->cages[] = $cage;
    }

    /**
     * Возвращает список клеток, которые есть в зоопарке
     *
     * @return array Cage[]
     */
    public function getCages(): array {
        return $this->cages;
    }

    /**
     * Возвращает список всех животных в зоопарке
     *
     * @return array Animal[]
     */
    public function getAnimals(): array
    {
        $animals = [];
        foreach ($this->cages as $cage) {
            $animals = array_merge($animals, $cage->getAnimals());
        }
        return $animals;
    }
}