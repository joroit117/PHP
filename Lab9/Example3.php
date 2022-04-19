<?php

class Customer {

    private $data = array();

    public function __set($dt, $vl) {
        $this->data[$dt] = $vl;
    }

    public function __get($dt) {
        return $this->data[$dt];
    }

    public function __isset($dt) {
        return isset($this->data[$dt]);
    }

    public function __unset($dt) {
        unset($this->data[$dt]);
    }

}

$c = new Customer();
$c->name = "Ivan Ivanov";
echo "The customer is: $c->name";
echo "<br>The result of isset is " . isset($c->name) . "\n";
unset($c->name);
echo "<br>After unset, the result of isset is " . isset($c->name);
?>
