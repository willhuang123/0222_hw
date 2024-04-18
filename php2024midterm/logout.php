<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登出</title>
</head>

<body>
    <?php
        session_destroy();
        echo "登出中...<br>";
        echo "3秒後回首頁";
        header("Refresh:3;url=index.php");
    ?>
</body>

</html>