<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form method="post" action="#">
            <a><b><i>Squares and Square roots for the Numbers 1-12</i></b></a><br/>
            <table name="table">
                    <tr>
                    <th>x</th>
                    <th>Square</th>
                    <th>Square root</th>
                    </tr>
                <?php
                    for($i = 1; $i <= 12; $i++){
                        $x = $i;
                        $squarex = pow($i, 2);
                        $squarerootx = round(sqrt($i), 2);
                        echo "<tr>";
                        echo "<td>$x</td>";
                        echo "<td>$squarex</td>";
                        echo "<td>$squarerootx</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </form>
    </body>
</html>
