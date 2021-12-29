<?php

session_start();

$errors = array();

// настройки
require_once 'includes' . DIRECTORY_SEPARATOR . 'config.php';


$x = isset($_POST['x']) ? abs((int) $_POST['x']) : 0;
$y = isset($_POST['y']) ? abs((int) $_POST['y']) : 0;
$w = isset($_POST['w']) ? abs((int) $_POST['w']) : 0;
$h = isset($_POST['h']) ? abs((int) $_POST['h']) : 0;

// выеделено часть картинки
if ($w > 0 && $h > 0) {
    $_SESSION['apb']['w'] = $w;
    $_SESSION['apb']['h'] = $h;
    $_SESSION['apb']['x'] = $x;
    $_SESSION['apb']['y'] = $y;
} else {
    $errors[] = 'Выделите часть картинки';
}

echo '<script type="text/javascript">';
echo 'var answer = ';
echo json_encode(array(
    'errors' => isset($errors[0]) ? $errors[0] : ''
));
echo ';';
echo 'window.parent.afterCrop(answer);';
echo '</script>';




















