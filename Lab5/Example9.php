<?php
    function args()
    { 
        $numargs = func_num_args();
        echo "Number of arguments: $numargs<br>";
         if ($numargs >= 0) 
        {
            echo "First argument is: ".func_get_arg(0)."<br>";
        }
    }
    args(10, 12, 333);
?>