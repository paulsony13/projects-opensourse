<?php
session_start();
include('../db/connectionI.php');

$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 


if(isset($_POST['login']))
{

$sql=mysqli_query($con,"SELECT * FROM tbl_seller where username='$myusername' AND password='$mypassword'");

$num=mysqli_num_rows($sql);
if($num!=0)
{
	$row=mysqli_fetch_array($sql);
	
	$_SESSION['sid']=$row['id'];		
	$_SESSION['stype']="seller";
	$_SESSION['slogin']="1";
	header("location:../dashboard/dashboard.php");
} 
else
{
	header("location:login.php");
}
 
}

?>
 
 



