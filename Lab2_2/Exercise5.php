<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="#">
            <a>Enter the number:</a><br/>
            <input type="text"  name="number"><br/>
            <a>Enter the digit:</a><br/>
            <input type="text"  name="digit"><br/>
            <input type="submit" name="submit" value="GO"/>
        </form>
        <?php
            if(isset($_POST["submit"])){
                $number = $_POST["number"];
                $digit = $_POST["digit"];
                $containCounter = 0;
                
                while($number >= 1){
                    $d = $number % 10;
                    if($d == $digit){
                        $containCounter++;
                    }
                    $number /= 10;
                }
                
                if($containCounter > 0){
                    echo "The number contains $containCounter times digit $digit.";
                }else{
                    echo "The number doesn't contains $digit.";
                }
            }
        ?>
    </body>
</html>
