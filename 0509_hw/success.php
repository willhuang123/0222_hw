<?php
//要使用session就要寫session_start()
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入成功</title>
</head>

<body>
    <?php
    //bug1:沒登入也能進入success.php
    if (isset($_SESSION["check"])) { //檢查有無設置變數(for session_destroy in logout.php)
        if ($_SESSION["check"] == "Yes" && $_SESSION["role"] == "student") {
            echo "學生登入成功<br>";
            echo "<a href='logout.php'>登出</a><br>";//檢驗:登出->輸入錯誤帳密->session:No->重新檢查success.php(要是非法)
            echo "<a href='Party.php'>前往填寫晚會表單</a>";
        } else if($_SESSION["check"] == "Yes" && $_SESSION["role"] == "admin") {
            echo "管理員登入成功<br><br>";
            echo "<a href='add.php'>新增帳號(C)</a><br>";
            echo "<a href='showdb.php'>查看資料庫內容(R)</a><br><br>";
            echo "<a href='logout.php'>登出</a>";
        } else {
            //bug2:錯誤登入也能進入success.php:fail.php->猜到success.php的網址->可以進入success.php
            echo "非法進入網頁(session:No)<br>";
            echo "3秒後回首頁";
            header("Refresh:3;url=login.php");
        }
    } else {
        echo "非法進入網頁(isset:null)<br>";
        echo "3秒後回首頁";
        header("Refresh:3;url=login.php");
    }
    include("footer.inc");
    ?>
</body>

</html>