<?php

// возвращает массив файлов в папке 1 => 'file.txt'
function dirFiles($path) {
    $files = glob($path . SEP . '*');
    $result = array();

    foreach ($files as $key => $value) {
        $info = pathinfo($value);

        $result[$info['filename']] = $info['basename'];
    }

    ksort($result);

    return $result;
}

// проверяет валидность hex-цвета
function checkHexColor($hex) {
    return preg_match('/^[abcdef0-9]{6}$/ui', $hex);
}

// делает надпись на картинке с обводкой или без
function drawtext(array $array) {
    // высчитываем цвет надписи
    $temp_color_red = mb_substr($array['text_color'], 0, 2, CHARSET);
    $temp_color_red = hexdec($temp_color_red);

    $temp_color_green = mb_substr($array['text_color'], 2, 2, CHARSET);
    $temp_color_green = hexdec($temp_color_green);

    $temp_color_blue = mb_substr($array['text_color'], 4, 2, CHARSET);
    $temp_color_blue = hexdec($temp_color_blue);

    $text_color = imagecolorallocate($array['image'], $temp_color_red, $temp_color_green, $temp_color_blue);

    if (isset($array['border_color'])) {
        // высчитываем цвет обводки
        $temp_color_red = mb_substr($array['border_color'], 0, 2, CHARSET);
        $temp_color_red = hexdec($temp_color_red);

        $temp_color_green = mb_substr($array['border_color'], 2, 2, CHARSET);
        $temp_color_green = hexdec($temp_color_green);

        $temp_color_blue = mb_substr($array['border_color'], 4, 2, CHARSET);
        $temp_color_blue = hexdec($temp_color_blue);

        $border_color = imagecolorallocate($array['image'], $temp_color_red, $temp_color_green, $temp_color_blue);

        $_x = array(1, 0, 1, 0, -1, -1, 1, 0, -1);
        $_y = array(0, -1, -1, 0, 0, -1, 1, 1, 1);

        for ($n = 0; $n <= 8; $n++) {
            imagettftext($array['image'], $array['size'], 0, $array['x'] + $_x[$n], $array['y'] + $_y[$n], $border_color, $array['fontfile'], $array['text']);
        }
    }

    imagettftext($array['image'], $array['size'], 0, $array['x'], $array['y'], $text_color, $array['fontfile'], $array['text']);
}