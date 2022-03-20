<?php
include('classSimpleImage.php');

$images = array_splice(scandir('../public/images/small'), 2);
$messages = [
    'ok' => 'Файл загружен',
    'error' => 'Ошибка загрузки'
];

if (!empty($_FILES)) {
    $path = '../public/images/big/' . $_FILES['file']["name"];

    resizer($_FILES['file']["name"], $_FILES['file']["tmp_name"]);
    //Checker:
    if ($_FILES['file']["size"] <= 5000000 && in_array($_FILES['file']["type"], ['image/jpeg', 'image/jpg', 'image/png'])) {
        //add to img to 'big' folder:
        if (move_uploaded_file($_FILES['file']["tmp_name"], $path)) {
            $message = 'ok';
        } else {
            $message = 'error';
        }
    } else {
        $message = 'error';
    }
    header("Location: /public?status=$message");
    die();
}

$message = $messages[$_GET['status']];

//add to img to 'small' folder:
function resizer($file, $fileLink)
{
    $image = new SimpleImage();
    $image->load($fileLink);
    $image->resizeToWidth(250);
    $path = '../public/images/small/' . $file;
    $image->save($path);
}
