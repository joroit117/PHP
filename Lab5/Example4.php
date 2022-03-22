<?php
    function hello($who) 
    { 
        echo "<br>Hello $who"; 
        if ($who == "World"){ 
            return; 
        }
        echo ", how are you"; 
    } 
    hello("World");
    hello("Reader"); 
?>
