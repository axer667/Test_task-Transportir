<?php
namespace Zoo;

class Lion extends Animal {

    public function __construct($name) {
        $this->name = $name;
        $this->type = 'Lion';
        $this->setSound("Roar");
        $this->addToRation("Meat");
    }
}