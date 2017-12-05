<?php
require_once 'Connection.php';
include 'Account.php';
class SavingAccount extends Account{
    private $minBalance=500;
    
    public function __construct($totalBalance, $accountNumber)
    {
        parent::__construct($totalBalance, $accountNumber);
    }
    public function getMinBalance()
    {
        return $this->minBalance;
    }
    public function setMinBalance($minBalance)
    {
        $this->minBalance = $minBalance;
    }

   
}
?>