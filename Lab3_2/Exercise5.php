<html>
    <body>
        <form method="post">
            <a>Въведете число: </a>
            <input type="text" name="num"><br/>
            <input type="submit" name="check" value="Провери">
        </form>
        <?php
            if(isset($_POST['check'])){
                $input = $_POST['num'];
                $number = $input;
                $counter = 0;
                while($number > 1){
                    $digit = $number % 10;
                    if($digit % 2 == 0){
                        $counter++;
                    }
                    $number /= 10;
                }
                echo "Числото $input съдържа $counter четни цифри.";
            }
        ?>
    </body>
</html>
