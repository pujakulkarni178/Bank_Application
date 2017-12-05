<?php
class FixDeposite extends Account{
    private $amount;
    private $days;
    private $irate;
    
    public function __construct($totalBalance, $accountNumber)
    {
        parent::__construct($totalBalance, $accountNumber);
    }
    
    public function getAmount()
    {
        return $this->amount;
    }
    public function getDays()
    {
        return $this->days;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    public function setDays($days)
    {
        $this->days = $days;
    }
    
    public function getIntrestRate()
    {
        $irate=$amount*$days;
        return $this->irate;
    }
    

}
?>