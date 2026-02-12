<?php
abstract class Sau01{
    public function metA(){
        echo "Hello from abstract class Sau01";
        
    }
    abstract public function metB();
    abstract public function metc():String;
}

interface Sau02{
    // abstract public function metB();
    public function modC();
    public function modD();
}

// $ob1 = new Sau01();