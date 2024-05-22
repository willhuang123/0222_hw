<!-- C:create(需要兩個php檔案) -->
<meta charset="utf-8">

<form action="adddb.php" method="post">
    <label for="role">身份:</label>
    <select id="role" name="role" size="1">
        <option value="student">學生</option>
        <option value="admin">管理員</option>
    </select>
    <br><br>
    <label for="account">帳號:</label>
    <input type="text" id="account" name="account">
    <br><br>
    <label for="pwd">密碼:</label>
    <input type="password" id="pwd" name="pwd">
    <br><br>
    <input type="submit" value="提交">
    <input type="reset" value="清除">
    <br><br>
</form>
<a href='success.php'>返回</a>