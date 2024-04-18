<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showpaper</title>
</head>

<body>
    <?php
    //case1:沒登入也能進入showpaper.php
    if (isset($_SESSION["usertype"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["usertype"] == "author") {
            if(!empty($_POST["title"])) {
                $title = $_POST["title"];
                echo "論文標題:".$title."<br>";
            } else {
                echo "未輸入論文標題"."<br>";
            }

            if(!empty($_POST["name"])) {
                $name = $_POST["name"];
                echo "作者姓名:".$name."<br>";
            } else {
                echo "未輸入作者姓名"."<br>";
            }
            if(!empty($_POST["email"])) {
                $email = $_POST["email"];
                echo "作者Email:".$email."<br>";
            } else {
                echo "未輸入作者Email"."<br>";
            }
            //多行文字方塊
            $summary = $_POST["summary"];
            //防輸入 html的攻擊
            echo "論文評論評語:" . strip_tags(nl2br($summary)) . "<br>";
        } else {
            //case2、3、4:chair、author成功登入後或failed也能進入showreview.php
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