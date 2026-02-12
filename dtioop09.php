<?php
    class Test01{
        public const U_THAILAND = "SAU";
        public static $data="100";
        public $info="200";

        public static function showWow(){
            echo "Wowwwwww";
            self::$data = "333";
        }
        public  function showHi(){
            echo self::U_THAILAND;
            $this->info = "500";
            self::$data = "700";
            self::showWow();
            echo "Hiiiiiiiii";
        }
        }

    Test01::$data;
    echo Test01 :: $data;

    Test01::showWow();