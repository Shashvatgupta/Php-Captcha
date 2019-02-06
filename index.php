<?php
error_reporting(0);
session_start();
$flg=$_REQUEST['flg'];
if($flg==1)
{
echo "Captcha Matched";
}
if($flg==2)
{
echo "Captcha Did not Matched";
}

echo "<br/><br/>";
$c1=rand(65,90);
$c2=rand(91,122);
//$s1=rand(
echo chr($c1);
echo chr($c2);

$_SESSION['secure']=chr($c1).chr($c2);
?>

<!--img src="generate.php" /><br/-->

<form action="index2.php" method="post" />
Type the value what u see <input type="text" name="cap"/><br/>
<input type="submit" value="submit"/>
</form>









