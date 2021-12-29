<?php
session_start();
require_once 'includes' . DIRECTORY_SEPARATOR . 'config.php';
require_once WORK_DIR . SEP . 'includes' . SEP . 'functions.php';
$type = isset($_GET['type']) ? abs((int) $_GET['type']) : 1;
if (!isset($lineage_types[$type])) {
    header('Location: ' . $_SERVER['PHP_SELF'] . '?type=1');
    exit();
}
require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'icons1_names.php';
require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'icons2_names.php';
require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'icons3_names.php';
require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'icons4_names.php';
require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'icons5_names.php';
require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'icons6_names.php';
require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'backgrounds_names.php';
$icons1 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons1');
$icons2 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons2');
$icons3 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons3');
$icons4 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons4');
$icons5 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons5');
$icons6 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons6');
$backgrounds = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'backgrounds');
?>
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="keywords" content="юзербары, сделать юзербар, создание юзербаров,подпись на форум, онлайн юзербар, программа для создания юзербара, point blank, pointblank, apb, поинт бланк юзербар" />
<meta name="description" content="на сайте можно сделать юзербар,как создать юзербар, скачать юзербар онлайн, юзербар генератор, подпись на форум, анимированный юзербар, это онлайн создание юзербара" />
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<title>Юзер-Бар.рф | Онлайн генератор юзербаров, аватарок</title>
<link href="site.css" type="text/css" rel="stylesheet" />
<link href="files/css/main_styles.css" rel="stylesheet" type="text/css">
<link href="files/css/colorpicker.css" rel="stylesheet" type="text/css">
<link href="files/css/jquery.Jcrop.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="files/js/main.js"></script>
<script type="text/javascript" src="files/js/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="files/js/crop/jquery.Jcrop.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
<div class="hd2"></div>
<div class="logo"><a href="http://vk.com/ubdb_rf"><div class="vk"></div></a></div>

<div id="stats">
    <div class="s-all">Сгенерировано всего: ???</div>
    <div class="s-time">Начиная с: dd.MM.yyyy</div>
    <div class="s-all-time">Последний в: hh:mm/dd.MM</div>
    <div class="s-game">Для игры: ???</div>
</div>
<ul class="main-nav">
    <li><a href="/">Главная</a></li>
    <li><a href="/logotype/index.php">Генератор <span>логотипов</span></a></li>
    <li><a href="/pebulator.php">Пэбулятор</a></li>
    <li><a href="/gallery/index.php">Галерея</a></li>
    <li><a href="/comments.php">Комментарии</a></li>
</ul>
<div class="wrapper">
<div class="tabs-divider"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line Age2</span></div>

<div id="game">

  <div id="imgsize">
					<div class="sizelink"><a href="/pb/generator.php?type=1" target="_blank">400 x 63</a></div>
	</div>
 <div id="generator-block">
					<div style="width: 900px; margin: 0px auto">
            <div class="main_block">
                 Размер (<?php echo $lineage_types[$type]['width']; ?> x <?php echo $lineage_types[$type]['height']; ?>)
            </div>
                   <?php require_once WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'php' . SEP . 'form.php'; ?>
            <div class="main_block">
                <table style="padding: 0px; margin: 0px; width: 100%; border-spacing: 0px">
                    <tr>
                        <td style="width: 130px">

                        </td>
                        <td style="text-align: center">
                            <div id="generated_image"></div>
                        </td>
                        <td style="width: 130px; text-align: right">
                            <input type="button" onclick="generatelineage(<?php echo isset($_GET['type']) ? $_GET['type'] : 1; ?>);" name="generate" value="Получить картинку" class="input_button"/>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
		</div>
		<br/><br/><br/><br/><br/><br/>
</div>
</div>
<div class="footer">
<div class="gridContainer clearfix">
<span style="font-family: Tahoma; font-size: 14px; color:#a1a1a1; position: relative; top: 40px; left: 320px;">© Онлайн генератор юзербаров «Юзер-Бар» 2011-2013г.</span>
</div>
</div>
</body>
</html>
