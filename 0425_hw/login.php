<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高大資管系登入介面</title>
</head>

<body>
    <h1>高大資管系登入介面</h1>
    <form action="check.php" method="post">
        <label for="role">身份:</label>
        <select id="role" name="role" size="1">
            <option value="student">學生</option>
            <option value="admin">管理員</option>
        </select>
        <br><br>
        <label for="account">帳號:</label>
        <input type="text" id="account" name="account">
        <br><br>
        <label for="pwd">密碼:</label>
        <input type="password" id="pwd" name="pwd">
        <br><br>
        <input type="submit" value="登入">
        <input type="reset" value="清除">
        <br><br>
    </form>

    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y/m/d h:i:s a");
    echo "<br><br>";

    //第一次登入時使用者發送http request，此時沒有cookie，server的回覆會夾帶cookie；第二次登入時使用者發送的http request就有設置cookie了
    if (isset($_COOKIE["username"])) {
        echo $_COOKIE["username"] . "歡迎回來<br>";
    } else {
        echo "這是第一次進入網站<br>";
    }
    
    //include()如果無檔案->網頁其他部分仍可顯示；require()如果無檔案->整個網頁錯誤 
    include("footer.inc");
    ?>
</body>

</html>