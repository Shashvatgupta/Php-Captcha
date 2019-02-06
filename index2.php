<?php
session_start();
$abc=$_SESSION['secure'];
$cap=$_POST['cap'];
if($abc==$cap)
{
header("Location:index.php?flg=1");
}
else
{
header("Location:index.php?flg=2");
}
//echo $cap;
?>