<?php
    function showHello(){
        echo"<h1 style='color:red;'>Hello...</h1>";
    }

    showHello();
    showHello();

    function showHi($fname, $lname){
        echo"<h2 style='color:green;'>Hi... $fname $lname</h2>";
    }
    showHi("Ibank","Lek");

    function sendBye(){
        return "<h3 style='color:blue;'>Bye Bye...</h3>";
    }
    echo sendBye();
    $data = sendBye();
    echo "<br/>", $data, "SAU";

    function sumNumber($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    echo "<br/><br/>100+200=", sumNumber(100,200);

    //Arrow Function (เขียนในรูปแบบที่เรัยก Expression Function)
    $woo = fn()=> "<br/>wowoo wo";
    echo $woo();

    $hi = fn($nickname) => "Hi $nickname";

    echo $hi ("Weeee");