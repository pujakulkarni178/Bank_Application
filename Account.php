<?php
require 'Connection.php';
require 'AccountInclude.php';
class Account{
	private $accountNumber;
	private $totalBalance;
	public function __construct($CustomerId,$AccountType)
	{
	    $this->$CustomerId=$CustomerId;
	    $this->$AccountType=$AccountType;
	    
	}
	public function saveRecordss($tbName,$CustomerId,$AccountType,$accountNumber,$totalBalance,$amount)
	{
	    $conn=$this->connect();
	    mysqli_query($conn,"insert into $tbName values($CustomerId,'$AccountType','$accountNumber','$totalBalance','$amount')");
	}

	public function deposit($accountNumber,$amount){
		$this->totalBalance += $amount; 
	}
	
	public function withdraw($amount){
		if($amount > $this->totalBalance)
			die('Not enough money to withdraw');
 
		$this->totalBalance -= $amount;
	}
	
	public function getBalance(){
	    return $this->totalBalance;
	}
	
	public function getAccountNumber(){
		return $this->accountNumber;
	}
	public function setAccountNumber($accountNumber){
		$this->accountNumber = $accountNumber;
 
	}
	public function __destruct() {
	    echo 'Account is deleted';
	}
	
}
