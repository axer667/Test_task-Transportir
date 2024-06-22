<?php
namespace Zoo;
interface iAnimal {
    public function getType(): string;
    public function makeSound(): string;
    public function addToRation(string $meal): void;
    public function getRation(): array;
}