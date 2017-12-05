<?php
class DBCommon
{
    private $host="localhost";
    private $user="root";
	private $pass="";
	private $db="bank";
	
	public function connect()
	{
	$con=mysqli_connect($this->host,$this->user,$this->pass,$this->db); 
	return $con;
	}
}
?>
	