<?php
include 'Customers.php';
$obj=new Customers();
extract($_POST);
//Saved Records Inside Database
if(isset($save))
{
    $obj->saveRecords("customers","$Name",$Mobile,"$Email","$Postal",$Bdate);
    $obj->displayall("customers");
    echo "New record created successfully.";
 
}

?>