<?php
    class SauA {
        public $infoA = "SAU A";
        public function showInfoA() {
            echo $this->infoA . "<br>";

        }
    }
    class SauB extends SauA {
        public $infoB = "SAU B";
    }
    class SauC extends SauB {
        public $infoC = "SAU C";
        public function showHi() {
            echo "hi... <br>";
        }
    }

    $ob1 = new SauA();
    $ob2 = new SauB();
    $ob3= new SauC();

    $ob3->showInfoA();