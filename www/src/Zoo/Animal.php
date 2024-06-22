<?php
namespace Zoo;

/**
 * Abstract Class Animal
 *
 * @version 0.1.0
 */
abstract class Animal implements iAnimal
{
    protected string $name;
    protected string $type;
    protected string $sound;

    /**
     * @var array $ration string[]
     */
    protected array $ration = [];

    /**
     * Возвращает тип животного
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Возвращает тип животного
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function setSound(string $sound): void {
        $this->sound = $sound;
    }

    /**
     * Возвращает голос животного (рык, рёв, писк...)
     *
     * @return string
     */
    public function makeSound(): string
    {
        return $this->sound;
    }

    public function addToRation(string $meal): void
    {
        $this->ration[] = $meal;
    }

    /**
     * Возвращает рацион животного
     *
     * @return array string[]
     */
    public function getRation(): array
    {
        return $this->ration;
    }

    /**
     * Преобразовывает ключевые свойства в ассоциативный массив
     *
     * @return array
     */
    public function toArray(): array {
        return [
            'name' => $this->name,
            'type' => $this->getType(),
            'voice' => $this->makeSound(),
            'ration' => $this->getRation(),
        ];
    }
}