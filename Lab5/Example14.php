<?php
    $string = '123aa';
    if ($string == 123){
        echo "The string equals 123"."<br>";
    }
    $string = "Hello World";
    if (strcmp($string, "hello world") == 0){
        echo "false – функцията е чувствителна към регистъра" ."<br>";
    }

    if (strcasecmp($string, "hello world") == 0) {
        echo "true - strcasecmp(), не е чувствителна към регистъра"."<br>";
    }
?>