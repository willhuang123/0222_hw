<meta charset='utf8'>

<?php
//顯示檔案相關資訊(用$_FILES["myFile"]的結合陣列)
echo "檔案名稱: " . $_FILES["myFile"]["name"] . "<br>";
echo "檔案檔名: " . $_FILES["myFile"]["tmp_name"] . "<br>";
echo "檔案尺寸: " . $_FILES["myFile"]["size"] . "<br>";
echo "檔案種類: " . $_FILES["myFile"]["type"] . "<br>";

/*
檔案上傳流程:上傳的檔案會先存成tmp檔->利用copy()將tmp檔儲存成伺服器檔案
*/

//利用上傳時間作為檔名
//用PATHINFO_EXTENSION取得副檔名，並存入ext
echo $ext = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);

//取得上傳時間，合併成檔名$upname
$upname = time(). "." . $ext;

//自行建立pic目錄，讓檔案存入pic
//因為程式和pic在同目錄下，所以前面不用加路徑，\\是因為跳脫字元
$upname = "pic\\".$upname;
echo $upname;

/*
用copy()將tmp檔儲存成伺服器檔案
unlink():刪除tmp檔
(檢驗:執行後目錄出現檔案)
*/
if(copy($_FILES["myFile"]["tmp_name"], $upname)) {
    echo "檔案上傳成功";
    unlink($_FILES["myFile"]["tmp_name"]);
}

echo "<br><a href='upload.php'>回上一頁</a><br>";
echo "<a href='login.php'>回首頁</a>";
?>