
<?php
$automobile = array("Мерцедес", "BMW", "Форд");
echo $automobile [0];
?>

<?php
$automobile [0] = "Мерцедес";
$automobile[1] = "BMW";
$automobile[2] = "Форд";
echo $automobile [0];
?>

<?php
$automobile[] = "Мерцедес";
$automobile[] = "BMW";
$automobile[] = "Форд";
echo $automobile [0];
?>

<?php
$signature = array("FirstName" => "Иван",
"LastName"=>"Петров");
echo $signature ["LastName"];
echo "<br>";
echo "Документът е подписан от г-н
".$signature["LastName"].".";
?>

<?php
$signature ["FirstName"] = "Иван";
$signature ["LastName"] = "Петров";
echo $signature ["LastName"];
echo "<br>";
echo "Документът е подписан от г-н
".$signature["LastName"].".";
?>

<pre>
<?php
$a=array(3=>"Peter", 'b'=>"Jon","Harry");
print_r($a);
?>
</pre>

<?php
$arr = array("foo" => "bar", 12 => true, "13" => "Maria",
"012"=>"Dean");
echo $arr["foo"]; // bar
echo "<br>".$arr[12]; // 1
echo "<br>".$arr["12"]; // 1
echo "<br>".$arr["012"]; // Dean
echo "<br>".$arr["13"]; //Maria
echo "<br>".$arr[13]; // Maria
?>

<?php
$arr = array("Article" => array(1 => "Kiwi", 5 => "Apple",
3 => "Orange"), "Price"=>array(1=>2.35, 5=>1.35,3=>1.70));
echo $arr["Article"][1]." - ". $arr["Price"][1];
echo "<br>".$arr["Article"][5]." - ". $arr["Price"][5];
echo "<br>".$arr["Article"][3]." - ". $arr["Price"][3];
?>

<?php
$arr=array(null => 10, 20, 30, 3 => 12);
echo "<br>".$arr[null]; // 10
echo "<br>".$arr[0]; // 20
echo "<br>".$arr[1]; // 30
echo "<br>".$arr[3]; //12
?>

<?php
$arr=array(false => 10, 20, 30, 3 => 12);
$arr[0]=14;//Променя се съдържането на елемент с индекс 0.
$arr[]=100; //Генерира се елемент с индекс 4
$arr[4] = 100;
echo "<br>".$arr[false]; // 14
echo "<br>".$arr[0]; // 14
echo "<br>".$arr[1]; // 20
или: echo "<br>".$arr[true];
echo "<br>".$arr[2]; //30
echo "<br>".$arr[3]; //12
echo "<br>".$arr[4]; //100
?>

<?php
$arr[0]=14;
$arr[]=100;
echo "<br>".$arr[false]; // 14
echo "<br>".$arr[0]; // 14
echo "<br>".$arr[1]; // 100
unset($arr[0]); // Премахва елемент от масива
unset($arr); // Изтрива целия масив
?>

<PRE>
<?php
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
print_r($a);
unset($a[2]);
print_r($a);
/* ще доведе до масив, който би бил дефиниран като
$a = array(1 => 'one', 3 => 'three');
а НЕ като $a = array(1 => 'one', 2 =>'three'); */
$b = array_values($a);
print_r($b);
?>
</PRE>

<PRE>
<?php
$array = array('man' => "m", 'woman' => "w", "child"=>'c');
print_r(array_values($array));
?>
</PRE

<PRE>
<?php
$ar = array('man' => "m", "woman"=>"w", "child"=>'c');
echo "<br>The Initial array is:<br>";
print_r($ar);
if (array_key_exists('man', $ar)) {
    echo "Index 'man' is in the array! ";}
if (in_array("m", $ar)){
    echo "Value 'm' is in the array!";}
$br=count($ar);
echo "<br>Count elements: $br<br>"; // output 3
echo "<br>The array_values function returns:<br>";
print_r(array_values($ar));
echo "<br>But the Initial array arr is the same:<br>";
print_r($ar);
echo "<br>The array_keys function returns:<br>";
$c=array_keys($ar); //Формира се масив $c - от ключовете на $ar
print_r($c);
$key = array_search('w', $ar); //Търсим ключа, по зададена стойност в масива
print_r($key); //$key =woman
?>
</PRE>

<PRE>
<?php
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1,$ar2);
echo "<br>Print the array ar1:<br>";
print_r($ar1);
echo "<br>Print the array ar2:<br>";
print_r($ar2);
?>
</PRE>

<PRE>
<?php
$arr1 = array(2, 3);
echo "<br>1. Print the array ar1:<br>";
print_r($arr1); // [0] => 2, [1] => 3
$arr2 = $arr1;
echo "<br>2. Print the array ar2:<br>";
print_r($arr2);
$arr2[] = 4; // $arr2 е променен,
// $arr1 е все още array(2, 3)
echo "<br>3. Print the array ar2 again:<br>";
print_r($arr2); //2,3,4
$arr3 = &$arr1;
echo "<br>4. Print the array ar3=&ar1:<br>";
print_r($arr3); //2,3
$arr3[] = 4; // сега $arr1 и $arr3 са едно и също
echo "<br>5. Print the array ar3:<br>";
print_r($arr3); //2,3,4
echo "<br>6. Print the array ar1:<br>";
print_r($arr1); //2,3,4
?>
</PRE>

<PRE>
<?php
$arr1 = array('name'=>"Ivan", "age"=>23);
echo "<br>1. Print the array ar1:<br>";
print_r($arr1);
$arr2 = each($arr1);
echo "<br>2. Print the array ar2:<br>";
print_r($arr2);
$arr2 = each($arr1);
echo "<br>3. Print the array ar2:<br>";
print_r($arr2);
?>
</PRE>