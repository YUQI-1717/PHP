<form action ="" method="post">
<textarea row=10 col=10 name="comment">

</textarea>
<input type="submit">
</form>

<?php
if(isset($_POST["comment"])){
echo addslashes(nl2br($_POST["comment"]));
}
?>