<?php
session_start();
?>

<html>
<meta charset="utf-8">

<?php
$sID="nuk";
$sPwd="574574";

$uID=$_GET["uID"];
$uPwd=$_GET["uPwd"];

if($sID==$uID && $sPwd==$uPwd){
    setcookie("userName",$uID,time()+36000);
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
ob_flush();

///echo $uID."  ".$uPwd;

?>