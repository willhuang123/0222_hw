<meta charset="utf-8">

<?php 
$no = $_GET["No"];

//連接資料庫
$db = @mysqli_connect('localhost', 'root', 'will14739LAC', 'ad');

if(!$db) {
    die("資料庫連接失敗");
}

//資料表-SQL
$sql = "DELETE FROM member WHERE No = '$no'";

//資料表查詢
if(mysqli_query($db, $sql)) {
    echo "第".$no."筆資料刪除成功<br>";
}

//關閉資料庫連接
mysqli_close($db);

echo "<a href='index.php'>回首頁</a>";
?>