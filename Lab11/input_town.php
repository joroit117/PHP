<html>
    <form method="post">
        <a>Град: </a><input type="text" name="town"><br><br>
        <input type="submit" name="submit" value="Въведи">
    </form>
</html>
<?php
include 'config.php';
if (isset($_POST["submit"])) {
    $town = $_POST['town'];
    if (!empty($town)) {
        $sql = "INSERT INTO town (Town) VALUES ('$town')";
        $result = mysqli_query($dbConn, $sql);
        if (!$result) {
            die('Error: ' . mysql_error());
        }
        echo "Добавихте един запис.";
    } else
        echo "Не сте въвели всички данни!!!";
}
