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
                for($i = 1; $i <= 100; $i++){
                    $sum = 0;
                    $j = $i;
                    while($j >= 1){
                        $sum += $j % 10;
                        $j /= 10;
                    }
                    if($sum == $input){
                        echo "$i<br/>";
                    }
                }
            }
        ?>
    </body>
</html>
