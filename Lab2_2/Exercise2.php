<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="#">
            <a>Find solution for ax^2 + bx + c</a><br/>
            <a>a:</a><input type="text"  name="a"><br/>
            <a>b:</a><input type="text"  name="b"><br/>
            <a>c:</a><input type="text"  name="c"><br/>
            <input type="submit" name="submit" value="Find x!"/>
        </form>
        <?php
            if(isset($_POST["submit"])){
                $a = $_POST["a"];
                $b = $_POST["b"];
                $c = $_POST["c"];
                $D = pow($b, 2) - 4 * $a * $c;
                $x1 = round(((-$b + sqrt($D)) / (2 * $a)), 2);
                $x2 = round(((-$b - sqrt($D)) / (2 * $a)), 2);
                if($D > 0){
                    echo "x1 = $x1<br/>x2 = $x2";
                }
                else if($D == 0){
                    echo "x1 = x2 = $x1";
                }
                else{
                    echo "No real roots!";
                } 
            }
        ?>
    </body>
</html>

