<?php

class Customer {

    public function __call($n, $m) {
        var_dump($n);
        var_dump($m);
    }

}

$c = new Customer();
$c->My_Method("Name", "email");
?>
