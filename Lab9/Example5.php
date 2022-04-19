<?php

class Customer {

    function __invoke($name) {
        var_dump($name);
    }

}

$c = new Customer();
$c("Ivan Ivanov");
?>
