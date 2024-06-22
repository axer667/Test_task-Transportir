<?php
namespace Zoo;
use Zoo\Traits\WashTrait;

/**
 * Class Elephant
 *
 * @version 0.1.0
 */
class Elephant extends Animal implements iClean {
    use WashTrait;
    protected string $name;

    public function __construct($name) {
        $this->name = $name;
        $this->type = 'Elephant';
        $this->setSound("Trumpet");
        $this->addToRation("Grass");
    }

    public function swim(): void
    {
        echo "The elephant sprays itself with water from its trunk";
        $this->washing();
    }
};