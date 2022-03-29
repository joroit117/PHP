<?php
    function sumArray($array){
        $result = 0;
        for($i = 0; $i < sizeof($array); $i++){
            $num = (int)$array[$i];
            if($num % 5 == 0){
                $result += $num;
            }
        }
        echo $result;
    }
?>

