<?php
session_save_path("F:\\session_data");
session_start();
echo "Session id=" . session_id() . "<br>";
session_destroy();
echo "Session id=" . session_id() . "<br>";
?>
<form>
    <br><input type="submit" value="Reload">
