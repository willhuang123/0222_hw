<?php 
ob_start(); 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳密驗證</title>
</head>

<body>
    <?php
    // 第一組帳密
    $uid1 = "chair";
    $upwd1 = "123";
    $urole1 = "Chair";

    // 第二組帳密
    $uid2 = "reviewer";
    $upwd2 = "234";
    $urole2 = "Reviewer";

    // 第三組帳密
    $uid3 = "author";
    $upwd3 = "345";
    $urole3 = "Author";

    
    $id = $_POST["id"];
    $pwd = $_POST["pwd"];
    $role = $_POST["role"];

    $date = strtotime("+7 days", time()); 
    
    if($role == $urole1 && $id == $uid1 && $pwd == $upwd1) {
        setcookie("ID", $id, $date);
        $_SESSION["usertype"] = "chair";
        header("Location: chair.php");
    } else if($role == $urole2 && $id == $uid2 && $pwd == $upwd2) {
        setcookie("ID", $id, $date);
        $_SESSION["usertype"] = "reviewer";
        header("Location: reviewer.php");
    } else if($role == $urole3 && $id == $uid3 && $pwd == $upwd3) {
        setcookie("ID", $id, $date);
        $_SESSION["usertype"] = "author";
        header("Location: author.php");
    } else {
        $_SESSION["usertype"] = "failed";
        header("Location: fail.php");
    }
    ob_flush();
    ?>
</body>

</html>