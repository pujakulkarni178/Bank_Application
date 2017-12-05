<?php

$CustomerId=$_POST['$CustomerId'];
$AccountType=$_POST['$AccountType'];
$Account = new Account($CustomerId,$AccountType);
extract($_POST);
//Saved Records Inside Database
if(isset($Atype))
{
    //here admin is table name, $userName and $pass  entered by html form
    $obj->saveRecordss("accounts",$CustomerId,'$AccountType',$accountNumber,$totalBalance,$amount);
    echo"record save ";
    
}

?>