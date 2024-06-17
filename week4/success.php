<?php
session_start();
?>


<html>
<meta charset="utf-8">

<?php
if($_SESSION["check"]=="Yes"){
    echo "歡迎進入網頁";
    echo"<a href='logout.php'>登出</a>";
}else{
    echo "非法進入網頁";
    echo "3秒鐘之後回到登入頁面";
    header("Refresh:3;url=login.php");

}
//echo "歡迎進入登入成功的系統";


?>