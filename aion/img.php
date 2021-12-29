<?php

session_start();

if (!isset($_SESSION['aion']['type'])) {
    exit();
}

$type = &$_SESSION['aion']['type'];

// настройки
require_once 'includes' . DIRECTORY_SEPARATOR . 'config.php';
require_once WORK_DIR . SEP . 'includes' . SEP . 'functions.php';

// расположение фонов и иконок
define('RES_IMG', WORK_DIR . SEP . 'resources' . SEP . $type . SEP . 'images');

// иконки1 из папки
$icons1 = dirFiles(RES_IMG . SEP . 'icons1');
// иконки2 из папки
$icons2 = dirFiles(RES_IMG . SEP . 'icons2');
// иконки3 из папки
$icons3 = dirFiles(RES_IMG . SEP . 'icons3');
// иконки4 из папки
$icons4 = dirFiles(RES_IMG . SEP . 'icons4');
// иконки5 из папки
$icons5 = dirFiles(RES_IMG . SEP . 'icons5');
// иконки5 из папки
$icons6 = dirFiles(RES_IMG . SEP . 'icons6');
// фоны из папки
$backgrounds = dirFiles(RES_IMG . SEP . 'backgrounds');


// пути к фону и иконкам
$background_path = RES_IMG . SEP . 'backgrounds' . SEP . $backgrounds[$_SESSION['aion']['background']];
$icon1_path = RES_IMG . SEP . 'icons1' . SEP . $icons1[$_SESSION['aion']['icon1']];
$icon2_path = RES_IMG . SEP . 'icons2' . SEP . $icons2[$_SESSION['aion']['icon2']];
$icon3_path = RES_IMG . SEP . 'icons3' . SEP . $icons3[$_SESSION['aion']['icon3']];
$icon4_path = RES_IMG . SEP . 'icons4' . SEP . $icons4[$_SESSION['aion']['icon4']];
$icon5_path = RES_IMG . SEP . 'icons5' . SEP . $icons5[$_SESSION['aion']['icon5']];
$icon6_path = RES_IMG . SEP . 'icons6' . SEP . $icons6[$_SESSION['aion']['icon6']];


// инфа о фоне и иконках
$background_info = getimagesize($background_path);
$icon1_info = getimagesize($icon1_path);
$icon2_info = getimagesize($icon2_path);
$icon3_info = getimagesize($icon3_path);
$icon4_info = getimagesize($icon4_path);
$icon5_info = getimagesize($icon5_path);
$icon6_info = getimagesize($icon6_path);


// ресурс-ссылка на фон и иконки
// gif
if ($background_info[2] == 1) {
    $background_res = imagecreatefromgif($background_path);
}
// jpg
elseif ($background_info[2] == 2) {
    $background_res = imagecreatefromjpeg($background_path);
}
// png
elseif ($background_info[2] == 3) {
    $background_res = imagecreatefrompng($background_path);
} else {
    exit('Неподдерживаемый формат фоновой картинки');
}


if ($icon1_info[2] == 1) {
    $icon1_res = imagecreatefromgif($icon1_path);
}
// jpg
elseif ($icon1_info[2] == 2) {
    $icon1_res = imagecreatefromjpeg($icon1_path);
}
// png
elseif ($icon1_info[2] == 3) {
    $icon1_res = imagecreatefrompng($icon1_path);
} else {
    exit('Неподдерживаемый формат иконки №1');
}


if ($icon2_info[2] == 1) {
    $icon2_res = imagecreatefromgif($icon2_path);
} elseif ($icon2_info[2] == 2) {
    $icon2_res = imagecreatefromjpeg($icon2_path);
} elseif ($icon2_info[2] == 3) {
    $icon2_res = imagecreatefrompng($icon2_path);
} else {
    exit('Неподдерживаемый формат иконки №2');
}

if ($icon3_info[2] == 1) {
    $icon3_res = imagecreatefromgif($icon3_path);
} elseif ($icon3_info[2] == 2) {
    $icon3_res = imagecreatefromjpeg($icon3_path);
} elseif ($icon2_info[2] == 3) {
    $icon3_res = imagecreatefrompng($icon3_path);
} else {
    exit('Неподдерживаемый формат иконки №3');
}

if ($icon4_info[2] == 1) {
    $icon4_res = imagecreatefromgif($icon4_path);
} elseif ($icon4_info[2] == 2) {
    $icon4_res = imagecreatefromjpeg($icon4_path);
} elseif ($icon4_info[2] == 3) {
    $icon4_res = imagecreatefrompng($icon4_path);
} else {
    exit('Неподдерживаемый формат иконки №2');
}

if ($icon5_info[2] == 1) {
    $icon5_res = imagecreatefromgif($icon5_path);
} elseif ($icon5_info[2] == 2) {
    $icon5_res = imagecreatefromjpeg($icon5_path);
} elseif ($icon5_info[2] == 3) {
    $icon5_res = imagecreatefrompng($icon5_path);
} else {
    exit('Неподдерживаемый формат иконки №5');
}

if ($icon6_info[2] == 1) {
    $icon6_res = imagecreatefromgif($icon6_path);
} elseif ($icon6_info[2] == 2) {
    $icon6_res = imagecreatefromjpeg($icon6_path);
} elseif ($icon6_info[2] == 3) {
    $icon6_res = imagecreatefrompng($icon6_path);
} else {
    exit('Неподдерживаемый формат иконки №6');
}

// вставляем первую иконку на фон
imagecopy($background_res, $icon1_res, $aion_types[$type]['icon1_x'], $aion_types[$type]['icon1_y'], 0, 0, $icon1_info[0], $icon1_info[1]);
imagecopy($background_res, $icon3_res, $aion_types[$type]['icon3_x'], $aion_types[$type]['icon3_y'], 0, 0, $icon3_info[0], $icon3_info[1]);
imagecopy($background_res, $icon4_res, $aion_types[$type]['icon4_x'], $aion_types[$type]['icon4_y'], 0, 0, $icon4_info[0], $icon4_info[1]);
imagecopy($background_res, $icon5_res, $aion_types[$type]['icon5_x'], $aion_types[$type]['icon5_y'], 0, 0, $icon5_info[0], $icon5_info[1]);
imagecopy($background_res, $icon6_res, $aion_types[$type]['icon6_x'], $aion_types[$type]['icon6_y'], 0, 0, $icon6_info[0], $icon6_info[1]);
// если иконка будет юзерской



// ник наносится всегда
$nick_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['nick_font_type']]['filename'];

$array = array(
    'image' => $background_res,
    'size' => $_SESSION['aion']['nick_font_size'],
    'text' => $_SESSION['aion']['nick_text'],
    'x' => $aion_types[$type]['nick_x'],
    'y' => $aion_types[$type]['nick_y'],
    'text_color' => $_SESSION['aion']['nick_text_color'],
    'fontfile' => $nick_font_path
);

// надпись с обводкой
if ($_SESSION['aion']['nick_border']) {
    $array['border_color'] = $_SESSION['aion']['nick_border_color'];
}

// наносим надпись
drawtext($array);


// клан наносится всегда
$clan_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['clan_font_type']]['filename'];

$array = array(
    'image' => $background_res,
    'size' => $_SESSION['aion']['clan_font_size'],
    'text' => $_SESSION['aion']['clan_text'],
    'x' => $aion_types[$type]['clan_x'],
    'y' => $aion_types[$type]['clan_y'],
    'text_color' => $_SESSION['aion']['clan_text_color'],
    'fontfile' => $clan_font_path
);

if ($_SESSION['aion']['clan_border']) {
    $array['border_color'] = $_SESSION['aion']['clan_border_color'];
}

drawtext($array);


// ally
 {
    $ally_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['ally_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['ally_font_size'],
        'text' => $_SESSION['aion']['ally_text'],
        'x' => $aion_types[$type]['ally_x'],
        'y' => $aion_types[$type]['ally_y'],
        'text_color' => $_SESSION['aion']['ally_text_color'],
        'fontfile' => $ally_font_path
    );

    if ($_SESSION['aion']['ally_border']) {
        $array['border_color'] = $_SESSION['aion']['ally_border_color'];
    }

    drawtext($array);
}


// HS
 {
    $hs_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['hs_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['hs_font_size'],
        'text' => $_SESSION['aion']['hs_text'],
        'x' => $aion_types[$type]['hs_x'],
        'y' => $aion_types[$type]['hs_y'],
        'text_color' => $_SESSION['aion']['hs_text_color'],
        'fontfile' => $hs_font_path
    );

    if ($_SESSION['aion']['hs_border']) {
        $array['border_color'] = $_SESSION['aion']['hs_border_color'];
    }

    drawtext($array);
}


// weapon
 {
    $weapon_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['weapon_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['weapon_font_size'],
        'text' => $_SESSION['aion']['weapon_text'],
        'x' => $aion_types[$type]['weapon_x'],
        'y' => $aion_types[$type]['weapon_y'],
        'text_color' => $_SESSION['aion']['weapon_text_color'],
        'fontfile' => $weapon_font_path
    );

    if ($_SESSION['aion']['weapon_border']) {
        $array['border_color'] = $_SESSION['aion']['weapon_border_color'];
    }

    drawtext($array);
}


// server
 {
    $server_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['server_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['server_font_size'],
        'text' => $_SESSION['aion']['server_text'],
        'x' => $aion_types[$type]['server_x'],
        'y' => $aion_types[$type]['server_y'],
        'text_color' => $_SESSION['aion']['server_text_color'],
        'fontfile' => $server_font_path
    );

    if ($_SESSION['aion']['server_border']) {
        $array['border_color'] = $_SESSION['aion']['server_border_color'];
    }

    drawtext($array);
}

// lvl first
 {
    $lvl_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['lvl_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['lvl_font_size'],
        'text' => $_SESSION['aion']['lvl_text'],
        'x' => $aion_types[$type]['lvl_x'],
        'y' => $aion_types[$type]['lvl_y'],
        'text_color' => $_SESSION['aion']['lvl_text_color'],
        'fontfile' => $lvl_font_path
    );

    if ($_SESSION['aion']['lvl_border']) {
        $array['border_color'] = $_SESSION['aion']['lvl_border_color'];
    }

    drawtext($array);
}

// lvl 1
 {
    $lvl1_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['lvl1_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['lvl1_font_size'],
        'text' => $_SESSION['aion']['lvl1_text'],
        'x' => $aion_types[$type]['lvl1_x'],
        'y' => $aion_types[$type]['lvl1_y'],
        'text_color' => $_SESSION['aion']['lvl1_text_color'],
        'fontfile' => $lvl1_font_path
    );

    if ($_SESSION['aion']['lvl1_border']) {
        $array['border_color'] = $_SESSION['aion']['lvl1_border_color'];
    }

    drawtext($array);
}

// lvl2
 {
    $lvl2_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['lvl2_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['lvl2_font_size'],
        'text' => $_SESSION['aion']['lvl2_text'],
        'x' => $aion_types[$type]['lvl2_x'],
        'y' => $aion_types[$type]['lvl2_y'],
        'text_color' => $_SESSION['aion']['lvl2_text_color'],
        'fontfile' => $lvl2_font_path
    );

    if ($_SESSION['aion']['lvl2_border']) {
        $array['border_color'] = $_SESSION['aion']['lvl2_border_color'];
    }

    drawtext($array);
}

// lvl3
 {
    $lvl3_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['aion']['lvl3_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['aion']['lvl3_font_size'],
        'text' => $_SESSION['aion']['lvl3_text'],
        'x' => $aion_types[$type]['lvl3_x'],
        'y' => $aion_types[$type]['lvl3_y'],
        'text_color' => $_SESSION['aion']['lvl3_text_color'],
        'fontfile' => $lvl3_font_path
    );

    if ($_SESSION['aion']['lvl3_border']) {
        $array['border_color'] = $_SESSION['aion']['lvl3_border_color'];
    }

    drawtext($array);
}

header('Content-type: image/png');
imagepng($background_res);















