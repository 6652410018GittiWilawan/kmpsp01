<?php

    class TestA {
    public function metA(){
        echo 111 , "<br>";
    }       

}

class TestB extends TestA{
    public function metB(){
        echo 222 , "<br>";
    }
}

$ob1 = new TestA();
$ob2 = new TestB();

$ob1->metA();
$ob2->metA();

$ob2->metA();
$ob2->metB();
