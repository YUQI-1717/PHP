<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單內容</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h1>報名成功</h1>";
        echo "<h2>表單內容如下：</h2>";
        echo "<h3>基本資料</h3>";
        echo "學號：" . $_POST["user_acc"] . "<br>";
        echo "電子郵件：" . $_POST["user_email"] . "<br>";
        echo "密碼：" . $_POST["user_paswd"] . "<br>";
        echo "性別：" . $_POST["gender"] . "<br>";     
        echo "<h3>您提議的服裝</h3>";
        if (isset($_POST["fashion"])) {
            $fashions = $_POST["fashion"];
            foreach ($fashions as $fashion) {
                echo $fashion . "<br>";
            }
        }
        echo "<h3>意見</h3>";
        echo "想法：" . $_POST["talking"] . "<br>";
    }
    ?>
</body>

</html>