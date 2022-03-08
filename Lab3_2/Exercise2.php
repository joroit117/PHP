<?php

$i = 0;
while ($i < 9){
    echo 'abc ';
    $i++;
}
echo '<br/>';

$j = 0;
do{
echo 'xyz ';
$j++;
}while($j < 9);
echo '<br/>';

for($i = 1; $i < 9; $i++){
    echo "$i ";
}
echo '<br/>';

echo '<ol>';
for($i = "A"; $i < "G"; $i++){
    echo "<li> Item $i </li>";
}   
echo '</ol>';