<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chair登入</title>
</head>

<body>
    <?php
    //case1:沒登入也能進入chair.php
    if (isset($_SESSION["usertype"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["usertype"] == "chair") {
            echo "Chair登入成功<br>";
            echo "<a href='logout.php'>登出</a><br>";
        } else {
            //case2、3、4:reviewer、author成功登入後或failed也能進入chair.php
            echo "非法進入網頁<br>";
            echo "3秒後回首頁";
            header("Refresh:3;url=index.php");
        }
    } else {
        echo "非法進入網頁<br>";
        echo "3秒後回首頁";
        header("Refresh:3;url=index.php");
    }
    include("include.inc");
    ?>
</body>

</html>