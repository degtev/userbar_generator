<?php

session_start();

$errors = array();

// настройки
require_once 'includes' . DIRECTORY_SEPARATOR . 'config.php';


$x = isset($_POST['x']) ? abs((int) $_POST['x']) : 16;
$y = isset($_POST['y']) ? abs((int) $_POST['y']) : 9;
$w = isset($_POST['w']) ? abs((int) $_POST['w']) : 16;
$h = isset($_POST['h']) ? abs((int) $_POST['h']) : 9;

// выеделено часть картинки
if ($w > 0 && $h > 0) {
    $_SESSION['lineage']['w'] = $w;
    $_SESSION['lineage']['h'] = $h;
    $_SESSION['lineage']['x'] = $x;
    $_SESSION['lineage']['y'] = $y;
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




















