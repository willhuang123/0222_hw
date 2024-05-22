<?php
//這兩行要寫在開頭!
ob_start(); //setcookie()會改變http標頭資料，ob_start()避免重複寫入標頭
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
        $role = $_POST["role"];
        $account = $_POST["account"];
        $pwd = $_POST["pwd"];

        //連接資料庫
        $link = @mysqli_connect('localhost', 'root', 'will14739LAC', 'nukim'); 

        if (!$link) {
            die("無法開啟資料庫<br>");
        } else {
            echo "成功開啟資料庫<br>";
        }

        //SQL指令
        $SQL = "SELECT * FROM member";

        //資料表查詢
        $result = mysqli_query($link, $SQL);

        //設定cookie到期時間
        $date = strtotime("+10 days", time());

        //從資料庫找資料比對
        while ($row = mysqli_fetch_assoc($result)) {
            if($row["Account"] == $account && $row["Password"] == $pwd && $row["Role"] == $role){
                //setcookie必須放在任何輸出之前
                setcookie("account", $account, $date); 
                $_SESSION["check"] = "Yes";
                //分出角色
                if($row["Role"] == "admin") {
                    $_SESSION["role"] = "admin";
                } else {
                    $_SESSION["role"] = "student";
                }
                header("Location: success.php");
                break;
            } else {
                $_SESSION["check"] = "No";
                echo $_SESSION["check"];
                header("Location: fail.php");
            }
        }
        ob_flush(); //輸出緩衝區
        include("footer.inc");
    ?>
</body>

</html>