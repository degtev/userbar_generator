<?php

session_start();

if (!isset($_SESSION['pb']['type'])) {
    exit();
}

$type = &$_SESSION['pb']['type'];

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
// иконки6 из папки
$icons6 = dirFiles(RES_IMG . SEP . 'icons6');
// фоны из папки
$backgrounds = dirFiles(RES_IMG . SEP . 'backgrounds');


// пути к фону и иконкам
$background_path = RES_IMG . SEP . 'backgrounds' . SEP . $backgrounds[$_SESSION['pb']['background']];
$icon1_path = RES_IMG . SEP . 'icons1' . SEP . $icons1[$_SESSION['pb']['icon1']];
$icon2_path = RES_IMG . SEP . 'icons2' . SEP . $icons2[$_SESSION['pb']['icon2']];
$icon3_path = RES_IMG . SEP . 'icons3' . SEP . $icons3[$_SESSION['pb']['icon3']];
$icon4_path = RES_IMG . SEP . 'icons4' . SEP . $icons4[$_SESSION['pb']['icon4']];
$icon5_path = RES_IMG . SEP . 'icons5' . SEP . $icons5[$_SESSION['pb']['icon5']];
$icon6_path = RES_IMG . SEP . 'icons6' . SEP . $icons6[$_SESSION['pb']['icon6']];


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
     imagesavealpha($background_res, true);
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
imagecopy($background_res, $icon1_res, $pb_types[$type]['icon1_x'], $pb_types[$type]['icon1_y'], 0, 0, $icon1_info[0], $icon1_info[1]);
imagecopy($background_res, $icon3_res, $pb_types[$type]['icon3_x'], $pb_types[$type]['icon3_y'], 0, 0, $icon3_info[0], $icon3_info[1]);
imagecopy($background_res, $icon4_res, $pb_types[$type]['icon4_x'], $pb_types[$type]['icon4_y'], 0, 0, $icon4_info[0], $icon4_info[1]);
imagecopy($background_res, $icon5_res, $pb_types[$type]['icon5_x'], $pb_types[$type]['icon5_y'], 0, 0, $icon5_info[0], $icon5_info[1]);
imagecopy($background_res, $icon6_res, $pb_types[$type]['icon6_x'], $pb_types[$type]['icon6_y'], 0, 0, $icon6_info[0], $icon6_info[1]);
// если иконка будет юзерской
if ($_SESSION['pb']['icon_choose']) {
    $icon_user_path = WORK_DIR . SEP . 'tmp' . SEP . $_SESSION['pb']['upload_filename'];

    if (!is_file($icon_user_path)) {
        exit('Файл был удален');
    }

    $icon_user_info = getimagesize($icon_user_path);

    if ($icon_user_info[2] == 1) {
        $icon_user_res = imagecreatefromgif($icon_user_path);
    } elseif ($icon_user_info[2] == 2) {
        $icon_user_res = imagecreatefromjpeg($icon_user_path);
    } elseif ($icon_user_info[2] == 3) {
        $icon_user_res = imagecreatefrompng($icon_user_path);
    } else {
        exit('Неподдерживаемый формат пользовательской иконки');
    }

    // вставляем пользовательскую иконку на место второй дефолтной
    imagecopyresampled($background_res, $icon_user_res, $pb_types[$type]['icon2_x'], $pb_types[$type]['icon2_y'], $_SESSION['pb']['x'], $_SESSION['pb']['y'], $icon2_info[0], $icon2_info[1], $_SESSION['pb']['w'], $_SESSION['pb']['h']);
}
// дефолтная вторая иконка
else {
    // вставляем вторую иконку на фон
    imagecopy($background_res, $icon2_res, $pb_types[$type]['icon2_x'], $pb_types[$type]['icon2_y'], 0, 0, $icon2_info[0], $icon2_info[1]);
}


// ник наносится всегда
$nick_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['pb']['nick_font_type']]['filename'];

$array = array(
    'image' => $background_res,
    'size' => $_SESSION['pb']['nick_font_size'],
    'text' => $_SESSION['pb']['nick_text'],
    'x' => $pb_types[$type]['nick_x'],
    'y' => $pb_types[$type]['nick_y'],
    'text_color' => $_SESSION['pb']['nick_text_color'],
    'fontfile' => $nick_font_path
);

// надпись с обводкой
if ($_SESSION['pb']['nick_border']) {
    $array['border_color'] = $_SESSION['pb']['nick_border_color'];
}

// наносим надпись
drawtext($array);


// клан наносится всегда
$clan_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['pb']['clan_font_type']]['filename'];

$array = array(
    'image' => $background_res,
    'size' => $_SESSION['pb']['clan_font_size'],
    'text' => $_SESSION['pb']['clan_text'],
    'x' => $pb_types[$type]['clan_x'],
    'y' => $pb_types[$type]['clan_y'],
    'text_color' => $_SESSION['pb']['clan_text_color'],
    'fontfile' => $clan_font_path
);

if ($_SESSION['pb']['clan_border']) {
    $array['border_color'] = $_SESSION['pb']['clan_border_color'];
}

drawtext($array);


// KD
 {
    $kd_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['pb']['kd_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['pb']['kd_font_size'],
        'text' => $_SESSION['pb']['kd_text'],
        'x' => $pb_types[$type]['kd_x'],
        'y' => $pb_types[$type]['kd_y'],
        'text_color' => $_SESSION['pb']['kd_text_color'],
        'fontfile' => $kd_font_path
    );

    if ($_SESSION['pb']['kd_border']) {
        $array['border_color'] = $_SESSION['pb']['kd_border_color'];
    }

    drawtext($array);
}


// HS
 {
    $hs_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['pb']['hs_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['pb']['hs_font_size'],
        'text' => $_SESSION['pb']['hs_text'],
        'x' => $pb_types[$type]['hs_x'],
        'y' => $pb_types[$type]['hs_y'],
        'text_color' => $_SESSION['pb']['hs_text_color'],
        'fontfile' => $hs_font_path
    );

    if ($_SESSION['pb']['hs_border']) {
        $array['border_color'] = $_SESSION['pb']['hs_border_color'];
    }

    drawtext($array);
}


// weapon
 {
    $weapon_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['pb']['weapon_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['pb']['weapon_font_size'],
        'text' => $_SESSION['pb']['weapon_text'],
        'x' => $pb_types[$type]['weapon_x'],
        'y' => $pb_types[$type]['weapon_y'],
        'text_color' => $_SESSION['pb']['weapon_text_color'],
        'fontfile' => $weapon_font_path
    );

    if ($_SESSION['pb']['weapon_border']) {
        $array['border_color'] = $_SESSION['pb']['weapon_border_color'];
    }

    drawtext($array);
}


// weapon2
 {
    $weapon2_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['pb']['weapon2_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['pb']['weapon2_font_size'],
        'text' => $_SESSION['pb']['weapon2_text'],
        'x' => $pb_types[$type]['weapon2_x'],
        'y' => $pb_types[$type]['weapon2_y'],
        'text_color' => $_SESSION['pb']['weapon2_text_color'],
        'fontfile' => $weapon2_font_path
    );

    if ($_SESSION['pb']['weapon2_border']) {
        $array['border_color'] = $_SESSION['pb']['weapon2_border_color'];
    }

    drawtext($array);
}

header('Content-type: image/png');
imagepng($background_res);