<?php

/*
Написать класс Cat, который наследуется от класcа Animal.
Класс Animal имеет метод getName (name можно передать в конструктор).
Класс Cat имеет метод meow (возвращает строку «Cat {catname} is sayig meow».

Пример использования:
$cat = new Cat ('garfield');
$cat->getName () === 'garfield' // true;
$cat->meow () === 'Cat garfield is saying meow' // true;
*/

abstract class Animal{
    protected $name;

    function __construct($name = null) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
}

class Cat extends Animal {

    function meow() {
        $catName = parent::getName();
        print "Cat {$catName} is saying meow";
    }
}