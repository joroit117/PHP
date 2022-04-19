<?php

class Donation{
    private $name;
    private $amount;
    static $totalDonated;
    static $numberOfDonors;
    
    public function __construct($name, $amount) {
        $this->name = $name;
        $this->amount = $amount;
        self::$totalDonated += $amount;
        self::$numberOfDonors++;
    }
    
    function info(){
        $sum = number_format($this->amount / self::$totalDonated * 100, 2);
        echo $this->name . ' donated ' . $this->amount . ' (' . $sum . ')<br>';
    }
}

$donors = array( new Donation("Nichola", 85.00), new Donation("Mitko", 50.00), new Donation("Emily", 90.00), new Donation("Iliana", 65.00));
for($i = 0; $i < sizeof($donors); $i++){
    $donors[$i]->info();
}
echo 'Total Donations = ' . Donation::$totalDonated . '<br>';
echo 'Number of Donors = ' . Donation::$numberOfDonors;


