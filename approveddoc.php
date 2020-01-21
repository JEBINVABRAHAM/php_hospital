<!-----------application of doctors accepting by admin------------>
<?php
include_once 'connection.php';
$dname=$_POST['dname'];
if (isset($_POST['submit']))
{
	$sql="UPDATE doctor SET status='Approved' where dname='".$dname."'";                                    
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "adminhome.php";
	}
}
#----------application of doctors rejecting by admin-------------->


else if (isset($_POST['reject']))
{
	$sql="UPDATE doctor SET status='Pending' where dname='".$dname."'";                                    
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "adminhome.php";
	}
}
?>	
