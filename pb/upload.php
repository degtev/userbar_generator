<?php

session_start();
// настройки
require_once 'includes' . DIRECTORY_SEPARATOR . 'config.php';

$errors = array();
$filename = '';

if (!isset($_FILES['file'])) {
    $errors[] = 'Choose a file';
}

if (!count($errors)) {
    if (!empty($_FILES['file']['name'])) {
        if ($_FILES['file']['error'] == 0) {
            $file_format = explode('.', $_FILES['file']['name']);

            if (count($file_format) >= 2) {
                $file_format = mb_strtolower(end($file_format), CHARSET);

                $check = getimagesize($_FILES['file']['tmp_name']);

                if (is_array($check) && isset($check[1])) {
                    if ($_FILES['file']['size'] <= $max_upload_filesize) {
                        if (move_uploaded_file($_FILES['file']['tmp_name'], WORK_DIR . SEP . 'tmp' . SEP . $_FILES['file']['name'])) {
                            $filename = $_FILES['file']['name'];

                            @$_SESSION['pb']['upload_filename'] = $filename;
                        } else {
                            $errors[] = 'Ошибка загрузки файла';
                        }
                    } else {
                        $errors[] = 'Файл слишком велик (более 1 Мб)';
                    }
                } else {
                    $errors[] = 'Недопустимый формат файла';
                }
            } else {
                $errors[] = 'Недопустимый формат файла';
            }
        } else {
            $errors[] = 'Ошибка загрузки файла';
        }
    } else {
        $errors[] = 'Ошибка загрузки файла';
    }
}


echo '<script type="text/javascript">';
echo 'var answer = ';
echo json_encode(array(
    'errors' => isset($errors[0]) ? $errors[0] : '',
    'filename' => $filename
));
echo ';';
echo 'window.parent.afterUpload(answer);';
echo '</script>';