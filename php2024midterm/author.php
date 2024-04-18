<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author登入</title>
</head>

<body>
    <?php
    //case1:沒登入也能進入author.php
    if (isset($_SESSION["usertype"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["usertype"] == "author") {
            echo "<h1>Author您好，歡迎進入論文投稿網頁</h1>";
    ?>
            <form action="showpaper.php" method="post">
                <label for="title">論文標題:</label><br>
                <input type="text" id="title" name="title" required><br>
                <label for="name">作者姓名:</label>
                <input type="text" id="name" name="name" required><br>

                <!-- email -->
                <label for="email">作者Email:</label>
                <input type="email" id="email" name="email" required><br>

                <!-- 多行文字方塊 -->
                <label for="summary">論文摘要:</label>
                <textarea id="summary" name="summary" value="" rows="15" cols="30"></textarea>
                <br>
                <input type="submit" value="提交">
                <br>
                <a href='logout.php'>登出</a>
            </form>
    <?php
        } else {
            //case2、3、4:chair、reviewer成功登入後或failed也能進入author.php
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