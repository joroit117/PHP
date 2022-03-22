<PRE>
<?php
    $a = "Hello world";
    if(strpos($a,"Hello")!=0){ 
        echo "Sub-string 'Hello'is not found!<br>";
    }
    else 
    {
        echo "Sub-string 'Hello'is found!<br>";
        $i=strpos($a,"Hello"); 
        echo "<br>"."Test for strpos: ";
        echo "The index of \"Hello\" is $i";
    }
    echo "<br>"."Test for strstr($a, \"lo\"):
    ".strstr($a,"lo");
    $b = explode(" ", $a);
    echo "<br>"."Test for explode: "."<br>";
    print_r($b);
    $b=str_split($a, 2);
    echo "<br>"."Test for str_split: "."<br>";
    print_r( $b);
?>
</PRE>