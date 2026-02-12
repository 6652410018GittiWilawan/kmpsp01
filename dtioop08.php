<?php

final class person{

}

class Animal{
    public function run(){
        echo "Animal is running";
    }
        final public function eat(){
            echo "Eating";
    }
}

class Dog extends Animal{
    public function run(){
        echo "Dog is running";
    }
}