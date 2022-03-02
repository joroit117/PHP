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
        <style>
            input, a, textarea, h2{
                margin-top: 5px;
                margin-bottom: 5px;
                margin-right: 5px;
                margin-left: 5px;
            }
        </style>
    </head>
    <body>
        <form style="border: 1px solid black; width: 20%; float: left" method="post" action="#">
            <h2><b>Registration Form</b></h2>
            <a>Name</a><br/>
            <input type="text"  name="name"><br/>
            <a>Family</a><br/>
            <input type="text" name="family"><br/>
            <a>E-mail</a><br/>
            <input type="text" name="email"><br/>
            <a>Choose a course:</a><br/>
            <input type="radio" name="option" value="PHP">PHP<br/>
            <input type="radio" name="option" value="Lisp">Lisp<br/>
            <input type="radio" name="option" value="Perl">Perl<br/>
            <input type="radio" name="option" value="Unix">Unix<br/>
            <a>Additional information for you?</a><br/>
            <textarea style="width: 90%; height: 10%" name="info"></textarea>
            <input type="checkbox" name="check">Confirm the receiving of the information<br/>
            <input type="submit" name="submit" value="Go">
            <input type="submit" name="reset" value="Reset">
        </form>
        <?php
        if(isset($_POST["submit"])){
            if(isset($_POST["check"])){
                $name = $_POST["name"];
                $family = $_POST["family"];
                $email = $_POST["email"];
                if(!empty($_POST["option"])){
                 $option = $_POST["option"];
                }
                echo "Hello, $name $family!<br/>";
                echo "Your choice is $option";
            }
            else{
                echo 'Please check the confirm box!';
            }
        } 
        ?>
    </body>
</html>