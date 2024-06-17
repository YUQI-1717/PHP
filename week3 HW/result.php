<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單內容</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }
        
        h1,
        h2,
        h3,
        p {
            text-align: center;
        }
    </style>
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
        echo "<h3>意見</h3>";
        echo "想法：" . $_POST["talking"] . "<br>";
    }
    ?>
</body>

</html>