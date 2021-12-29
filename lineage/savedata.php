<?php

session_start();

$errors = array();

// настройки
require_once 'includes' . DIRECTORY_SEPARATOR . 'config.php';
require_once WORK_DIR . SEP . 'includes' . SEP . 'functions.php';

$type = isset($_POST['type']) ? abs((int) $_POST['type']) : 1;
if (!isset($lineage_types[$type])) {
    $type = 1;
}

// ник
$nick_text = isset($_POST['nick_text']) ? trim($_POST['nick_text']) : '';
$nick_text_color = isset($_POST['nick_text_color']) ? trim($_POST['nick_text_color']) : '';
$nick_font_size = isset($_POST['nick_font_size']) ? abs((int) $_POST['nick_font_size']) : 0;
$nick_font_type = isset($_POST['nick_font_type']) ? abs((int) $_POST['nick_font_type']) : 0;
$nick_border = isset($_POST['nick_border']) ? (bool) $_POST['nick_border'] : true;
$nick_border_color = isset($_POST['nick_border_color']) ? trim($_POST['nick_border_color']) : '';

if (mb_strlen($nick_text, CHARSET) > $fields_max_length['nick']) {
    $nick_text = mb_substr($nick_text, 0, $fields_max_length['nick'], CHARSET);
}

if (!checkHexColor($nick_text_color)) {
    $nick_text_color = 'ffffff';
}

if(!in_array($nick_font_size, $font_sizes)) {
    $nick_font_size = $font_sizes[0];
}

if (!isset($font_types[$nick_font_type])) {
    $nick_font_type = 1;
}

if (!checkHexColor($nick_border_color)) {
    $nick_border_color = 'ffffff';
}



// клан
$clan_text = isset($_POST['clan_text']) ? trim($_POST['clan_text']) : '';
$clan_text_color = isset($_POST['clan_text_color']) ? trim($_POST['clan_text_color']) : '';
$clan_font_size = isset($_POST['clan_font_size']) ? abs((int) $_POST['clan_font_size']) : 0;
$clan_font_type = isset($_POST['clan_font_type']) ? abs((int) $_POST['clan_font_type']) : 0;
$clan_border = isset($_POST['clan_border']) ? (bool) $_POST['clan_border'] : true;
$clan_border_color = isset($_POST['clan_border_color']) ? trim($_POST['clan_border_color']) : '';

if (mb_strlen($clan_text, CHARSET) > $fields_max_length['clan']) {
    $clan_text = mb_substr($clan_text, 0, $fields_max_length['clan'], CHARSET);
}

if (!checkHexColor($clan_text_color)) {
    $clan_text_color = 'ffffff';
}

if(!in_array($clan_font_size, $font_sizes)) {
    $clan_font_size = $font_sizes[0];
}

if (!isset($font_types[$clan_font_type])) {
    $clan_font_type = 1;
}

if (!checkHexColor($clan_border_color)) {
    $clan_border_color = 'ffffff';
}


//ally
$ally_text = isset($_POST['ally_text']) ? trim($_POST['ally_text']) : '';
$ally_text_color = isset($_POST['ally_text_color']) ? trim($_POST['ally_text_color']) : '';
$ally_font_size = isset($_POST['ally_font_size']) ? abs((int) $_POST['ally_font_size']) : 0;
$ally_font_type = isset($_POST['ally_font_type']) ? abs((int) $_POST['ally_font_type']) : 0;
$ally_border = isset($_POST['ally_border']) ? (bool) $_POST['ally_border'] : true;
$ally_border_color = isset($_POST['ally_border_color']) ? trim($_POST['ally_border_color']) : '';

if (mb_strlen($ally_text, CHARSET) > $fields_max_length['ally']) {
    $ally_text = mb_substr($ally_text, 0, $fields_max_length['ally'], CHARSET);
}

if (!checkHexColor($ally_text_color)) {
    $ally_text_color = 'ffffff';
}

if(!in_array($ally_font_size, $font_sizes)) {
    $ally_font_size = $font_sizes[0];
}

if (!isset($font_types[$ally_font_type])) {
    $ally_font_type = 1;
}

if (!checkHexColor($ally_border_color)) {
    $ally_border_color = 'ffffff';
}

//HS
$hs_text = isset($_POST['hs_text']) ? trim($_POST['hs_text']) : '';
$hs_text_color = isset($_POST['hs_text_color']) ? trim($_POST['hs_text_color']) : '';
$hs_font_size = isset($_POST['hs_font_size']) ? abs((int) $_POST['hs_font_size']) : 0;
$hs_font_type = isset($_POST['hs_font_type']) ? abs((int) $_POST['hs_font_type']) : 0;
$hs_border = isset($_POST['hs_border']) ? (bool) $_POST['hs_border'] : true;
$hs_border_color = isset($_POST['hs_border_color']) ? trim($_POST['hs_border_color']) : '';

if (mb_strlen($hs_text, CHARSET) > $fields_max_length['hs']) {
    $hs_text = mb_substr($hs_text, 0, $fields_max_length['hs'], CHARSET);
}

if (!checkHexColor($hs_text_color)) {
    $hs_text_color = 'ffffff';
}

if(!in_array($hs_font_size, $font_sizes)) {
    $hs_font_size = $font_sizes[0];
}

if (!isset($font_types[$hs_font_type])) {
    $hs_font_type = 1;
}

if (!checkHexColor($hs_border_color)) {
    $hs_border_color = 'ffffff';
}

//weapon
$weapon_text = isset($_POST['weapon_text']) ? trim($_POST['weapon_text']) : '';
$weapon_text_color = isset($_POST['weapon_text_color']) ? trim($_POST['weapon_text_color']) : '';
$weapon_font_size = isset($_POST['weapon_font_size']) ? abs((int) $_POST['weapon_font_size']) : 0;
$weapon_font_type = isset($_POST['weapon_font_type']) ? abs((int) $_POST['weapon_font_type']) : 0;
$weapon_border = isset($_POST['weapon_border']) ? (bool) $_POST['weapon_border'] : true;
$weapon_border_color = isset($_POST['weapon_border_color']) ? trim($_POST['weapon_border_color']) : '';

if (mb_strlen($weapon_text, CHARSET) > $fields_max_length['weapon']) {
    $weapon_text = mb_substr($weapon_text, 0, $fields_max_length['weapon'], CHARSET);
}

if (!checkHexColor($weapon_text_color)) {
    $weapon_text_color = 'ffffff';
}

if(!in_array($weapon_font_size, $font_sizes)) {
    $weapon_font_size = $font_sizes[0];
}

if (!isset($font_types[$weapon_font_type])) {
    $weapon_font_type = 1;
}

if (!checkHexColor($weapon_border_color)) {
    $weapon_border_color = 'ffffff';
}


//server
$server_text = isset($_POST['server_text']) ? trim($_POST['server_text']) : '';
$server_text_color = isset($_POST['server_text_color']) ? trim($_POST['server_text_color']) : '';
$server_font_size = isset($_POST['server_font_size']) ? abs((int) $_POST['server_font_size']) : 0;
$server_font_type = isset($_POST['server_font_type']) ? abs((int) $_POST['server_font_type']) : 0;
$server_border = isset($_POST['server_border']) ? (bool) $_POST['server_border'] : true;
$server_border_color = isset($_POST['server_border_color']) ? trim($_POST['server_border_color']) : '';

if (mb_strlen($server_text, CHARSET) > $fields_max_length['server']) {
    $server_text = mb_substr($server_text, 0, $fields_max_length['server'], CHARSET);
}

if (!checkHexColor($server_text_color)) {
    $server_text_color = 'ffffff';
}

if(!in_array($server_font_size, $font_sizes)) {
    $server_font_size = $font_sizes[0];
}

if (!isset($font_types[$server_font_type])) {
    $server_font_type = 1;
}

if (!checkHexColor($server_border_color)) {
    $server_border_color = 'ffffff';
}

//lvl_first
$lvl_text = isset($_POST['lvl_text']) ? trim($_POST['lvl_text']) : '';
$lvl_text_color = isset($_POST['lvl_text_color']) ? trim($_POST['lvl_text_color']) : '';
$lvl_font_size = isset($_POST['lvl_font_size']) ? abs((int) $_POST['lvl_font_size']) : 0;
$lvl_font_type = isset($_POST['lvl_font_type']) ? abs((int) $_POST['lvl_font_type']) : 0;
$lvl_border = isset($_POST['lvl_border']) ? (bool) $_POST['lvl_border'] : true;
$lvl_border_color = isset($_POST['lvl_border_color']) ? trim($_POST['lvl_border_color']) : '';

if (mb_strlen($lvl_text, CHARSET) > $fields_max_length['lvl']) {
    $lvl_text = mb_substr($lvl_text, 0, $fields_max_length['lvl'], CHARSET);
}

if (!checkHexColor($lvl_text_color)) {
    $lvl_text_color = 'ffffff';
}

if(!in_array($lvl_font_size, $font_sizes)) {
    $lvl_font_size = $font_sizes[0];
}

if (!isset($font_types[$lvl_font_type])) {
    $lvl_font_type = 1;
}

if (!checkHexColor($lvl_border_color)) {
    $lvl_border_color = 'ffffff';
}

//lvl_1
$lvl1_text = isset($_POST['lvl1_text']) ? trim($_POST['lvl1_text']) : '';
$lvl1_text_color = isset($_POST['lvl1_text_color']) ? trim($_POST['lvl1_text_color']) : '';
$lvl1_font_size = isset($_POST['lvl1_font_size']) ? abs((int) $_POST['lvl1_font_size']) : 0;
$lvl1_font_type = isset($_POST['lvl1_font_type']) ? abs((int) $_POST['lvl1_font_type']) : 0;
$lvl1_border = isset($_POST['lvl1_border']) ? (bool) $_POST['lvl1_border'] : true;
$lvl1_border_color = isset($_POST['lvl1_border_color']) ? trim($_POST['lvl1_border_color']) : '';

if (mb_strlen($lvl1_text, CHARSET) > $fields_max_length['lvl1']) {
    $lvl1_text = mb_substr($lvl1_text, 0, $fields_max_length['lvl1'], CHARSET);
}

if (!checkHexColor($lvl1_text_color)) {
    $lvl1_text_color = 'ffffff';
}

if(!in_array($lvl1_font_size, $font_sizes)) {
    $lvl1_font_size = $font_sizes[0];
}

if (!isset($font_types[$lvl1_font_type])) {
    $lvl1_font_type = 1;
}

if (!checkHexColor($lvl1_border_color)) {
    $lvl1_border_color = 'ffffff';
}

//lvl_2
$lvl2_text = isset($_POST['lvl2_text']) ? trim($_POST['lvl2_text']) : '';
$lvl2_text_color = isset($_POST['lvl2_text_color']) ? trim($_POST['lvl2_text_color']) : '';
$lvl2_font_size = isset($_POST['lvl2_font_size']) ? abs((int) $_POST['lvl2_font_size']) : 0;
$lvl2_font_type = isset($_POST['lvl2_font_type']) ? abs((int) $_POST['lvl2_font_type']) : 0;
$lvl2_border = isset($_POST['lvl2_border']) ? (bool) $_POST['lvl2_border'] : true;
$lvl2_border_color = isset($_POST['lvl2_border_color']) ? trim($_POST['lvl2_border_color']) : '';

if (mb_strlen($lvl2_text, CHARSET) > $fields_max_length['lvl2']) {
    $lvl2_text = mb_substr($lvl2_text, 0, $fields_max_length['lvl2'], CHARSET);
}

if (!checkHexColor($lvl2_text_color)) {
    $lvl2_text_color = 'ffffff';
}

if(!in_array($lvl2_font_size, $font_sizes)) {
    $lvl2_font_size = $font_sizes[0];
}

if (!isset($font_types[$lvl2_font_type])) {
    $lvl2_font_type = 1;
}

if (!checkHexColor($lvl2_border_color)) {
    $lvl2_border_color = 'ffffff';
}

//lvl_3
$lvl3_text = isset($_POST['lvl3_text']) ? trim($_POST['lvl3_text']) : '';
$lvl3_text_color = isset($_POST['lvl3_text_color']) ? trim($_POST['lvl3_text_color']) : '';
$lvl3_font_size = isset($_POST['lvl3_font_size']) ? abs((int) $_POST['lvl3_font_size']) : 0;
$lvl3_font_type = isset($_POST['lvl3_font_type']) ? abs((int) $_POST['lvl3_font_type']) : 0;
$lvl3_border = isset($_POST['lvl3_border']) ? (bool) $_POST['lvl3_border'] : true;
$lvl3_border_color = isset($_POST['lvl3_border_color']) ? trim($_POST['lvl3_border_color']) : '';

if (mb_strlen($lvl3_text, CHARSET) > $fields_max_length['lvl3']) {
    $lvl3_text = mb_substr($lvl3_text, 0, $fields_max_length['lvl3'], CHARSET);
}

if (!checkHexColor($lvl3_text_color)) {
    $lvl3_text_color = 'ffffff';
}

if(!in_array($lvl3_font_size, $font_sizes)) {
    $lvl3_font_size = $font_sizes[0];
}

if (!isset($font_types[$lvl3_font_type])) {
    $lvl3_font_type = 1;
}

if (!checkHexColor($lvl3_border_color)) {
    $lvl3_border_color = 'ffffff';
}


// прочие
$icon1 = isset($_POST['icon1']) ? abs((int) $_POST['icon1']) : 0;
$icon2 = isset($_POST['icon2']) ? abs((int) $_POST['icon2']) : 0;
$icon3 = isset($_POST['icon3']) ? abs((int) $_POST['icon3']) : 0;
$icon4 = isset($_POST['icon4']) ? abs((int) $_POST['icon4']) : 0;
$icon5 = isset($_POST['icon5']) ? abs((int) $_POST['icon5']) : 0;
$icon6 = isset($_POST['icon5']) ? abs((int) $_POST['icon6']) : 0;
$background = isset($_POST['background']) ? abs((int) $_POST['background']) : 0;
$icon_choose = isset($_POST['icon_choose']) ? (bool) $_POST['icon_choose'] : false;


// иконки1 из папки
$icons1 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons1');
// иконки2 из папки
$icons2 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons2');
// иконки3 из папки
$icons3 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons3');
// иконки4 из папки
$icons4 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons4');
// иконки5 из папки
$icons5 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons5');
// иконки6 из папки
$icons6 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons6');
// фоны из папки
$backgrounds = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'backgrounds');


if (!isset($icons1[$icon1])) {
    // ставим первую иконку
    $temp = array_keys($icons1);
    $icon1 = $temp[0];
}

if (!isset($icons2[$icon2])) {
    // ставим 2 иконку
    $temp = array_keys($icons2);
    $icon2 = $temp[0];
}

if (!isset($icons3[$icon3])) {
    // ставим 3 иконку
    $temp = array_keys($icons3);
    $icon3 = $temp[0];
}

if (!isset($icons4[$icon4])) {
    // ставим 4 иконку
    $temp = array_keys($icons4);
    $icon4 = $temp[0];
}

if (!isset($icons5[$icon5])) {
    // ставим 5 иконку
    $temp = array_keys($icons5);
    $icon5 = $temp[0];
}

if (!isset($icons6[$icon6])) {
    // ставим 6 иконку
    $temp = array_keys($icons6);
    $icon6 = $temp[0];
}

if (!isset($backgrounds[$background])) {
    // ставим первый фон
    $temp = array_keys($backgrounds);
    $background = $temp[0];
}

$_SESSION['lineage']['type'] = $type;

// ник
$_SESSION['lineage']['nick_text'] = $nick_text;
$_SESSION['lineage']['nick_text_color'] = $nick_text_color;
$_SESSION['lineage']['nick_font_size'] = $nick_font_size;
$_SESSION['lineage']['nick_font_type'] = $nick_font_type;
$_SESSION['lineage']['nick_border_color'] = $nick_border_color;
$_SESSION['lineage']['nick_border'] = $nick_border;

// клан
$_SESSION['lineage']['clan_text'] = $clan_text;
$_SESSION['lineage']['clan_text_color'] = $clan_text_color;
$_SESSION['lineage']['clan_font_size'] = $clan_font_size;
$_SESSION['lineage']['clan_font_type'] = $clan_font_type;
$_SESSION['lineage']['clan_border_color'] = $clan_border_color;
$_SESSION['lineage']['clan_border'] = $clan_border;

// ally
$_SESSION['lineage']['ally_text'] = $ally_text;
$_SESSION['lineage']['ally_text_color'] = $ally_text_color;
$_SESSION['lineage']['ally_font_size'] = $ally_font_size;
$_SESSION['lineage']['ally_font_type'] = $ally_font_type;
$_SESSION['lineage']['ally_border_color'] = $ally_border_color;
$_SESSION['lineage']['ally_border'] = $ally_border;

// hs
$_SESSION['lineage']['hs_text'] = $hs_text;
$_SESSION['lineage']['hs_text_color'] = $hs_text_color;
$_SESSION['lineage']['hs_font_size'] = $hs_font_size;
$_SESSION['lineage']['hs_font_type'] = $hs_font_type;
$_SESSION['lineage']['hs_border_color'] = $hs_border_color;
$_SESSION['lineage']['hs_border'] = $hs_border;

// weapon
$_SESSION['lineage']['weapon_text'] = $weapon_text;
$_SESSION['lineage']['weapon_text_color'] = $weapon_text_color;
$_SESSION['lineage']['weapon_font_size'] = $weapon_font_size;
$_SESSION['lineage']['weapon_font_type'] = $weapon_font_type;
$_SESSION['lineage']['weapon_border_color'] = $weapon_border_color;
$_SESSION['lineage']['weapon_border'] = $weapon_border;

// server
$_SESSION['lineage']['server_text'] = $server_text;
$_SESSION['lineage']['server_text_color'] = $server_text_color;
$_SESSION['lineage']['server_font_size'] = $server_font_size;
$_SESSION['lineage']['server_font_type'] = $server_font_type;
$_SESSION['lineage']['server_border_color'] = $server_border_color;
$_SESSION['lineage']['server_border'] = $server_border;

// lvl first
$_SESSION['lineage']['lvl_text'] = $lvl_text;
$_SESSION['lineage']['lvl_text_color'] = $lvl_text_color;
$_SESSION['lineage']['lvl_font_size'] = $lvl_font_size;
$_SESSION['lineage']['lvl_font_type'] = $lvl_font_type;
$_SESSION['lineage']['lvl_border_color'] = $lvl_border_color;
$_SESSION['lineage']['lvl_border'] = $lvl_border;

// lvl 1
$_SESSION['lineage']['lvl1_text'] = $lvl1_text;
$_SESSION['lineage']['lvl1_text_color'] = $lvl1_text_color;
$_SESSION['lineage']['lvl1_font_size'] = $lvl1_font_size;
$_SESSION['lineage']['lvl1_font_type'] = $lvl1_font_type;
$_SESSION['lineage']['lvl1_border_color'] = $lvl1_border_color;
$_SESSION['lineage']['lvl1_border'] = $lvl1_border;

// lvl 2
$_SESSION['lineage']['lvl2_text'] = $lvl2_text;
$_SESSION['lineage']['lvl2_text_color'] = $lvl2_text_color;
$_SESSION['lineage']['lvl2_font_size'] = $lvl2_font_size;
$_SESSION['lineage']['lvl2_font_type'] = $lvl2_font_type;
$_SESSION['lineage']['lvl2_border_color'] = $lvl2_border_color;
$_SESSION['lineage']['lvl2_border'] = $lvl2_border;

// lvl 3
$_SESSION['lineage']['lvl3_text'] = $lvl3_text;
$_SESSION['lineage']['lvl3_text_color'] = $lvl3_text_color;
$_SESSION['lineage']['lvl3_font_size'] = $lvl3_font_size;
$_SESSION['lineage']['lvl3_font_type'] = $lvl3_font_type;
$_SESSION['lineage']['lvl3_border_color'] = $lvl3_border_color;
$_SESSION['lineage']['lvl3_border'] = $lvl3_border;

// прочее
$_SESSION['lineage']['background'] = $background;
$_SESSION['lineage']['icon1'] = $icon1;
$_SESSION['lineage']['icon2'] = $icon2;
$_SESSION['lineage']['icon3'] = $icon3;
$_SESSION['lineage']['icon4'] = $icon4;
$_SESSION['lineage']['icon5'] = $icon5;
$_SESSION['lineage']['icon6'] = $icon6;
$_SESSION['lineage']['icon_choose'] = $icon_choose;


echo json_encode(array(
    'errors' => isset($errors[0]) ? $errors[0] : ''
));



