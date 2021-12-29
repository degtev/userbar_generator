<?php

define('SEP', DIRECTORY_SEPARATOR);
// рабочая директория с генератором
define('WORK_DIR', $_SERVER['DOCUMENT_ROOT'] . SEP . 'apb');
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
    'ally' => 20,
    'hs' => 20,
    'lvl' => 2,
    'lvl1' => 2,
    'lvl2' => 2,
    'lvl3' => 2,
    'weapon' => 20,
    'server' => 20
    
);

// макс. размер загружаемого файла. 1 мб
$max_upload_filesize = 1024 * 1000;

$apb_types = array(
    1 => array(
       'width' => 350,
        'height' => 100,
        'icon1_x' => 500,
        'icon1_y' => 500,
        'icon2_x' => 500,
        'icon2_y' => 45,
		'icon3_x' => 90,
        'icon3_y' => 55,
	    'icon4_x' => 500,
        'icon4_y' => 500,
		'icon5_x' => 500,
        'icon5_y' => 500,
		'icon6_x' => 5,
        'icon6_y' => 5,
        'nick_x' => 100,
        'nick_y' => 40,
        'clan_x' => 140,
        'clan_y' => 80,
        'ally_x' => 270,
        'ally_y' => 52,
        'hs_x' => 295,
        'hs_y' => 110,
        'weapon_x' => 135,
        'weapon_y' => 150,
        'server_x' => 270,
        'server_y' => 20,
        'lvl_x' => 90,
        'lvl_y' => 10,
        'lvl1_x' => 87,
        'lvl1_y' => 20,
        'lvl2_x' => 58,
        'lvl2_y' => 60,
        'lvl3_x' => 98,
        'lvl3_y' => 60
    ),
   2 => array(
       'width' => 350,
        'height' => 100,
        'icon1_x' => 500,
        'icon1_y' => 500,
        'icon2_x' => 500,
        'icon2_y' => 45,
 'icon3_x' => 90,
        'icon3_y' => 55,
	    'icon4_x' => 500,
        'icon4_y' => 500,
		'icon5_x' => 500,
        'icon5_y' => 500,
		'icon6_x' => 5,
        'icon6_y' => 5,
        'nick_x' => 100,
        'nick_y' => 40,
        'clan_x' => 140,
        'clan_y' => 80,
        'ally_x' => 270,
        'ally_y' => 52,
        'hs_x' => 295,
        'hs_y' => 110,
        'weapon_x' => 135,
        'weapon_y' => 150,
        'server_x' => 270,
        'server_y' => 20,
        'lvl_x' => 90,
        'lvl_y' => 10,
        'lvl1_x' => 87,
        'lvl1_y' => 20,
        'lvl2_x' => 58,
        'lvl2_y' => 60,
        'lvl3_x' => 98,
        'lvl3_y' => 60
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
        'name' => 'Ticker Tape',
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
        'name' => 'Derby',
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















