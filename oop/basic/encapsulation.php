<?php

class Bank {
    
    function __construct( private int $balance ) {

    }

    public function set_balance($balance) : void {
        if($balance >= 0) {
            $this->balance = $balance;
        }
    }

    public function get_balance() : int {
        return $this->balance;
    }
}

$bank = new Bank(500);
echo "{$bank->get_balance()}\n";
$bank->set_balance(200);
echo "{$bank->get_balance()}\n";



?>