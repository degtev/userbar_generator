<?php 
//источники 
include('settings.php');
$format=".png";
$bg= $pathbg.$_GET['bg'].$format;
$rn=$pathic.$_GET['rn'].$format;
//$nick=$_GET['nick'];
//$text1=$_GET['text1'];   
//$text2=$_GET['text2'];
//$text3=$_GET['text3'];
//$clnk=$_GET['clnk']; 
//$cl1=$_GET['cl1'];  
//$cl2=$_GET['cl2'];  
//$cl3=$_GET['cl3'];
 
//создание изображения из PNG-файла

$source = ImageCreateFromPng($bg);  
imagesavealpha($source, true);
if($onic==1)
{
$icon = ImageCreateFromPng($rn); 
//соединяем изображения // Размер иконки выставляется в последних 200, 200, 200, 200
ImageCopyResampled($source, $icon, $icx, $icy, 0, 0, 200, 200, 200, 200);
}

//вешаем хед на тип документа
Header("Content-type: image/png");

//цвет текста ника
//if(strlen($clnk)==6)
//$text_color = imagecolorallocate($source, hexdec(substr($clnk,0,2)), hexdec(substr($clnk,2,2)), hexdec(substr($clnk,4,2)));
//else 
//{
//$R=substr($clnk,0,1).substr($clnk,0,1);
//$G=substr($clnk,1,1).substr($clnk,1,1);
//$B=substr($clnk,2,1).substr($clnk,2,1);
//$text_color = imagecolorallocate($source, hexdec($R), hexdec($G), hexdec($B));
//}

//цвет текста 1
//if(strlen($clnk)==6)
//$text1_color = imagecolorallocate($source, hexdec(substr($cl1,0,2)), hexdec(substr($cl1,2,2)), hexdec(substr($cl1,4,2)));
//else 
//{
//$R=substr($cl1,0,1).substr($cl1,0,1);
//$G=substr($cl1,1,1).substr($cl1,1,1);
//$B=substr($cl1,2,1).substr($cl1,2,1);
//$text1_color = imagecolorallocate($source, hexdec($R), hexdec($G), hexdec($B));
//}

//цвет текста 2
//if(strlen($cl2)==6)
//$text2_color = imagecolorallocate($source, hexdec(substr($cl2,0,2)), hexdec(substr($cl2,2,2)), hexdec(substr($cl2,4,2)));
//else 
//{
//$R=substr($cl2,0,1).substr($cl2,0,1);
//$G=substr($cl2,1,1).substr($cl2,1,1);
//$B=substr($cl2,2,1).substr($cl2,2,1);
//$text2_color = imagecolorallocate($source, hexdec($R), hexdec($G), hexdec($B));
//}

//цвет текста 3
//if(strlen($cl3)==6)
//$text3_color = imagecolorallocate($source, hexdec(substr($cl3,0,2)), hexdec(substr($cl3,2,2)), hexdec(substr($cl3,4,2)));
//else 
//{
//$R=substr($cl3,0,1).substr($cl3,0,1);
//$G=substr($cl3,1,1).substr($cl3,1,1);
//$B=substr($cl3,2,1).substr($cl3,2,1);
//$text3_color = imagecolorallocate($source, hexdec($R), hexdec($G), hexdec($B));
//}


//создаём тексты с внешним шрифтом
//imagettfText($source, $nks, 0, $nkx, $nky ,$text_color, $nkp, $nick);
//imagettfText($source, $t1s, 0, $t1x, $t1y ,$text1_color, $t1p, $text1);
//imagettfText($source, $t2s, 0, $t2x, $t2y ,$text2_color, $t2p, $text2);
//imagettfText($source, $t3s, 0, $t3x, $t3y ,$text3_color, $t3p, $text3);
imagepng($source);
imageDestroy($source);
?>