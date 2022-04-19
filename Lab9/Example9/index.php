<?php
session_start();
$_SESSION['username'] = "Maria";
echo 'Hello, ' . $_SESSION['username'] . "<br>";
?> 
<a href="page2.php">Go to next page </a> 