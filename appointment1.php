<!--for book an appointmnet by user-->

<?php
include_once 'connection.php';
session_start();
$id=$_POST['id'];
$dname=$_POST['dname'];
$clinicaddress=$_POST['clinicaddress'];
$clinictiming=$_POST['clinictiming'];
$department=$_POST['department'];
$username=$_SESSION['username'];
$date=$_POST['date'];	
$slot=$_POST['slot'];
$status="Pending";
if (isset($_POST['submit']))
{
	$sql="INSERT INTO appointment(id,dname,clinicaddress,clinictiming,department,username,date,slot,status)VALUES('".$id."','".$dname."','".$clinicaddress."','".$clinictiming."','".$department."','".$username."','".$date."','".$slot."','".$status."')";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "userprofile.php";
	}
}
?>	
