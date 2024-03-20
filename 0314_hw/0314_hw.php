<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資管晚會報名表</title>
</head>

<body>
    <form action="result.php" method="post">
        <label for="name">請輸入姓名:</label>
        <input type="text" name="name" value="" placeholder="請輸入中文姓名">
        <br><br>
        <label for="id">請輸入學號:</label>
        <input type="text" name="id" value="" placeholder="請輸入學號(8碼)" maxlength="8" required>
        <br><br>
        <label for="email">請輸入Email:</label>
        <input type="email" name="email" placeholder="請輸入高大email帳號" required>
        <br><br>
        <label for="gender">請選擇您的性別:</label>
        <input type="radio" name="gender" value="男">男
        <input type="radio" name="gender" value="女">女
        <br><br>
        請上傳學生證照片:<input type="file" name="file">
        <br><br>
        您的生日:<input type="date" name="date" value="">
        <br><br>
        預計抵達晚會時間:<input type="time" name="time" value="">
        <br><br>
        請選擇參加人數:<input type="number" name="number" value="0" min="0">
        <br><br>
        期待程度:<input type="range" name="range" min="0" max="100" value="50" step="10">
        <br><br>
        請選擇晚會舉辦的地點(可複選):
        <input type="checkbox" name="place[]" value="engineer">工學院
        <input type="checkbox" name="place[]" value="law">法學院
        <input type="checkbox" name="place[]" value="management">管理學院
        <br><br>
        請選擇您打算交換禮物的價格:
        <select name="price[]" multiple> 
            <option value="0~100">0~100</option>
            <option value="100~200">100~200</option>
            <option value="200~300">200~300</option>
        </select>
        <br><br>
        提供意見:<textarea name="comment" value="" rows="10" cols="20"></textarea>
        <br><br>
        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
    </form>

</body>

</html>