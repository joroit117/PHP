<?php

echo '<table>';
    for($i = 1; $i <= 7; $i++){
        echo '<tr>';
        for($j = $i; $j <= $i * 7 ; $j+=$i){
            echo '<td>';
            echo "$j";
            echo '</td>';
        }
        echo '</tr>';
    }
echo '</table>';

