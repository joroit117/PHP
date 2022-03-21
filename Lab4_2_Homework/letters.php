<?php
    include 'data.php';
    echo '<p><b>Резултат:</b></p>';
    for ($i = 0; $i < count($arrUsers); $i++) {
        echo "<p>Уважаеми(а), $arrUsers[$i]</p>";
        echo "<p>Имаме удоволствието да ви поканим на $arrEvents[$i]</p>";
        echo "<p>$arrSpecialMsgs[$i]</p>";
        echo "<p>С уважение, $host!</p>";
        if($i != count($arrUsers) - 1){
         echo "<hr>";   
        }
    }
?>

