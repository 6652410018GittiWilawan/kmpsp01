<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .from-group {
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
        }
        input[type="submit"]{
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="reset"]{
            background-color: red;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">All Form with PHP</h1>
    <hr>
    <form action="<?php echo$_SERVER["PHP_SELF"] ?>" method="POST" enctype="">
        <div class="from-group">
            <label for="fname">ชื่อ-สกุล</label>
            <input type="text" id="fname" name="fname">
            <div class="from-group">
                <label for="pword">รหัสผ่าน</label>
                <input type="password" id="password" name="password">
                <div class="from-group">
                    <label for="age">อายุ</label>
                    <input type="number" id="age" name="age">
                    <div class="from-group">                
                        <label for="gender">เพศ</label>
                        <input type="radio" id="male" name="gender" value="male">ชาย
                        <input type="radio" id="female" name="gender" value="female">หญิง
                        <input type="radio" id="other" name="gender" value="other">อื่นๆ
                        <div class="from-group">
                            <label for="plang">ภาษาที่ใช้</label>
                            <input type="checkbox" name="plang[]" value="php">PHP
                            <input type="checkbox" name="plang[]" value="java">JAVA
                            <input type="checkbox" name="plang[]" value="python">python
                            <input type="checkbox" name="plang[]" value="C">C
                        </div>
                        <div class="from-group">
                            <label for="food">อาหารที่ชอบ</label>
                            <input type="checkbox" name="food1" value="KFC">KFC
                            <input type="checkbox" name="food2" value="Pizza">Pizza
                            <input type="checkbox" name="food3" value="Donut">Donut
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="country">ประเทศ</label>
                            <select id="country" name="country">
                                <option value="thailand">ประเทศไทย</option>
                                <option value="laos">สปป.ลาว</option>
                                <option value="japan">ญี่ปุ่น</option>
                                <option value="vietnam">เวียดนาม</option>
                            </select>
                            <div class="from-group">
                            <label for="province">จังหวัดที่ชอบ</label>
                            <select id="province" name="province">
                                <option value="bangkok">กรุงเทพฯ</option>
                                <option value="chonburi">ชลบุรี</option>
                                <option value="pattaya">พัทยา</option>
                                <option value="phuket">ภูเก็ต</option>
                            </select>
                        <div class="from-group">
                            <label for="bdate">วันเกิด</label>
                            <input type="date" id="bdate" name="bdate">
                        </div>
                        <div class="from-group">
                            <label for="likelevel">ระดับความชอบ</label>
                            <input type="range" id="likelevel" name="likelevel" min="0" max="100">100
                        </div>
                        <div class="from-group">
                            <label for="comment">ความคิดเห็น</label>
                            <textarea id="comment" name="comment" rows="5"></textarea>
                        </div>
                        <input type="hidden" name="massage" value="😮">
                        <div>
                            <input type="submit" value="ส่งข้อมูล">
                            <input type="reset" value="ล้างข้อมูล">
                        </div>
                       <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
        <div>
            <strong>ชื่อ-นามสกุล</strong>
            <?php
            echo empty($_POST["fname"]) ? "-" : $_POST["fname"];
            ?>
        </div>
        <div>
            <strong>รหัสผ่าน</strong>
            <?php
            echo empty($_POST["pword"]) ? "-" : $_POST["pword"];
            ?>
        </div>
        <div>
            <strong>อายุ: </strong>
            <?php
            echo empty($_POST["age"]) ? "-" : $_POST["age"];
            ?>
        </div>
        <div>
            <strong>เพศ: </strong>
            <?php
            echo ($_POST["gender"]);
            ?>
        </div>
        <div>
            <strong>ภาษาโปรแกรมที่ชอบ: </strong>
            <?php
            echo (isset($_POST["plang"]) && is_array($_POST["plang"])) ? implode(", ", $_POST["plang"]) : "";
            ?>
        </div>
        <div>
            <strong>อาหารที่ชอบ: </strong>
            <?php
            echo isset($_POST["food1"]) ? $_POST["food1"] : "";
            echo isset($_POST["food2"]) ? $_POST["food2"] : "";
            echo isset($_POST["food3"]) ? $_POST["food3"] : "";
            ?>
        </div>
        <div>
            <strong>ประเทศที่ชอบ: </strong>
            <?php
            echo empty($_POST["country"]) ? "?" : $_POST["country"];
            ?>
        </div>
        <div>
            <strong>จังหวัดที่ชอบที่ชอบ: </strong>
            <?php
            echo empty($_POST["province"]) ? "-" : $_POST["province"];
            ?>
        </div>
        <div>
            <strong>วัน เดือน ปีเกิด: </strong>
            <?php
            echo empty($_POST["bdate"]) ? "-" : $_POST["bdate"];
            ?>
        </div>
        <div>
            <strong>ระดับความชอบ: </strong>
            <?php
            echo empty($_POST["likelevel"]);
            ?>
        </div>

        <div>
            <strong>Comment: </strong>
            <?php
            echo empty($_POST["comment"]) ? "-" : $_POST["comment"];
            ?>
        </div>
         <div>
        <strong>Massage: </strong>
        <?php
            echo $_POST["massage"] ;
        }?>

</body>

</html>