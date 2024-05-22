<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入失敗</title>
</head>

<body>
    <?php
    //bug1:沒登入也能進入fail.php
    if (isset($_SESSION["check"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["check"] == "No") {
            echo "登入失敗<br>";
            echo "3秒後回首頁";
            header("Refresh:3;url=login.php");
        } else {
            //bug2:成功登入也能進入fail.php:success.php->猜到fail.php的網址->可以進入fail.php
            echo "非法進入網頁<br>";
            echo "3秒後回首頁";
            header("Refresh:3;url=login.php");
        }
    } else {
        echo "非法進入網頁<br>";
        echo "3秒後回首頁";
        header("Refresh:3;url=login.php");
    }
    include("footer.inc");
    ?>
</body>

</html>