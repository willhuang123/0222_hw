<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showreview</title>
</head>

<body>
    <?php
    //case1:沒登入也能進入showreview.php
    if (isset($_SESSION["usertype"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["usertype"] == "reviewer") {
            //選擇鈕
            $decision = $_POST["decision"];
            echo "論文評審決定:" . $decision . "<br>";
            //多行文字方塊
            $comment = $_POST["comment"];
            //防輸入 html的攻擊
            echo "論文評論評語:" . strip_tags(nl2br($comment)) . "<br>";
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