<!-- R:read -->
<meta charset='utf8'>

<?php
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

//取得資料表內容
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["No"] . "</td>";
    echo "<td>" . $row["Account"] . "</td>";
    echo "<td>" . $row["Password"] . "</td>";
    echo "<td>" . $row["Role"] . "</td>";
    echo "<td><a href='del.php?No=" . $row["No"] . "'>刪除</a></td>";
}

//釋放結果物件佔用的記憶體空間
mysqli_free_result($result);
echo "</table>";

echo "<a href='success.php'>回成功頁面</a><br>";

//關閉資料庫連接、釋放資料庫連接佔用的記憶體空間
mysqli_close($link);
?>