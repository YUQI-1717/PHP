<meta charset='utf-8'>

<?php
$No=$_GET["No"];

//連接資料庫
$link = @mysqli_connect(
    'localhost', //MySQL主機名稱
    'root', //使用者名稱
    '', //密碼
    'school');  //預設使用的資料庫名稱

//SQL語法
$SQL="DELETE * FROM student WHERE No='$No'";
if($result = musqli_query($link,$SQL)){
    $row=mysqli_fetch_assoc($result);
    $Name=$row["Name"];
    $Department=$row["Department"];
}
?>

<form action="updatecheck.php" mathod="post">

編號：<?php echo $No ?><inpute type="hidden" name="uNo" value='<?php echo $No ?>'></br>
姓名：<inpute type="text" name="uName" value="<?php echo $Name ?>"><br/>
系所：<inpute type="text" name="uDept" value="<?php echo $Department ?>"><br/>
<inpute type="submit">

</form>