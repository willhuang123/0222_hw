<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewer登入</title>
</head>

<body>
    <?php
    //case1:沒登入也能進入reviewer.php
    if (isset($_SESSION["usertype"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["usertype"] == "reviewer") {
            echo "<h1>Reviewer您好，歡迎進入評論網頁</h1>";
    ?>
            <form action="showreview.php" method="post">
                論文評審決定:
                <input type="radio" id="Accept" name="decision" value="Accept">
                <label for="Accept">Accept</label>
                <input type="radio" id="Mimor Revision" name="decision" value="Mimor Revision">
                <label for="Mimor Revision">Mimor Revision</label>
                <input type="radio" id="Major Revision" name="decision" value="Major Revision">
                <label for="Major Revision">Major Revision</label>
                <input type="radio" id="Reject" name="decision" value="Reject">
                <label for="Reject">Reject</label>
                <br><br>
                <!-- 多行文字方塊 -->
                <label for="comment">論文評論評語:</label>
                <textarea id="comment" name="comment" value="" rows="15" cols="30"></textarea>
                <br>
                <input type="submit" value="提交">
                <br>
                <a href='logout.php'>登出</a>
            </form>
    <?php
        } else {
            //case2、3、4:chair、author成功登入後或failed也能進入reviewer.php
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