<?php
    include './functions.php';
    $filename = 'array.txt';
    $textToAppend = '10, 35, 30, 44, 55, 14, 73';
    file_put_contents($filename, $textToAppend);
    $textRead = file_get_contents($filename);
    $array = preg_split('/\, /', $textRead);
    sumArray($array);
?>

