<?php
include 'Connection.php';

if (isset($_POST['LastName'])&&($_POST['FirstName'])&&($_POST['uid'])&&($_POST['pass'])){
$LastName=$_POST['LastName'];
$FirstName=$_POST['FirstName'];
$uid=$_POST['uid'];
$pwd=$_POST['pass'];

$sql="INSERT INTO  persons(LastName,FirstName,uid,pass) VALUES ('$LastName','$FirstName','$uid','$pass') ";
$result=$conn->query($sql);

}
