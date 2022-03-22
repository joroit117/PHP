<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; 
        charset=UTF-8">
        <title>Functions</title> 
    </head>
    <body>
        <?php
            function funk1() 
            {
                function funk2() 
                {
                echo "Аз не съществувам, докато не се извика func1().";
               }
            }
            funk1();
            funk2();
        ?> 
    </body>
</html>