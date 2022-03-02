<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="#">
            <a>Enter the number of month:</a><br/>
            <input type="text"  name="month"><br/>
            <input type="submit" name="submit" value="GO"/>
        </form>
        <?php
            if(isset($_POST["submit"])){
                $month = $_POST["month"];
                switch ($month):
                    case 12:
                    case 1:
                    case 2:
                        echo "The result is: winter";
                        break;
                    case 3:
                    case 4:
                    case 5:
                        echo "The result is: spring";
                        break;
                    case 6:
                    case 7:
                    case 8:
                        echo "The result is: summer";
                        break;
                    case 9:
                    case 10:
                    case 11:
                        echo "The result is: autumn";
                        break;
                endswitch;
            }
        ?>
    </body>
</html>


