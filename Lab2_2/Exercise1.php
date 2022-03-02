<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="#">
            <p>Please enter your age:</p>
            <input type="text"  name="age">
            <p>Please enter the price:</p>
            <input type="text" name="price"><br/><br/>
            <input type="submit" name="submit" value="Go">
        </form>
        <?php
        if(isset($_POST["submit"])){
            $a = $_POST["age"];
            $price = $_POST["price"];
            
            if($a <= 6 || $a >= 65){
                $price /= 2;
            }
            
            echo "<br/>Your age is $a.The pice is $price";
        } 
        ?>
    </body>
</html>