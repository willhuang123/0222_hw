<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if ($_POST["name"] != "") 
        {
            $name = $_POST["name"];
            echo "姓名:".$name."<br>";
        } 
        else 
        {
            echo "未輸入姓名資料"."<br>";
        }

        $id = $_POST["id"];
        echo "學號:".$id."<br>";
    
        $email = $_POST["email"];
        echo "Email:".$email."<br>";

        $gender = $_POST["gender"];
        echo "性別:".$gender."<br>";

        $file = $_POST["file"];
        echo "檔案:".$file."<br>";

        $date = $_POST["date"];
        echo "生日:".$date."<br>";

        $time = $_POST["time"];
        echo "到場時間:".$time."<br>";

        $number = $_POST["number"];
        echo "參加人數:".$number."<br>";

        $range = $_POST["range"];
        echo "程度:".$range."<br>";

        $place = $_POST["place"];
        echo "場地:";
        foreach($place as $value)
        {
            echo $value." ";
        }
        echo "<br>";
        
        $price = $_POST["price"];
        echo "禮物價格:";
        foreach($price as $value)
        {
            echo $value." ";
        }
        echo "<br>";

        $comment = $_POST["comment"];
        echo "建議:".$comment."<br>";
    ?>
</body>

</html>