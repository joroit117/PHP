<?php
    $make = true;
    /* тук не бива да извикаме функция Make_event(); това е 
    фатална грешка, защото тя още не съществува, но може да 
    извикаме функция Save_info() */
    //Това извикване на функцията ще изведе стойностите по подразбиране
    Save_info();
    if ($make){
        // дефиниране на функция Make_event()
         function Make_event()
         {
            echo "<p>I would like to study Python<br>";
         }
    }
    /* сега може вече да извикаме Make_event(), защото 
    Make_event()е вече дефинирана! */
    Make_event();
    // дефиниране на функция Save_info
    function Save_info($first='Ivan', $last='Ivanov',
        $message='I study PHP'){
        echo "<br>$message<br>";
        echo "Name: ". $first . " ". $last . "<br>";
    }
    //Това извикване на функцията ще изведе стойностите на параметрите
    Save_info("Nina","Nikolova", "I study Lisp");
?>