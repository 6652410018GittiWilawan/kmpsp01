<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Result</h1>
    <hr>
    <?php
    if(floatval($_GET["num1"]) == 0 || intval($_GET["num2"]) == 0){
        echo "ไม่สามารถคำนวณได้ ตรวจสอบจำนวนเงิน ห้ามเป็น 0";
        header("Refresh: 3; url=dti05.php");
    }
    else{
    $result = $_GET["num1"] / $_GET["num2"];
    echo "เงิน" , $_GET["num1"], "บาท<br/>";
    echo "คน" , $_GET["num2"], "คน<br/>";
        }?>
</body>
</html>