<html>
<body>
<?php
if(isset($_POST['send']))
{
echo"Welcome ".$_POST["name"] ."<br>";
echo"You are ".$_POST["age"] ." years old!";
}
?>
</body>
</html>