<meta charset="utf-8">

<form action="check.php" method="get">

帳號：<input type="text" name="uID"><br/>
密碼：<input type="password" name="uPwd"><br/>
<input type="submit">

</form>

<?php
//header("Refresh:1");
date_default_timezone_set("Asia/Taipei");
echo date("Y/M/d H:i:s");
?>
