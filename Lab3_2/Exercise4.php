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
                $isPrime = true;
                for($i = 2; $i < $input; $i++){
                    if($input % $i == 0){
                        $isPrime = false;
                        break;
                    }
                }
                if($isPrime){
                    echo "Числото $input е просто";
                }else{
                    echo "Числото $input не е просто";
                }
            }
        ?>
    </body>
</html>



