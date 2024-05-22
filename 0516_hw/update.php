<meta charset="utf-8">

<?php
$no = $_GET["No"];

//連接資料庫
$db = @mysqli_connect('localhost', 'root', 'will14739LAC', 'ad');

if(!$db) {
    die("資料庫開啟失敗");
}

//資料表-SQL(選出要編輯的那列)
$sql = "SELECT * FROM member WHERE No = '$no'";

//取出各欄位值，以便之後自動填入
if($result = mysqli_query($db, $sql)) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["Name"];
    $email = $row["Email"];
}

//釋放$result的記憶體空間
mysqli_free_result($result);

//關閉資料庫連接
mysqli_close($db);
?>

<form action="updatedb.php" method="post">
    <!-- echo!!! -->
    第<?php echo $no ?>筆資料<br>
    <!-- 用hidden傳遞$no -->
    <input type="hidden" name="No" value="<?php echo $no ?>">
    姓名:<input type="text" name="Name" value="<?php echo $name ?>"><br>
    Email:<input type="email" name="Email" value="<?php echo $email ?>"><br>
    <input type="reset" value="清除">
    <input type="submit" value="送出">
</form>
<a href='showdb.php'>回上頁</a>