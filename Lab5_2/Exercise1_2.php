<html>
    <body>
        <form action="#" method="post">
            <p><b>Лице на правоъгълник</b></p>
            <a>Въведете дължина и ширина на правоъгълника.</a><br>
            <label>Дължина:</label>
            <input type="text" name="length">
            <label>Ширина:</label>
            <input type="text" name="width"><br>
            <input type="submit" name="submit" value="Go"><br>
            <?php
                require './Exercise1.php';
                if(isset($_POST['submit'])){
                    $l = $_POST['length'];
                    $w = $_POST['width'];
                    recArea($l, $w);
                }
            ?>
        </form>
    </body>
</html>

