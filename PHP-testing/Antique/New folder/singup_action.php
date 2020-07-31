<?php 
include 'connection.php';

$query1="INSERT INTO tbl_login(username,password,type) 
VALUES('$_POST[username]','$_POST[password]','user')";

$query="INSERT INTO tbl_customer(custfname, custlname, gender, house, street, city, state, phn, email, username, password) 
VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[gender]','$_POST[house]','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[phone_number]','$_POST[email]','$_POST[username]','$_POST[password]')";

/*$query2="INSERT INTO tbl_account(email,password,account_no) 
VALUES('$_POST[email]','$_POST[password2]','$_POST[account_no]')";

$query3="INSERT INTO tbl_payment(amount,account_no,payment_type,remark) 
VALUES('50000','$_POST[account_no]','credit','success')";*/

if((mysqli_query($con,$query))&&(mysqli_query($con,$query1)))
{
	header("location:login.php");	
}
else
{
	echo "Error : ".mysqli_error($con);
}

?>
