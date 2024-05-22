<!-- D:delete -->
<meta charset="utf-8">

<?php
//用$_GET取得從showdb.php傳過來的No值，以確定要刪除的是哪一列
$No = $_GET["No"];
echo "第".$No."筆資料";

//連接資料庫(要變更資料就需連接)
$link = @mysqli_connect(
    'localhost',
    'root',
    'will14739LAC',
    'nukim'
);

//SQL-Delete
$SQL = "DELETE FROM member WHERE No = '$No'";

/*
mysqli_query:資料表查詢
**成功=>true(因為用DELETE會跟SELECT回傳的不一樣，看mysqli_query()的定義)**
失敗=>false
*/
if(mysqli_query($link, $SQL)){
    echo "刪除成功<br>";
}
echo "<a href='showdb.php'>查看資料庫資料</a>";

//關閉資料庫連接、釋放資料庫連接佔用的記憶體空間
mysqli_close($link);
?>