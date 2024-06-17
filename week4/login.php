<?php
include("setting.inc");
?>

<form action="check.php" method="get">
帳號：<input type="text" name="uID"><br/>
密碼：<input type="password" name="uPwd"><br/>
<input type="submit">

</form>

<?php

if(isset($_COOKIE["userName"])){
    echo $_COOKIE["userName"]."歡迎回來";
}else{
    echo "這是你第一次到網站";
}

?>
</html>