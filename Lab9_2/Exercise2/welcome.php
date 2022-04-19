<?php
echo 'Welcome ' . $_COOKIE['user'] . '<br>';
echo 'All cookies:<br>';
print_r($_COOKIE);
?>
<html>
    <a href="last.php">Next page - delete cookie</a>
</html>

