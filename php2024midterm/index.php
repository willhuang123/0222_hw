<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高大資管論文投稿系統</title>
</head>

<body>
    <form action="check.php" method="post">
        <h1>高大資管論文投稿系統</h1>
        <!-- 下拉式清單方塊(單選) -->
        請選擇您的角色:
        <select id="role" name="role" size="1">
            <option value="Chair">Chair</option>
            <option value="Reviewer">Reviewer</option>
            <option value="Author">Author</option>
        </select>
        <br>
        <label for="id">帳號:</label>
        <input type="text" id="id" name="id" required>
        <br>
        <label for="pwd">密碼:</label>
        <input type="password" id="pwd" name="pwd" required>
        <br>
        <input type="submit" value="提交">
        <?php 
        if(isset($_COOKIE["ID"])) { 
            echo "帳號",$_COOKIE["ID"],"<br>";
        } else {
            echo "這是第一次進入網站<br>";
        }
        ?>
    </form>
    <?php include("include.inc"); ?>
</body>

</html>