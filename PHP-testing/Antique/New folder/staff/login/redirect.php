<?php
session_start();
include('../db/connectionI.php');
//$db_name="music"; // Database name 
$tbl_name="employee"; // Table name 

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if(isset($_POST['login']))
{
//

if($myusername=="admin" and $mypassword="admin")
{
header("location:../dashboard/dashboard.php");
}
else
{
header("location:login.php?a=1");
}




}

?>
 
 



