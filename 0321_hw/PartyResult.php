<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>報名表填寫結果</title>
</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] != "Yes") {
                header("Location:fail.php");
            }
        } else {
            header("Location:fail.php");
        }

        // text
        if(isset($_POST["id"])) {
            $id = $_POST["id"];
            echo "學號:".$id."<br>";
        } else {
            echo "未輸入學號"."<br>";
        }

        if($_POST["name"] != "") {
            $name = $_POST["name"];
            echo "姓名:".$name."<br>";
        } else {
            echo "未輸入姓名"."<br>";
        }
        
        // email
        if($_POST["email"] != "") {
            $email = $_POST["email"];
            echo "電子郵件:".$email."<br>";
        } else {
            echo "未輸入電子郵件"."<br>";
        }

        //選擇鈕
        if(isset($_POST["gender"])) {
            $gender = $_POST["gender"];
            echo "性別:".$gender."<br>";
        } else {
            echo "未選擇性別"."<br>";
        }

        // 核取方塊(複選)
        if(isset($_POST["event"])) {
            $event = $_POST["event"];   
            echo "活動:".implode(", ", $event);
        } else {
            echo "未選取活動";
        }
        echo "<br>";

        // 下拉式清單方塊(單選)
        $transport = $_POST["transport"];
        if($transport != "") {
            echo "交通方式:".$transport."<br>";
        } else {
            echo "未選擇交通方式<br>";
        }

        // 清單方塊(單選)
        $place = $_POST["place"];
        if($place != "") {
            echo "場地位置:".$place."<br>";
        } else {
            echo "未選擇場地位置<br>";
        }

        // 清單方塊(複選)
        if(isset($_POST["attendee"])) {
            $attendee = $_POST["attendee"];
            echo "參與人:";
            $count = count($attendee);
            for($i = 0 ; $i < $count ; $i++) {
                if($i < $count - 1) { 
                    echo $attendee[$i].", ";
                } else {
                    echo $attendee[$i]."<br>";
                }
            }
        } else {
            echo "未選擇參與人<br>";
        }
        
        // time
        $time = $_POST["time"];
        echo "到場時間:".$time."<br>";

        // number
        $number = $_POST["number"];
        echo "參加人數:".$number."<br>";

        // range
        $range = $_POST["range"];
        echo "程度:".$range."<br>";

        // 多行文字方塊
        $comment = $_POST["comment"];
        echo "建議:".$comment."<br>";
    ?>
</body>

</html>