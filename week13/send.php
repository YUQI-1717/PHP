<?php
// 引入PHPMailer類
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// 資料庫配置
$servername = "localhost";
$username = "root";
$password = getenv('DB_PASSWORD'); // 使用環境變量存儲資料庫密碼
$dbname = "email";

// 創建資料庫連接
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 從資料庫中獲取電子郵件地址
$sql = "SELECT Email FROM email2";
$result = $conn->query($sql);

$to = filter_input(INPUT_POST, 'to', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
$content = nl2br($content);
$content .= "<br>";
$content .= "<img src='https://www.nuk.edu.tw/var/file/0/1000/img/147/logo.png'>";

// 創建PHPMailer實例，`true`表示啟用異常
$mail = new PHPMailer(true);

try {
    // 服務器設置
    $mail->SMTPDebug = SMTP::DEBUG_OFF; // 關閉詳細調試輸出
    $mail->isSMTP(); // 使用SMTP發送郵件
    $mail->Host = 'smtp.gmail.com'; // 設置SMTP服務器地址
    $mail->SMTPAuth = true; // 啟用SMTP認證
    $mail->Username = 'angela93610@gmail.com'; // SMTP用戶名
    $mail->Password = getenv('SMTP_PASSWORD'); // 使用環境變量存儲SMTP密碼
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // 啟用TLS加密
    $mail->Port = 465; // 連接端口
    $mail->CharSet = 'utf-8';

    // 收件人
    $mail->setFrom('angela93610@gmail.com', 'Mailer');
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mail->addAddress($row['Email']);
        }
    }
    $mail->addReplyTo('angela93610@gmail.com', 'Information');

    // 郵件內容
    $mail->isHTML(true); // 設置郵件格式為HTML
    $mail->Subject = $subject;
    $mail->Body = $content;

    $mail->send();
    echo '郵件已發送!';
} catch (Exception $e) {
    echo "郵件發送失敗。錯誤信息: {$mail->ErrorInfo}";
} finally {
    $conn->close(); // 關閉資料庫連接
}
?>
