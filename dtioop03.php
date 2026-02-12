<?php
    class Test03
    {
        public $numA =100;
        public $numB =200;
        public $numC =300;

        public function showHi()
        {
            echo "Hi...<br>";
            
        }
        private function showHello()
        {
            echo "Hello...<br>";
        }
        function showHey(){
            echo "Hey...<br>";
        }
        public function metA(){
            echo "numA : " . $this->numA . "<br>";
            echo "numB : " . $this->numB . "<br>";
            echo "numC : " . $this->numC . "<br>";
            $this->showHello();
            $this->showHey();
            $this->showHi();

        }
    }
    $ob1 = new Test03();
    $ob1->numA = 100;

    $ob1->showHey();
    $ob1->metA();
