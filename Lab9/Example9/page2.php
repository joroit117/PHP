<?php
session_start();
echo $_SESSION['username'] . ' , This is page 2 of the site!';
echo("<br>");
?> 
<a href="page3.php">Next page - 3 </a> 