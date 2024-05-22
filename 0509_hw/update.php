<!-- U:update(需要兩個php檔案) -->
<meta charset='utf8'>

<?php
//用$_GET取得從index.php傳過來的No值，以確定要編輯的是哪一列
$No = $_GET["No"];
echo "目前編輯內容: 第".$No."筆資料";

//連接資料庫
$link = @mysqli_connect(
    'localhost',
    'root',
    'will14739LAC',
    'nukim'
);

//SQL-選出No='$No'的所有欄位
$SQL = "SELECT * FROM member WHERE No = '$No'";

//因為SELECT，mysqli_query成功時回傳結果物件，儲存到$result
if($result = mysqli_query($link, $SQL)){
    //從$result取出該筆資料(其實就一筆)，並存入結合陣列$row
    $row = mysqli_fetch_assoc($result);
    /*
    取出欲修改的資料列的各欄位
    目的:讓表單欄位自動帶入原始值，方便使用者修改
    */
    $account = $row["Account"];
    $password = $row["Password"];
}
//釋放結果物件佔用的記憶體空間
mysqli_free_result($result);

//關閉資料庫連接、釋放資料庫連接佔用的記憶體空間
mysqli_close($link);
?>

<!-- 表單欄位 -->
<form action="updatecheck.php" method="post">
    <!-- hidden: 為了將$No傳給updatecheck.php，讓updatecheck.php知道要改哪一列 -->
    編號:<?php echo $No?><input type="hidden" name="No" value="<?php echo $No?>"><br>
    身份:
    <select id="role" name="role" size="1">
        <option value="student">學生</option>
        <option value="admin">管理員</option>
    </select><br>
    帳號:<input type="text" name="account" value="<?php echo $account?>"><br>
    密碼:<input type="text" name="password" value="<?php echo $password?>"><br>
    <input type="submit" value="提交">
</form>
<a href='success.php'>返回成功頁面</a>