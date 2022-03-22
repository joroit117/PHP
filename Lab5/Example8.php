<?php
    function Message($sign="The Rector of the TU - Varna.")
    {
        echo "Dear students, welcome to the Technical 
        University of Varna!<br>";
        echo $sign . "<br>";
    }
    Message(); // Извиква се функцията без параметри.
    Message("Sincerely, Your Dean."); 
?>