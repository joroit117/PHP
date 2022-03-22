<?php
    function fn1()
    {
        static $counter = 0;
        $counter++;
        echo "Call number = $counter<br>";
    }
    fn1();
    fn1();
    fn1(); 
?>