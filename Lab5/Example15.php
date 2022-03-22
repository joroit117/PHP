<?php
    //Премахване на белите полета - trim(), ltrim(), rtrim()
    $title = " Programming PHP ";
    echo "title=$title.<br>";
    $str_1 = ltrim($title); // $str_1 е "Programming PHP "
    $str_2 = rtrim($title); // $str_2 е " Programming PHP"
    $str_3 = trim($title); // $str_3 е "Programming PHP"
    echo "str1=$str_1,str2=$str_2,str3=$str_3.<br>";
    //Промяна на регистъра - strtolower(), strtoupper(), ucfirst(), ucwords()
    $string1 = "FRED flintstone";
    $string2 = "barney rubble";
    print(strtolower($string1))."<br>"; // fred flintstone
    print(strtoupper($string1))."<br>"; // FRED FLINTSTONE
    print(ucfirst($string2))."<br>"; // Barney rubble
    print(ucwords($string2))."<br>"; // Barney Rubble
?>