<?php session_start();?>
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
        </fieldset>

        <!-- 多行文字方塊 -->
        <label for="comment">提供意見:</label>
        <textarea id="comment" name="comment" value="" rows="5" cols="20"></textarea>
        <br><br>

        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
        <br>
    </form>

    <?php
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] == "No") {
                header("Location: fail.php");
            }
        } else {
            header("Location: fail.php");
        }
    ?>
</body>

</html>