<?php

session_start();
echo 'Hello, ' . $_SESSION['username'];
unset($_SESSION['username']); // разрегистраме променливата 
echo 'Your session is unset, ' . $_SESSION['username'];
/* Сега вече името на потебителя не се извежда */
session_destroy(); // разрушаване на сесия 
?>