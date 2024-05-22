<meta charset="utf-8">

<?php
//連接資料庫
$db = @mysqli_connect('localhost', 'root', 'will14739LAC', 'ad');

if (!$db) {
    die("資料庫開啟失敗");
}

//資料表-SQL
$sql = "SELECT * FROM member";

//取得sql資料
$result = mysqli_query($db, $sql);

//顯示sql資料
echo "<table border='1'>";
echo "<tr><td>編號</td><td>姓名</td><td>Email</td></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["No"]."</td>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Email"]."</td>";
    echo "<td><a href='delete.php?No=".$row["No"]."'>刪除</a></td>";
    echo "<td><a href='update.php?No=".$row["No"]."'>編輯</a></td></tr>";
}
echo "</table>";

//釋放$result的記憶體空間
mysqli_free_result($result);

//關閉資料庫連接
mysqli_close($db);

echo "<a href='index.php'>回上頁</a>";
?>