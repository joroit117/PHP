<html>
    <head>
        
    </head>
    <body>
        <ul name="list">
            <?php
                for($i = 1; $i <= 10; $i++){
                    $xPow = pow($i, 3);
                    echo "<li>x=$i</li>";
                    echo "<ul><li>x=$xPow</li></ul>";
                }
            ?>
        </ul>
    </body>
</html>

