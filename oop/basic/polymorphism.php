<?php
class Animal {
    public function make_sound(): void {
        echo "Animal is making sound\n";
    }
}

class Dog extends Animal {
    public function make_sound() : void {
        echo "Dog is making Sound\n";
    }
}

class Cat extends Animal {
    public function make_sound() : void {
        echo "Cat is making Sound\n";
    }
}
function create_sound($animal) {
    $animal->make_sound();
}
create_sound(new Animal());
create_sound(new Dog());
create_sound(new Cat());



?>