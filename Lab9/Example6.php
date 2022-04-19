<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Session_example</title>
    </head>
    <body>
        <?php
        echo "Session id=" . session_id() . "<br>";
        echo "Директорията за съхраняване на сесийните променливи е 
" . session_save_path();
//session_destroy();
//echo "Session id=".session_id()."<br>";
        ?>
        <form>
            <br><input type="submit" value="Reload">
        </form>
    </body>
    </html>