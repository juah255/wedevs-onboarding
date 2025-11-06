<?php
class Person {
    public function __construct(public string $name) {

    }
    public function sleep() : void {
        echo "{$this->name} is sleeping\n";
    }
}

class Student extends Person {
    public function __construct(public string $name) {
        parent::__construct($name);
    }
}

(new Student("Bob"))->sleep();

?>