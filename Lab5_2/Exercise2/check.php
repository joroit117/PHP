<?php
    include './index.php';
    include './functions.php';
    if(isset($_POST['submit'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $triangle = checkTriangle($a, $b, $c);
        echo "Триъгълникът е $triangle[0]<br>";
        $area = round($triangle[1], 2);
        echo "Лицето на триъгълника е:$area кв. см.";
    }
?>

