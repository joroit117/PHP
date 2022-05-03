<html>
    <form method="post">
        <a>Фирма: </a><input type="text" name="company"><br><br>
        <a>Булстат: </a><input type="text" name="bulstat"><br><br>
        <a>Населено място: </a>
        <select name="cityID">
            <?php
                include "config.php";
                $result =mysqli_query($dbConn, "SELECT * FROM town");
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option>";
                    echo $row['Town'];
                    echo "</option>";
                }
            ?>
        </select>
        <br><br>
        <a>Телефон: </a><input type="text" name="phoneNumber"><br><br>
        <a>Година на регистрация: </a><input type="text" name="registrationYear"><br><br>
        <a>Лице за контакт: </a><input type="text" name="contact"><br><br>
        <input type="submit" name="submit" value="Въведи">
    </form>
</html>
<?php
include 'config.php';
if (isset($_POST["submit"])) {
    $company = $_POST['company'];
    $bul = $_POST['bulstat'];
    $cityID = $_POST['cityID'];
    $phoneNumber = $_POST['phoneNumber'];
    $registrationYear = $_POST['registrationYear'];
    $contact = $_POST['contact'];
    if (!empty($town)) {
        $sql = "INSERT INTO provider (Company, BULSTAT, cityID,"
                . " PhoneNumber, RegistrtationYear, Contact)"
                . " VALUES ('$company', '$bul', '$cityID', '$phoneNumber', '$registrationYear', '$contact')";
        $result = mysqli_query($dbConn, $sql);
        if (!$result) {
            die('Error: ' . mysql_error());
        }
        echo "Добавихте един запис.";
    } else 
        echo "Не сте въвели всички данни!!!";
    
}
