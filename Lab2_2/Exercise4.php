<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="#">
           
        </form>
        <?php
            $month = date('F', time());
            if($month == "August"){
                echo "Август е, и е наистина горещо.";
            }else{
                echo "Не е август, така че поне не е горещо!";
            }
        ?>
    </body>
</html>


