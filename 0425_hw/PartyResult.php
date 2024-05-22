<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>報名表填寫結果</title>
</head>

<body>
    <?php
    if (isset($_SESSION["check"])) {
        if ($_SESSION["check"] != "Yes") {
            header("Location:fail.php");
        }
    } else {
        header("Location:fail.php");
    }

    // text
    if (!empty($_POST["id"])) {
        $id = $_POST["id"];
        echo "學號:" . $id . "<br>";
    } else {
        echo "未輸入學號" . "<br>";
    }

    if ($_POST["name"] != "") {
        $name = $_POST["name"];
        echo "姓名:" . $name . "<br>";
    } else {
        echo "未輸入姓名" . "<br>";
    }

    // email
    if ($_POST["email"] != "") {
        $email = $_POST["email"];
        echo "電子郵件:" . $email . "<br>";
    } else {
        echo "未輸入電子郵件" . "<br>";
    }

    //選擇鈕
    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
        echo "性別:" . $gender . "<br>";
    } else {
        echo "未選擇性別" . "<br>";
    }

    // 多行文字方塊
    $comment = $_POST["comment"];
    //防輸入 html的攻擊
    echo "建議:" . strip_tags(nl2br($comment)) . "<br>";




    //連接資料庫
    $link = @mysqli_connect('localhost', 'root', 'will14739LAC', 'nukim');

    if (!$link) {
        die("無法開啟資料庫<br>");
    } else {
        echo "成功開啟資料庫<br>";
    }

    //SQL指令
    $SQL = "INSERT INTO party(Id, Name, Email, Gender, Comment) VALUES('$id', '$name', '$email', '$gender', '$comment')";

    //資料表查詢
    if(mysqli_query($link, $SQL)) {
        echo "新增成功<br>";
    }

    //關閉資料庫連接、釋放資料庫連接佔用的記憶體空間
    mysqli_close($link);
    ?>
</body>

</html>