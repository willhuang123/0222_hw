<meta charset='utf8'>

<?php
$No = $_POST["No"];
$account = $_POST["account"];
$password = $_POST["password"];
$role = $_POST["role"];

//連接資料庫
$link = @mysqli_connect(
    'localhost',
    'root',
    'will14739LAC',
    'nukim'
);

//綠色:資料表欄位 紅色:php變數
$SQL = "UPDATE member SET No='$No', Account='$account', Password='$password', Role='$role' WHERE No = '$No'";

//資料表查詢
if(mysqli_query($link, $SQL)) {
    echo "更新成功";
}

echo "<br><a href='showdb.php'>查看資料庫資料</a>";

//關閉資料庫連接、釋放資料庫連接佔用的記憶體空間
mysqli_close($link);
?>