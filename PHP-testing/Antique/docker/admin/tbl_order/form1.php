<?php
include("../header_inner.php");
include("tables.php");
error_reporting(0);
if($_REQUEST['a']=="error")
{
	echo "<script>alert('Insert Faild!!!!')</script>";
}
if($_REQUEST['a']=="1")
{
	echo "<script>alert('Insert Sucessfully')</script>";
}

$k=0;
?><!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style>
  .error
  {
	  color:#F00 !important;
  }
.button {
  
  background-color: #3d3c3b;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  #display {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#display td, #display th {
  border: 1px solid #ddd;
  padding: 8px;
  
}

#display tr:nth-child(even){background-color: #f2f2f2;}

#display tr:hover {background-color: #ddd;}

#display th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3d3c3b;
  color: white;
  text-align: center;

}
</style>
</head>
<body>
<?php
    session_start();
    //echo $_SESSION['uid']
          if($_SESSION['uid']=="")
{
  header('location:index.php');
}
?>
<hr/>
 <center>

<h4 color="red" > Sales Report </h4>

 <br><br>
 <a href="report_by_date.php"><button class="button">View Report By Date</button></a>
 &emsp;&emsp;<a href="report.php"><button class="button">View Report Between Dates</button></a>
  &emsp;&emsp;<a href="report_annual.php"><button class="button">Annual Report</button></a>
 
</center>
</body>
</html>
<?php
include("../footer_inner.php");
?>