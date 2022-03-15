<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <p>Please enter your information:</p>
            <a>City:</a><input type="text" name="city">
            <a>Month:</a><input type="text" name="month">
            <a>Year:</a><input type="text" name="year">
            <br/>
            <p>Please choose the kinds of weather you experienced from the list below.</p>
            <p>Choose all that apply.</p>
            
            <input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br/>
            <input type="checkbox" name="weather[]" value="clouds" />Clouds<br/>
            <input type="checkbox" name="weather[]" value="rain" />Rain<br/>
            <input type="checkbox" name="weather[]" value="hail" />Hail<br/>
            <input type="checkbox" name="weather[]" value="sleet" />Sleet<br/>
            <input type="checkbox" name="weather[]" value="snow" />Snow<br/>
            <input type="checkbox" name="weather[]" value="wind" />Wind<br/>
            <input type="checkbox" name="weather[]" value="cold" />Cold<br/>
            <input type="checkbox" name="weather[]" value="heat" />Heat<br/><br/>
            
            <input type="submit" value="Go" name="submit">
            
            <?php
                    if (isset($_POST["submit"])) {
                        $city = $_POST["city"];
                        $month = $_POST["month"];
                        $year = $_POST["year"];
                        echo "<p>In $city in the month of $month $year, you observed the following weather.</p>";
                        $w = $_POST["weather"];
                        echo "<ul>";
                        foreach ($w as $value) {
                            echo "<li>$value</li>";
                        }
                        echo "</ul>";
                    }
            ?>
        </form>
    </body>
</html>
