<!-- C:create -->
<meta charset="utf-8">

<?php
//不需要No的原因是設定為auto increment
$role = $_POST["role"];
$account = $_POST["account"];
$pwd = $_POST["pwd"];

//連接資料庫
$link = @mysqli_connect('localhost', 'root', 'will14739LAC', 'nukim');

//SQL-Insert(第一組參數:資料表欄位，第二組參數:php變數)
$SQL = "INSERT INTO member(Role, Account, Password) VALUES('$role', '$account','$pwd')";

//資料表查詢
if(mysqli_query($link, $SQL)) {
    echo "新增成功<br>";
}
echo "<a href='showdb.php'>查看資料庫資料</a>";

//關閉資料庫連接、釋放資料庫連接佔用的記憶體空間
mysqli_close($link);
?>