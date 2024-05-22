<meta charset="utf-8">
<!-- 寄email要兩個php檔案 -->

<h1>廣告信發送系統</h1>

<form action="sendmail.php" method="post">
    請輸入郵件標題:<input type="text" name="subject"><br><br>
    請輸入郵件內容:<textarea rows="10" cols="40" name="content"></textarea><br>
    <input type="submit" value="送出">
</form>

<a href='add.php'>新增資料</a><br>
<a href='showdb.php'>查看資料庫內容</a>