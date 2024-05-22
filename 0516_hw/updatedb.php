<meta charset="utf-8">

<?php
$no = $_POST["No"];
$name = $_POST["Name"];
$email = $_POST["Email"];

//連接資料庫
$db = @mysqli_connect('localhost', 'root', 'will14739LAC', 'ad');

if(!$db) {
    die("資料庫連接失敗");
}

//資料表-SQL
$sql = "UPDATE member SET Name='$name', Email='$email' WHERE No='$no'";

//資料表查詢
if(mysqli_query($db, $sql)) {
    echo "更新成功<br>";
}

//關閉資料庫連接
mysqli_close($db);

echo "<a href='index.php'>回首頁</a>";
?>