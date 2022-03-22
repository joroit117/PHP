<?php
    function fn1()
    {
        static $counter = 0;
        $counter++;
        echo "Call number = $counter<br>";
    }
    if (function_exists('fn1'))
    {
        echo "fn1 function is available.<br>";
    } 
    else 
    {
        echo "fn1 functions is not available.<br>";
    }
    fn1(); 
?>
