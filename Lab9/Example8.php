<?php
session_start();
if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
    echo "Views=" . $_SESSION['views'];
} else {
    $_SESSION['views'] = 1;
    echo "Views=" . $_SESSION['views'];
}
?> 
<form>
    <br><input type="submit" value="Reload">