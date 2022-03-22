<?php
    function init_array ()
    { 
        return array(10,20,30);
    }
    list($first, $second, $thierd)=init_array();
    echo "Values: $first, $second, $thierd";
?>