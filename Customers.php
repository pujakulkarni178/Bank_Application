<?php
include 'Connection.php';
class Customers extends DBCommon
{
	public function saveRecords($tbName,$Name,$Mobile,$Email,$Postal,$Bdate)
	{
	   $conn=$this->connect();
	   mysqli_query($conn,"insert into $tbName values('$Name',$Mobile,'$Email','$Postal','$Bdate')");
	}
	
	public function displayall($tbName)
	{
	    $conn=$this->connect();
	    echo "<table border='1'>";
	    echo "<tr><th>Name</th><th>Mobile</th><th>Email</th><th>Postal</th><th>Bdate</th></tr>";
	    
	    $quer=mysqli_query($conn,"select * from $tbName");
	    
	    while($res=mysqli_fetch_array($quer))
	    {   
	        echo "<tr>";
	        echo "<td>".$res['Name']."</td>";
	        echo "<td>".$res['Mobile']."</td>";
	        echo "<td>".$res['Email']."</td>";
	        echo "<td>".$res['Postal']."</td>";
	        echo "<td>".$res['Bdate']."/td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	public function delete($Id)
	{
	    mysql_query("DELETE FROM customers WHERE Id=".$Id);
	}
	public function update($Name,$Mobile,$Email,$Postal,$Bdate,$Id)
	{
	    mysql_query("UPDATE Customers SET Name='$Name', Mobile='$Mobile', Email='$Email', Postal='$Postal', Bdate='$Bdate' WHERE id=".$Id);
	}
}

 ?>      
        

