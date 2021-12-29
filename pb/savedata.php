<?php

session_start();

$errors = array();

// настройки
require_once 'includes' . DIRECTORY_SEPARATOR . 'config.php';
require_once WORK_DIR . SEP . 'includes' . SEP . 'functions.php';

$type = isset($_POST['type']) ? abs((int) $_POST['type']) : 1;
if (!isset($pb_types[$type])) {
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


//KD
$kd_text = isset($_POST['kd_text']) ? trim($_POST['kd_text']) : '';
$kd_text_color = isset($_POST['kd_text_color']) ? trim($_POST['kd_text_color']) : '';
$kd_font_size = isset($_POST['kd_font_size']) ? abs((int) $_POST['kd_font_size']) : 0;
$kd_font_type = isset($_POST['kd_font_type']) ? abs((int) $_POST['kd_font_type']) : 0;
$kd_border = isset($_POST['kd_border']) ? (bool) $_POST['kd_border'] : true;
$kd_border_color = isset($_POST['kd_border_color']) ? trim($_POST['kd_border_color']) : '';

if (mb_strlen($kd_text, CHARSET) > $fields_max_length['kd']) {
    $kd_text = mb_substr($kd_text, 0, $fields_max_length['kd'], CHARSET);
}

if (!checkHexColor($kd_text_color)) {
    $kd_text_color = 'ffffff';
}

if(!in_array($kd_font_size, $font_sizes)) {
    $kd_font_size = $font_sizes[0];
}

if (!isset($font_types[$kd_font_type])) {
    $kd_font_type = 1;
}

if (!checkHexColor($kd_border_color)) {
    $kd_border_color = 'ffffff';
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


//weapon2
$weapon2_text = isset($_POST['weapon2_text']) ? trim($_POST['weapon2_text']) : '';
$weapon2_text_color = isset($_POST['weapon2_text_color']) ? trim($_POST['weapon2_text_color']) : '';
$weapon2_font_size = isset($_POST['weapon2_font_size']) ? abs((int) $_POST['weapon2_font_size']) : 0;
$weapon2_font_type = isset($_POST['weapon2_font_type']) ? abs((int) $_POST['weapon2_font_type']) : 0;
$weapon2_border = isset($_POST['weapon2_border']) ? (bool) $_POST['weapon2_border'] : true;
$weapon2_border_color = isset($_POST['weapon2_border_color']) ? trim($_POST['weapon2_border_color']) : '';

if (mb_strlen($weapon2_text, CHARSET) > $fields_max_length['weapon2']) {
    $weapon2_text = mb_substr($weapon2_text, 0, $fields_max_length['weapon2'], CHARSET);
}

if (!checkHexColor($weapon2_text_color)) {
    $weapon2_text_color = 'ffffff';
}

if(!in_array($weapon2_font_size, $font_sizes)) {
    $weapon2_font_size = $font_sizes[0];
}

if (!isset($font_types[$weapon2_font_type])) {
    $weapon2_font_type = 1;
}

if (!checkHexColor($weapon2_border_color)) {
    $weapon2_border_color = 'ffffff';
}


// прочие
$icon1 = isset($_POST['icon1']) ? abs((int) $_POST['icon1']) : 0;
$icon2 = isset($_POST['icon2']) ? abs((int) $_POST['icon2']) : 0;
$icon3 = isset($_POST['icon3']) ? abs((int) $_POST['icon3']) : 0;
$icon4 = isset($_POST['icon4']) ? abs((int) $_POST['icon4']) : 0;
$icon5 = isset($_POST['icon5']) ? abs((int) $_POST['icon5']) : 0;
$icon6 = isset($_POST['icon6']) ? abs((int) $_POST['icon6']) : 0;
$background = isset($_POST['background']) ? abs((int) $_POST['background']) : 0;
$icon_choose = isset($_POST['icon_choose']) ? (bool) $_POST['icon_choose'] : false;


// иконки1 из папки
$icons1 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons1');
// иконки2 из папки
$icons2 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons2');
// иконки2 из папки
$icons3 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons3');
// иконки2 из папки
$icons4 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons4');
// иконки2 из папки
$icons5 = dirFiles(WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images' . SEP . 'icons5');
// иконки2 из папки
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

$_SESSION['pb']['type'] = $type;

// ник
$_SESSION['pb']['nick_text'] = $nick_text;
$_SESSION['pb']['nick_text_color'] = $nick_text_color;
$_SESSION['pb']['nick_font_size'] = $nick_font_size;
$_SESSION['pb']['nick_font_type'] = $nick_font_type;
$_SESSION['pb']['nick_border_color'] = $nick_border_color;
$_SESSION['pb']['nick_border'] = $nick_border;

// клан
$_SESSION['pb']['clan_text'] = $clan_text;
$_SESSION['pb']['clan_text_color'] = $clan_text_color;
$_SESSION['pb']['clan_font_size'] = $clan_font_size;
$_SESSION['pb']['clan_font_type'] = $clan_font_type;
$_SESSION['pb']['clan_border_color'] = $clan_border_color;
$_SESSION['pb']['clan_border'] = $clan_border;

// kd
$_SESSION['pb']['kd_text'] = $kd_text;
$_SESSION['pb']['kd_text_color'] = $kd_text_color;
$_SESSION['pb']['kd_font_size'] = $kd_font_size;
$_SESSION['pb']['kd_font_type'] = $kd_font_type;
$_SESSION['pb']['kd_border_color'] = $kd_border_color;
$_SESSION['pb']['kd_border'] = $kd_border;

// hs
$_SESSION['pb']['hs_text'] = $hs_text;
$_SESSION['pb']['hs_text_color'] = $hs_text_color;
$_SESSION['pb']['hs_font_size'] = $hs_font_size;
$_SESSION['pb']['hs_font_type'] = $hs_font_type;
$_SESSION['pb']['hs_border_color'] = $hs_border_color;
$_SESSION['pb']['hs_border'] = $hs_border;

// weapon
$_SESSION['pb']['weapon_text'] = $weapon_text;
$_SESSION['pb']['weapon_text_color'] = $weapon_text_color;
$_SESSION['pb']['weapon_font_size'] = $weapon_font_size;
$_SESSION['pb']['weapon_font_type'] = $weapon_font_type;
$_SESSION['pb']['weapon_border_color'] = $weapon_border_color;
$_SESSION['pb']['weapon_border'] = $weapon_border;

// weapon2
$_SESSION['pb']['weapon2_text'] = $weapon2_text;
$_SESSION['pb']['weapon2_text_color'] = $weapon2_text_color;
$_SESSION['pb']['weapon2_font_size'] = $weapon2_font_size;
$_SESSION['pb']['weapon2_font_type'] = $weapon2_font_type;
$_SESSION['pb']['weapon2_border_color'] = $weapon2_border_color;
$_SESSION['pb']['weapon2_border'] = $weapon2_border;

// прочее
$_SESSION['pb']['background'] = $background;
$_SESSION['pb']['icon1'] = $icon1;
$_SESSION['pb']['icon2'] = $icon2;
$_SESSION['pb']['icon3'] = $icon3;
$_SESSION['pb']['icon4'] = $icon4;
$_SESSION['pb']['icon5'] = $icon5;
$_SESSION['pb']['icon6'] = $icon6;
$_SESSION['pb']['icon_choose'] = $icon_choose;


echo json_encode(array(
    'errors' => isset($errors[0]) ? $errors[0] : ''
));



