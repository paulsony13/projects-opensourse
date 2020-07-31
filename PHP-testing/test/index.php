<?php

$con = mysqli_connect("testdb.c9czu1qxnqra.ap-south-1.rds.amazonaws.com","admin","Paulsony1*","test");

$result = mysqli_query($con," SELECT * FROM tbl_user ");
while($row = mysqli_fetch_assoc($result))
{
	echo "Name: ".$row['name']." <br> Phone: ".$row['phone']."<br> email: ".$row['email']."<br> password: ".$row['password']."<br><br>";
}


?>