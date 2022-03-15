<html>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $cities = array(
                'Tokyo',
                'Mexico City',
                'New York City',
                'Mumbai',
                'Seoul',
                'Shanhai',
                'Lagos',
                'Buenos Aires',
                'Cairo',
                'London'
                );
            
                foreach ($cities as $value) {
                    echo "$value, ";
                }
                
                sort($cities);
                echo "<ul>";
                foreach ($cities as $value) {
                    echo "<li>$value</li>";
                }
                echo "</ul>";
            
                array_push($cities,
                        'Los Angeles',
                        'Calcutta',
                        'Osaka',
                        'Beijing');
                
                sort($cities);
                echo "<ol>";
                foreach ($cities as $value) {
                    echo "<li>$value</li>";
                }
                echo "</ol>";
                
                echo "<table>";
                echo "<tr><th>key</th><th>value</th></tr>";
                foreach ($cities as $key => $value) {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$value</td>";
                    echo "</tr>";
                }
                echo "</table>";
        ?>
    </body>
</html>
