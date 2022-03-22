<?php
    function checkTriangle($a, $b, $c){
        $triangleInfo = [];
        if($a == $b && $a == $c && $b == $c){
            array_push($triangleInfo, 'Равностранен');
        }else if($a != $b && $a != $c && $b != $c){
            array_push($triangleInfo, 'Разностранен');
        }else{
            array_push($triangleInfo, 'Равнобедрен');
        }
        $p = ($a + $b + $c) / 2;
        $S = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        array_push($triangleInfo, $S);
        return $triangleInfo;
    }
?>

