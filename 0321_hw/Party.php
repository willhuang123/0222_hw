<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資管晚會報名表</title>
</head>

<body>
    <form action="PartyResult.php" method="post">
        <fieldset>
            <legend>基本資料填寫</legend>
            <!-- text -->
            <label for="id">請輸入學號:</label>
            <input type="text" id="id" name="id"><br>
            <label for="name">請輸入姓名:</label>
            <input type="text" id="name" name="name"><br>

            <!-- email -->
            <label for="email">請輸入電子郵件:</label>
            <input type="email" id="email" name="email"><br>
            
            <!-- 選擇鈕 -->
            請選擇性別:
            <input type="radio" id="male" name="gender" value="男">
            <label for="male">男</label>
            <input type="radio" id="female" name="gender" value="女">
            <label for="female">女</label>
            <input type="radio" id="else" name="gender" value="其他">
            <label for="else">其他</label><br>
            
            <!-- date -->
            <label for="birthday">您的生日:</label>
            <input type="date" id="birthday" name="birthday"><br>
        </fieldset>

        <!-- 核取方塊(複選) -->
        您希望晚會有什麼活動?(可複選):
        <input type="checkbox" name="event[]" value="dance">跳舞
        <input type="checkbox" name="event[]" value="sing">唱歌
        <input type="checkbox" name="event[]" value="game">玩遊戲
        <input type="checkbox" name="event[]" value="chat">聊天
        <input type="checkbox" name="event[]" value="dessert">吃甜點
        <br><br>

        <!-- 下拉式清單方塊(單選) -->
        您打算如何到達會場?
        <select id="transport" name="transport" size="1">
            <option value="" selected>請選擇</option>
            <option value="walk">步行</option>
            <option value="car">開車</option>
            <option value="scooter">騎機車</option>
            <option value="bike">騎腳踏車</option>
        </select>
        <br><br>

        <!-- 清單方塊(單選) -->
        您想在何處參加晚會?
        <select id="place" name="place" size="3">
            <option value="" selected>請選擇</option>
            <option value="校內">校內</option>
            <option value="校外">校外</option>
        </select>
        <br><br>

        <!-- 清單方塊(複選) -->
        您想邀請誰一同參加晚會?
        <select id="attendee" name="attendee[]" multiple>
            <option value="">請選擇</option>
            <optgroup label="本校">
                <option value="資管系同學">資管系同學</option>
                <option value="外系同學">外系同學</option>
            </optgroup>
            <optgroup label="外校">
                <option value="外校同學">外校同學</option>
            </optgroup>
        </select>
        <br><br>

        <!-- time -->
        <label for="time">預計抵達晚會時間:</label>
        <input type="time" id="time" name="time" value=""><br><br>
        
        <!-- number -->
        <label for="number">請選擇參加人數:</label>
        <input type="number" id="number" name="number" value="0" min="0"><br><br>
        
        <!-- range -->
        <label for="range">期待程度:</label>
        <input type="range" id="range" name="range" min="0" max="100" value="50" step="10"><br><br>
        
        <!-- 多行文字方塊 -->
        <label for="comment">提供意見:</label>
        <textarea id="comment" name="comment" value="" rows="5" cols="20"></textarea>
        <br><br>

        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
        <br>
    </form>

    <?php
        session_start();
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] != "Yes") {
                header("Location:fail.php");
            }
        } else {
            header("Location:fail.php");
        }
    ?>
</body>

</html>