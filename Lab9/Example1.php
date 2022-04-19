<?php

class Customer {

    public $name;
    private $data = array();

    public function __set($dt, $vl) {
        $this->data[$dt] = $vl;
    }

    public function __get($dt) {
        return $this->data[$dt];
    }

}

$c = new Customer();
$c->name = "Ivan Ivanov"; // $name is set because its public
$c->__set("email", "ivan@abv.bg");
echo "The email of " . $c->name . " is " . ($c->__get("email"));
$c->age = 23;
echo "<br> It's age is " . ($c->__get("age"));
$c->__set("grade", 4.20);
echo "<br>It's grade is " . $c->grade;
?>