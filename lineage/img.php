<?php

session_start();

if (!isset($_SESSION['lineage']['type'])) {
    exit();
}

$type = &$_SESSION['lineage']['type'];

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
$background_path = RES_IMG . SEP . 'backgrounds' . SEP . $backgrounds[$_SESSION['lineage']['background']];
$icon1_path = RES_IMG . SEP . 'icons1' . SEP . $icons1[$_SESSION['lineage']['icon1']];
$icon2_path = RES_IMG . SEP . 'icons2' . SEP . $icons2[$_SESSION['lineage']['icon2']];
$icon3_path = RES_IMG . SEP . 'icons3' . SEP . $icons3[$_SESSION['lineage']['icon3']];
$icon4_path = RES_IMG . SEP . 'icons4' . SEP . $icons4[$_SESSION['lineage']['icon4']];
$icon5_path = RES_IMG . SEP . 'icons5' . SEP . $icons5[$_SESSION['lineage']['icon5']];
$icon6_path = RES_IMG . SEP . 'icons6' . SEP . $icons6[$_SESSION['lineage']['icon6']];


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
imagecopy($background_res, $icon1_res, $lineage_types[$type]['icon1_x'], $lineage_types[$type]['icon1_y'], 0, 0, $icon1_info[0], $icon1_info[1]);
imagecopy($background_res, $icon3_res, $lineage_types[$type]['icon3_x'], $lineage_types[$type]['icon3_y'], 0, 0, $icon3_info[0], $icon3_info[1]);
imagecopy($background_res, $icon4_res, $lineage_types[$type]['icon4_x'], $lineage_types[$type]['icon4_y'], 0, 0, $icon4_info[0], $icon4_info[1]);
imagecopy($background_res, $icon5_res, $lineage_types[$type]['icon5_x'], $lineage_types[$type]['icon5_y'], 0, 0, $icon5_info[0], $icon5_info[1]);
imagecopy($background_res, $icon6_res, $lineage_types[$type]['icon6_x'], $lineage_types[$type]['icon6_y'], 0, 0, $icon6_info[0], $icon6_info[1]);
// если иконка будет юзерской
if ($_SESSION['lineage']['icon_choose']) {
    $icon_user_path = WORK_DIR . SEP . 'tmp' . SEP . $_SESSION['lineage']['upload_filename'];

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
    imagecopyresampled($background_res, $icon_user_res, $lineage_types[$type]['icon2_x'], $lineage_types[$type]['icon2_y'], $_SESSION['lineage']['x'], $_SESSION['lineage']['y'], $icon2_info[0], $icon2_info[1], $_SESSION['lineage']['w'], $_SESSION['lineage']['h']);
}
// дефолтная вторая иконка
else {
    // вставляем вторую иконку на фон
    imagecopy($background_res, $icon2_res, $lineage_types[$type]['icon2_x'], $lineage_types[$type]['icon2_y'], 0, 0, $icon2_info[0], $icon2_info[1]);
}


// ник наносится всегда
$nick_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['nick_font_type']]['filename'];

$array = array(
    'image' => $background_res,
    'size' => $_SESSION['lineage']['nick_font_size'],
    'text' => $_SESSION['lineage']['nick_text'],
    'x' => $lineage_types[$type]['nick_x'],
    'y' => $lineage_types[$type]['nick_y'],
    'text_color' => $_SESSION['lineage']['nick_text_color'],
    'fontfile' => $nick_font_path
);

// надпись с обводкой
if ($_SESSION['lineage']['nick_border']) {
    $array['border_color'] = $_SESSION['lineage']['nick_border_color'];
}

// наносим надпись
drawtext($array);


// клан наносится всегда
$clan_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['clan_font_type']]['filename'];

$array = array(
    'image' => $background_res,
    'size' => $_SESSION['lineage']['clan_font_size'],
    'text' => $_SESSION['lineage']['clan_text'],
    'x' => $lineage_types[$type]['clan_x'],
    'y' => $lineage_types[$type]['clan_y'],
    'text_color' => $_SESSION['lineage']['clan_text_color'],
    'fontfile' => $clan_font_path
);

if ($_SESSION['lineage']['clan_border']) {
    $array['border_color'] = $_SESSION['lineage']['clan_border_color'];
}

drawtext($array);


// ally
 {
    $ally_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['ally_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['ally_font_size'],
        'text' => $_SESSION['lineage']['ally_text'],
        'x' => $lineage_types[$type]['ally_x'],
        'y' => $lineage_types[$type]['ally_y'],
        'text_color' => $_SESSION['lineage']['ally_text_color'],
        'fontfile' => $ally_font_path
    );

    if ($_SESSION['lineage']['ally_border']) {
        $array['border_color'] = $_SESSION['lineage']['ally_border_color'];
    }

    drawtext($array);
}


// HS
 {
    $hs_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['hs_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['hs_font_size'],
        'text' => $_SESSION['lineage']['hs_text'],
        'x' => $lineage_types[$type]['hs_x'],
        'y' => $lineage_types[$type]['hs_y'],
        'text_color' => $_SESSION['lineage']['hs_text_color'],
        'fontfile' => $hs_font_path
    );

    if ($_SESSION['lineage']['hs_border']) {
        $array['border_color'] = $_SESSION['lineage']['hs_border_color'];
    }

    drawtext($array);
}


// weapon
 {
    $weapon_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['weapon_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['weapon_font_size'],
        'text' => $_SESSION['lineage']['weapon_text'],
        'x' => $lineage_types[$type]['weapon_x'],
        'y' => $lineage_types[$type]['weapon_y'],
        'text_color' => $_SESSION['lineage']['weapon_text_color'],
        'fontfile' => $weapon_font_path
    );

    if ($_SESSION['lineage']['weapon_border']) {
        $array['border_color'] = $_SESSION['lineage']['weapon_border_color'];
    }

    drawtext($array);
}


// server
 {
    $server_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['server_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['server_font_size'],
        'text' => $_SESSION['lineage']['server_text'],
        'x' => $lineage_types[$type]['server_x'],
        'y' => $lineage_types[$type]['server_y'],
        'text_color' => $_SESSION['lineage']['server_text_color'],
        'fontfile' => $server_font_path
    );

    if ($_SESSION['lineage']['server_border']) {
        $array['border_color'] = $_SESSION['lineage']['server_border_color'];
    }

    drawtext($array);
}

// lvl first
 {
    $lvl_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['lvl_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['lvl_font_size'],
        'text' => $_SESSION['lineage']['lvl_text'],
        'x' => $lineage_types[$type]['lvl_x'],
        'y' => $lineage_types[$type]['lvl_y'],
        'text_color' => $_SESSION['lineage']['lvl_text_color'],
        'fontfile' => $lvl_font_path
    );

    if ($_SESSION['lineage']['lvl_border']) {
        $array['border_color'] = $_SESSION['lineage']['lvl_border_color'];
    }

    drawtext($array);
}

// lvl 1
 {
    $lvl1_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['lvl1_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['lvl1_font_size'],
        'text' => $_SESSION['lineage']['lvl1_text'],
        'x' => $lineage_types[$type]['lvl1_x'],
        'y' => $lineage_types[$type]['lvl1_y'],
        'text_color' => $_SESSION['lineage']['lvl1_text_color'],
        'fontfile' => $lvl1_font_path
    );

    if ($_SESSION['lineage']['lvl1_border']) {
        $array['border_color'] = $_SESSION['lineage']['lvl1_border_color'];
    }

    drawtext($array);
}

// lvl2
 {
    $lvl2_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['lvl2_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['lvl2_font_size'],
        'text' => $_SESSION['lineage']['lvl2_text'],
        'x' => $lineage_types[$type]['lvl2_x'],
        'y' => $lineage_types[$type]['lvl2_y'],
        'text_color' => $_SESSION['lineage']['lvl2_text_color'],
        'fontfile' => $lvl2_font_path
    );

    if ($_SESSION['lineage']['lvl2_border']) {
        $array['border_color'] = $_SESSION['lineage']['lvl2_border_color'];
    }

    drawtext($array);
}

// lvl3
 {
    $lvl3_font_path = WORK_DIR . SEP . 'fonts' . SEP . $font_types[$_SESSION['lineage']['lvl3_font_type']]['filename'];

    $array = array(
        'image' => $background_res,
        'size' => $_SESSION['lineage']['lvl3_font_size'],
        'text' => $_SESSION['lineage']['lvl3_text'],
        'x' => $lineage_types[$type]['lvl3_x'],
        'y' => $lineage_types[$type]['lvl3_y'],
        'text_color' => $_SESSION['lineage']['lvl3_text_color'],
        'fontfile' => $lvl3_font_path
    );

    if ($_SESSION['lineage']['lvl3_border']) {
        $array['border_color'] = $_SESSION['lineage']['lvl3_border_color'];
    }

    drawtext($array);
}

header('Content-type: image/png');
imagepng($background_res);















