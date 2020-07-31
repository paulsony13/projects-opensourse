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
?>
<!DOCTYPE html>
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
  </style>
</head>
<body>
<hr/>
<?php
		session_start();
		//echo $_SESSION['uid']
if($_SESSION['sid']=="")
{
	header('location:index.php');
}
?>

 <center>
<form action="purchase_report_date.php">
<b>VIEW PURCHASE ON</b>&nbsp;&nbsp;<input type="date" name="t1" min="2018-01-01" max="<?php echo date("Y-m-d");?>" REQUIRED>&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
<input type="submit" value="SHOW" />
</form>
 <br/>

   <?php
   include('connection.php');
   $db=new databaseCon;
   if(isset($_GET['t1'])){
  $sql="select * from tbl_order_master inner join tbl_innvoice on tbl_order_master.om_id=tbl_innvoice.id where billdate='".$_GET['t1']."'";
   $rst=$db->selectQuery($sql);
   if($rst==1){
	?>
	 <table id="display" width="100%">

    <tr>
   	<th>Purchase Date</th>
   	<th>Bill Number</th>
   	<th>Vendor Name</th>
   	<th>Total Amount</th>
    </tr>
	<?php
	$rs=$db->selectData($sql);
   while($row=mysql_fetch_array($rs))
   {
   	?>
   	<tr>
   		<td><?php echo $row['pur_date'];?></td>
   		<td><?php echo $row['billno'];?></td>
		<td><?php echo $row['vname'];?></td>
   		<td><?php echo $row['tot_amt'];?></td>	

        <td><a href="purchase_childv.php?pmid=<?php echo $row['purm_id'];?>">Purchased Items</a></td>		
   	</tr>
   <?php } ?>
</table>
   <?php }
else{
	echo "<br/><br/><h2>NO PURCHASES ON THIS DATE</h2>";
   } }
?>

</center>
</body>
</html>
<?php
include("../footer_inner.php");
?>