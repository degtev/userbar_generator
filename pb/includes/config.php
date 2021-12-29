<?php

define('SEP', DIRECTORY_SEPARATOR);
// рабочая директория с генератором
define('WORK_DIR', $_SERVER['DOCUMENT_ROOT'] . SEP . 'pb');
define('CHARSET', 'utf-8');

// разрешенные форматы картинок
// для загрузки юзером
$file_formats = array(
    'png', 'jpeg', 'jpg', 'gif'
);

// максимальная длина полей при заполнении
$fields_max_length = array(
    'nick' => 20,
    'clan' => 20,
    'kd' => 30,
    'hs' => 30,
    'weapon' => 30,
    'weapon2' => 30
    
);

// макс. размер загружаемого файла. 1 мб
$max_upload_filesize = 1024 * 1000;

$pb_types = array(
    1 => array(
        // размеры юзербара, указанные здесь
        // не влияют на его фактический размер при генерации.
        'width' => 450,
        'height' => 130,
        // расположение иконки 1 на фоне
        'icon1_x' => 5,
        'icon1_y' => 5,
        // вторая иконка
        'icon2_x' => 5,
        'icon2_y' => 100,
        'icon3_x' => 0,
        'icon3_y' => 0,
        'icon4_x' => 0,
        'icon4_y' => 0,
        'icon5_x' => 0,
        'icon5_y' => 0,
        'icon6_x' => 0,
        'icon6_y' => 0,
        // расположение текста ника
        'nick_x' => 35,
        'nick_y' => 25,
        // расположение текста клана
        'clan_x' => 35,
        'clan_y' => 120,
        // расположение kd
        'kd_x' => 35,
        'kd_y' => 88,
        // расположение hs
        'hs_x' => 0,
        'hs_y' => 0,
        // расположение weapon
        'weapon_x' => 35,
        'weapon_y' => 55,
        // расположение weapon2
        'weapon2_x' => 0,
        'weapon2_y' => 0
    ),
    2 => array(
        'width' => 450,
        'height' => 120,
        'icon1_x' => 30,
        'icon1_y' => 10,
        'icon2_x' => 30,
        'icon2_y' => 80,
        'icon3_x' => 0,
        'icon3_y' => 0,
        'icon4_x' => 0,
        'icon4_y' => 0,
        'icon5_x' => 0,
        'icon5_y' => 0,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 67,
        'nick_y' => 35,
        'clan_x' => 67,
        'clan_y' => 105,
        'kd_x' => 0,
        'kd_y' => 0,
        'hs_x' => 0,
        'hs_y' => 0,
        'weapon_x' => 295,
        'weapon_y' => 55,
        'weapon2_x' => 295,
        'weapon2_y' => 85
    ),
    3 => array(
        'width' => 350,
        'height' => 19,
        'icon1_x' => 0,
        'icon1_y' => 0,
        'icon2_x' => 175,
        'icon2_y' => 0,
        'icon3_x' => 0,
        'icon3_y' => 0,
        'icon4_x' => 0,
        'icon4_y' => 0,
        'icon5_x' => 0,
        'icon5_y' => 0,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 22,
        'nick_y' => 15,
        'clan_x' => 195,
        'clan_y' => 15,
        'kd_x' => 0,
        'kd_y' => 0,
        'hs_x' => 0,
        'hs_y' => 0,
        'weapon_x' => 0,
        'weapon_y' => 0,
        'weapon2_x' => 0,
        'weapon2_y' => 0
    ),
    4 => array(
        'width' => 450,
        'height' => 100,
        'icon1_x' => 52,
        'icon1_y' => 32,
        'icon2_x' => 132,
        'icon2_y' => 44,
        'icon3_x' => 0,
        'icon3_y' => 0,
        'icon4_x' => 0,
        'icon4_y' => 0,
        'icon5_x' => 0,
        'icon5_y' => 0,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 141,
        'nick_y' => 34,
        'clan_x' => 154,
        'clan_y' => 60,
        'kd_x' => 142,
        'kd_y' => 91,
        'hs_x' => 220,
        'hs_y' => 91,
        'weapon_x' => 110,
        'weapon_y' => 90,
        'weapon2_x' => 160,
        'weapon2_y' => 100
    ),
    5 => array(
        'width' => 456,
        'height' => 116,
        'icon1_x' => 42,
        'icon1_y' => 13,
        'icon2_x' => 155,
        'icon2_y' => 91,
        'icon3_x' => 0,
        'icon3_y' => 0,
        'icon4_x' => 0,
        'icon4_y' => 0,
        'icon5_x' => 0,
        'icon5_y' => 0,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 125,
        'nick_y' => 42,
        'clan_x' => 176,
        'clan_y' => 110,
        'kd_x' => 80,
        'kd_y' => 110,
        'hs_x' => 295,
        'hs_y' => 110,
        'weapon_x' => 135,
        'weapon_y' => 80,
        'weapon2_x' => 241,
        'weapon2_y' => 80
    ),
    6 => array(
        'width' => 450,
        'height' => 150,
        'icon1_x' => 5,
        'icon1_y' => 40,
        'icon2_x' => 5,
        'icon2_y' => 100,
        'icon3_x' => 0,
        'icon3_y' => 0,
        'icon4_x' => 0,
        'icon4_y' => 0,
        'icon5_x' => 0,
        'icon5_y' => 0,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 50,
        'nick_y' => 74,
        'clan_x' => 50,
        'clan_y' => 134,
        'kd_x' => 150,
        'kd_y' => 105,
        'hs_x' => 280,
        'hs_y' => 105,
        'weapon_x' => 0,
        'weapon_y' => 0,
        'weapon2_x' => 0,
        'weapon2_y' => 0
    ),
	7 => array(
        'width' => 450,
        'height' => 125,
        'icon1_x' => 20,
        'icon1_y' => 10,
        'icon2_x' => 20,
        'icon2_y' => 40,
		'icon3_x' => 45,
        'icon3_y' => 65,
	    'icon4_x' => 77,
        'icon4_y' => 65,
		'icon5_x' => 114,
        'icon5_y' => 65,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 50,
        'nick_y' => 31,
        'clan_x' => 50,
        'clan_y' => 61,
        'kd_x' => 5,
        'kd_y' => 122,
        'hs_x' => 295,
        'hs_y' => 110,
        'weapon_x' => 135,
        'weapon_y' => 80,
        'weapon2_x' => 241,
        'weapon2_y' => 80
    ),
		8 => array(
        'width' => 200,
        'height' => 500,
        'icon1_x' => 5,
        'icon1_y' => 10,
        'icon2_x' => 5,
        'icon2_y' => 60,
        'icon3_x' => 5,
        'icon3_y' => 435,
        'icon4_x' => 60,
        'icon4_y' => 435,
        'icon5_x' => 114,
        'icon5_y' => 435,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 40,
        'nick_y' => 35,
        'clan_x' => 40,
        'clan_y' => 85,
        'kd_x' => 1,
        'kd_y' => 430,
        'hs_x' => 295,
        'hs_y' => 110,
        'weapon_x' => 135,
        'weapon_y' => 80,
        'weapon2_x' => 241,
        'weapon2_y' => 80
    ),
		9 => array(
        'width' => 150,
        'height' => 150,
        'icon1_x' => 5,
        'icon1_y' => 5,
        'icon2_x' => 125,
        'icon2_y' => 5,
        'icon3_x' => 5,
        'icon3_y' => 435,
        'icon4_x' => 60,
        'icon4_y' => 435,
        'icon5_x' => 114,
        'icon5_y' => 435,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 10,
        'nick_y' => 140,
        'clan_x' => 40,
        'clan_y' => 85,
        'kd_x' => 1,
        'kd_y' => 430,
        'hs_x' => 295,
        'hs_y' => 110,
        'weapon_x' => 135,
        'weapon_y' => 80,
        'weapon2_x' => 241,
        'weapon2_y' => 80
    ),
       10 => array(
        'width' => 400,
        'height' => 80,
        'icon1_x' => 7,
        'icon1_y' => 7,
        'icon2_x' => 80,
        'icon2_y' => 40,
        'icon3_x' => 80,
        'icon3_y' => 2,
        'icon4_x' => 77,
        'icon4_y' => 65,
        'icon5_x' => 114,
        'icon5_y' => 65,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 120,
        'nick_y' => 25,
        'clan_x' => 120,
        'clan_y' => 65,
        'kd_x' => 265,
        'kd_y' => 47,
        'hs_x' => 295,
        'hs_y' => 50,
        'weapon_x' => 135,
        'weapon_y' => 70,
        'weapon2_x' => 241,
        'weapon2_y' => 70
    ),
       11 => array(
        'width' => 500,
        'height' => 164,
        'icon1_x' => 15,
        'icon1_y' => 78,
        'icon2_x' => 85,
        'icon2_y' => 122,
        'icon3_x' => 305,
        'icon3_y' => 112,
        'icon4_x' => 285,
        'icon4_y' => 80,
        'icon5_x' => 325,
        'icon5_y' => 80,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 82,
        'nick_y' => 90,
        'clan_x' => 122,
        'clan_y' => 150,
        'kd_x' => 102,
        'kd_y' => 110,
        'hs_x' => 295,
        'hs_y' => 50,
        'weapon_x' => 135,
        'weapon_y' => 70,
        'weapon2_x' => 241,
        'weapon2_y' => 70
    ),
       12 => array(
        'width' => 350,
        'height' => 40,
        'icon1_x' => 5,
        'icon1_y' => 5,
        'icon2_x' => 37,
        'icon2_y' => 18,
        'icon3_x' => 245,
        'icon3_y' => 2,
        'icon4_x' => 280,
        'icon4_y' => 2,
        'icon5_x' => 315,
        'icon5_y' => 2,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 43,
        'nick_y' => 15,
        'clan_x' => 59,
        'clan_y' => 36,
        'kd_x' => 102,
        'kd_y' => 110,
        'hs_x' => 295,
        'hs_y' => 50,
        'weapon_x' => 135,
        'weapon_y' => 70,
        'weapon2_x' => 241,
        'weapon2_y' => 70
    ),
       13 => array(
        'width' => 350,
        'height' => 100,
        'icon1_x' => 13,
        'icon1_y' => 15,
        'icon2_x' => 15,
        'icon2_y' => 61,
        'icon3_x' => 240,
        'icon3_y' => 10,
        'icon4_x' => 275,
        'icon4_y' => 10,
        'icon5_x' => 310,
        'icon5_y' => 10,
        'icon6_x' => 0,
        'icon6_y' => 0,
        'nick_x' => 65,
        'nick_y' => 35,
        'clan_x' => 65,
        'clan_y' => 80,
        'kd_x' => 180,
        'kd_y' => 56,
        'hs_x' => 295,
        'hs_y' => 50,
        'weapon_x' => 135,
        'weapon_y' => 70,
        'weapon2_x' => 241,
        'weapon2_y' => 70
    ),
14 => array(
        'width' => 350,
        'height' => 100,
        'icon1_x' => 4,
        'icon1_y' => 4,
        'icon2_x' => 4,
        'icon2_y' => 31,
        'icon3_x' => 240,
        'icon3_y' => 10,
        'icon4_x' => 275,
        'icon4_y' => 10,
        'icon5_x' => 310,
        'icon5_y' => 10,
        'icon6_x' => 31,
        'icon6_y' => 31,
        'nick_x' => 35,
        'nick_y' => 25,
        'clan_x' => 64,
        'clan_y' => 52,
        'kd_x' => 35,
        'kd_y' => 95,
        'hs_x' => 295,
        'hs_y' => 100,
        'weapon_x' => 35,
        'weapon_y' => 73,
        'weapon2_x' => 241,
        'weapon2_y' => 70
    ),
15 => array(
        'width' => 468,
        'height' => 60,
        'icon1_x' => 350,
        'icon1_y' => 0,
        'icon2_x' => 408,
        'icon2_y' => 0,
        'icon3_x' => 240,
        'icon3_y' => 10,
        'icon4_x' => 275,
        'icon4_y' => 10,
        'icon5_x' => 310,
        'icon5_y' => 10,
        'icon6_x' => 31,
        'icon6_y' => 31,
        'nick_x' => 3,
        'nick_y' => 38,
        'clan_x' => 64,
        'clan_y' => 52,
        'kd_x' => 35,
        'kd_y' => 95,
        'hs_x' => 295,
        'hs_y' => 100,
        'weapon_x' => 35,
        'weapon_y' => 73,
        'weapon2_x' => 241,
        'weapon2_y' => 70
    )
);

// размеры шрифтов в списке
$font_sizes = array(
    6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40
);


// названия шрифтов в списке. 
// Связаны с именами файлов
$font_types = array(
    1 => array(
        'name' => 'Derby',
        'filename' => '1.ttf'
    ),
    2 => array(
        'name' => 'DS Crystal',
        'filename' => '2.ttf'
    ),
    3 => array(
        'name' => 'Matterhorn',
        'filename' => '3.ttf'
    ),
    4 => array(
        'name' => 'DS Note',
        'filename' => '4.ttf'
    ),
    5 => array(
        'name' => 'Neuropol',
        'filename' => '5.ttf'
    ),
    6 => array(
        'name' => 'Ticker Tape',
        'filename' => '6.ttf'
    ),
    7 => array(
        'name' => 'Evil Ghost',
        'filename' => '7.ttf'
    ),
    8 => array(
        'name' => 'Evil Grinder',
        'filename' => '8.ttf'
    ),
    9 => array(
        'name' => 'AGAalen',
        'filename' => '9.ttf'
    ),
    10 => array(
        'name' => 'Aksent',
        'filename' => '10.ttf'
    ),
    11 => array(
        'name' => 'Decadance',
        'filename' => '11.ttf'
    ),
    12 => array(
        'name' => 'LC blowzy',
        'filename' => '12.ttf'
    ),
    13 => array(
        'name' => 'Matilda',
        'filename' => '13.ttf'
    ),
    14 => array(
        'name' => 'Parisian',
        'filename' => '14.ttf'
    ),
    15 => array(
        'name' => 'Porsche',
        'filename' => '15.ttf'
    ),
    16 => array(
        'name' => 'Stamper',
        'filename' => '16.ttf'
    ),
    17 => array(
        'name' => 'AGBengaly',
        'filename' => '17.ttf'
    ),
    18 => array(
        'name' => 'Dollar',
        'filename' => '18.ttf'
    ),
    19 => array(
        'name' => 'DS Podd Cyr',
        'filename' => '19.ttf'
    ),
    20 => array(
        'name' => 'DS Quadro Black',
        'filename' => '20.ttf'
    ),
    21 => array(
        'name' => 'Broad Brush',
        'filename' => '21.ttf'
    ),
    22 => array(
        'name' => 'Dublon',
        'filename' => '22.ttf'
    ),
    23 => array(
        'name' => 'Epson',
        'filename' => '23.ttf'
    ),
    24 => array(
        'name' => 'Joke',
        'filename' => '24.ttf'
    ),
    25 => array(
        'name' => 'Kabarett Simp',
        'filename' => '25.ttf'
    ),
    26 => array(
        'name' => 'Kaliakra',
        'filename' => '26.ttf'
    ),
    27 => array(
        'name' => 'KremlinCTT',
        'filename' => '27.ttf'
    ),
    28 => array(
        'name' => 'Parisian',
        'filename' => '28.ttf'
    ),
    29 => array(
        'name' => 'Seeds Cyr Medium',
        'filename' => '29.ttf'
    ),
    30 => array(
        'name' => 'Start',
        'filename' => '30.ttf'
    ),
    31 => array(
        'name' => 'Taurus Normal',
        'filename' => '31.ttf'
    ),
    32 => array(
        'name' => 'TechnicalDi',
        'filename' => '32.ttf'
    ),
    33 => array(
        'name' => 'True Grid',
        'filename' => '33.ttf'
    ),
    34 => array(
        'name' => 'Tolstyak',
        'filename' => '34.ttf'
    ),
    35 => array(
        'name' => 'Topaz',
        'filename' => '35.ttf'
    )
);