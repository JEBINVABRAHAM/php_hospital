<!---booking confirmation-->
<?php
include_once 'connection.php';
$id=$_POST['id'];
$username=$_POST['username'];
$date=$_POST['date'];
$slot=$_POST['slot'];
$status="Pending";
if (isset($_POST['submit']))
{
	$sql="UPDATE appointment SET username='".$username."',date='".$date."',slot='".$slot."',status)VALUES('".$id."','".$name."','".$clinicaddress."','".$clinictiming."','".$department."','".$date."','".$slot."','".$status."')";
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
