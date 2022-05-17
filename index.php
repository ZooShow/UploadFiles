<?php

$projectDir = dirname(__FILE__) . '/src/';
$uploadfile = $projectDir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл был успешно загружен." . PHP_EOL;
} else {
    echo 'Код ошибки: ' . $_FILES['userfile']['error'] . PHP_EOL;
}
print "</pre>";