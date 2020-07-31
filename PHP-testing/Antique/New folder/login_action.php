<?php
include 'connection.php';

$query = "SELECT * FROM tbl_login WHERE username='$_POST[email]' and password='$_POST[password]'"; 	 

$data=mysqli_query($con,$query);
$count=mysqli_num_rows($data);
if($count==1)
{

	$query1 = "SELECT * FROM tbl_customer WHERE username='$_POST[email]' and password='$_POST[password]'"; 	 
	$data1=mysqli_query($con,$query1);
	$row=mysqli_fetch_array($data1);
	session_start();
	$_SESSION['user']="customer";
	$_SESSION['id']=$row['id'];
	$_SESSION['username']=$row['first_name'];
	$_SESSION['email']=$row['email'];
	$_SESSION['phone_number']=$row['phone_number'];
	header("location:index.php");
	
}
else
{
	echo "Error : ".mysqli_error($con);
	header("location:login.php?status=error");
}


?>
