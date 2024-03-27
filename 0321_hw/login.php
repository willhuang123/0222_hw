<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高大資管系登入介面</title>
</head>

<body>
    <form action="check.php" method="post">
        <label for="id">帳號:</label>
        <input type="text" id="id" name="id">
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
    ?>
</body>

</html>