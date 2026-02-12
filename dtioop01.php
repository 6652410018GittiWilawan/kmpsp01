<?php

class Test01
{
    //data-attribute-property-field member เกี่ยวกับข้อมูล
    public $dataA;
    public $dataB;
    // method-function member เกี่ยวกับการทำงาน
    public function showWOW()
    {
        echo "WOWOWOWO";
    }
    public function showWOO()
    {
        echo "Woo";
    }
}
$ob1 = new Test01();
$ob2 = new Test01();

echo $ob1->dataA = "Hello";
echo $ob2->dataB = "Hi";

$ob1->showWOW();
$ob2->showWOO();