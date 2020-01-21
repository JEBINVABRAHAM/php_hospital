<!-----------query for register doctor in database--------->
<?php
include_once 'connection.php';
$dname=$_POST['dname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$nationalid=$_POST['nationalid'];
$qualification=$_POST['qualification'];
$department=$_POST['department'];
$experience=$_POST['experience'];
$clinicaddress=$_POST['clinicaddress'];
$clinictiming=$_POST['clinictiming'];
$username=$_POST['username'];
$password=$_POST['password'];
$status="pending";

if (isset($_POST['submit']))
{
	$sq="select * from doctor";
	$r=mysqli_query($conn,$sq);
	$flag=0;
	while($row=mysqli_fetch_assoc($r))
	{
		if($row['username']==$username)
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
		echo "Already existing username";
		mysqli_close($conn);
	}
	else
	{

	
	
		$sql="INSERT INTO doctor(dname,mobile,email,nationalid,qualification,department,experience,clinicaddress,clinictiming,username,password,status)VALUES('".$dname."','".$mobile."','".$email."','".$nationalid."','".$qualification."','".$department."','".$experience."','".$clinicaddress."','".$clinictiming."','".$username."','".$password."','".$status."')";
		if(!$result=$conn->query($sql))
		{
			die('there was an error running the query['.$conn->error.']');
		}
		else
		{
			require_once "login.php";
		}
	}
}
?>	
