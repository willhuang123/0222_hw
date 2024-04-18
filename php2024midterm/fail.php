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
    //case1:沒登入也能進入fail.php
    if (isset($_SESSION["usertype"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["usertype"] == "failed") {
            echo "登入失敗<br>";
            echo "3秒後回首頁";
            header("Refresh:3;url=index.php");
        } else {
            //case2、3、4:chair、reviewer、author成功登入後也能進入fail.php
            echo "非法進入網頁<br>";
            echo "3秒後回首頁";
            header("Refresh:3;url=index.php");
        }
    } else {
        echo "非法進入網頁<br>";
        echo "3秒後回首頁";
        header("Refresh:3;url=index.php");
    }
    ?>
</body>

</html>