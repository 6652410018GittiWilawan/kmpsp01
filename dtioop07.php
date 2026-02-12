<?php
require_once '/dtioop06.php';

class Test01 extends Sau01{
    public function metB(){echo "BBB";}
    public function metC():String{
        return "CCC";
    }
}

class Test02 implements Sau02{
    public function modC(){echo "CCC";}
    public function modD(){echo "DDD";}
}

$ob1 = new Test01();
$ob2 = new Test02(123);
$ob1->metA();
$ob1->metB();
