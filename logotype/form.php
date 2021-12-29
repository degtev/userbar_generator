<?php
include('settings.php');
?>
<!---форма--->
<form action="result.php" method=GET >
<div align="center">
<?php

?>
</div>

<br />
<!---иконки--->

<div align="center">

<div class="scrollblock">
<?php
if($onic==1)
{
//первый чекнутый ico
echo ("<input type='radio' name='rn' value='1' checked><img src='".$pathic."1.png'/>");
$t=$ticrow;

for ($x=2; $x<=$countic; $x++) 
{
 echo ("<input type='radio' name='rn' value='".$x."'><img src='".$pathic.$x.".png'/>");
   if($t==$x)
	{
	echo ("<br><br>");
	$t+=$ticrow;
	}
}
}
?>
</div>
</div>
<br />

<!---Изображения--->
<div align="center">

<div class="scrollblock">
<?php
//первый чекнутый bg
echo ("<input type='radio' name='bg' value='1' checked><img src='".$pathbg."1.png'/>");
$t=$tbgrow;
for ($x=2; $x<=$countbg; $x++) 
{
echo ("<input type='radio' name='bg' value='".$x."'><img src='".$pathbg.$x.".png'/>");
if($t==$x)
{
echo ("<br>");
$t+=$tbgrow;
}
}
?>
</div>
</div>
<br />

<!---Кнопка подтверждения--->
<div align="center">
 <input type="submit" class="genbtn2" value="Сгенерировать" name="sub" />
</div>
</form>