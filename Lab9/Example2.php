<?php

class Customer {

    private $firstName, $lastName, $email;

    public function __construct($firstName, $lastName, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __toString() {
        return "The customer $this->firstName $this->lastName" . " has e-mail address " . $this->email;
    }

}

$c = new Customer("Ivan", "Ivanov", "ivo@abv.bg");
echo $c;
?>