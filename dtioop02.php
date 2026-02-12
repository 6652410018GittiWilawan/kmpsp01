<?php
//constuctor ทำงานทุกครั้งที่มีการสร้าง object ใหม่

class Test02
{
    public $infoA;

    public function showInfoA()
    {
    
    echo "InfoA = " . $this->infoA . "<br>";
    }
    public function __construct($infoA)
    {
        $this->infoA = $infoA;
        echo "welcome to DTI";
    }
    public function __destruct()
    {
        echo "Good Bye DTI";
    }
}

$ob1 = new Test02(100);
$ob2 = new Test02(200);


$ob1->showInfoA();
$ob2->showInfoA();
