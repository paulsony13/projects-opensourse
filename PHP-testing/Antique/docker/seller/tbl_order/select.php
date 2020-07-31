<?php
include("tables.php");
include("../header_inner.php");

$del_id=0;
$i=0;
?>


<link rel="stylesheet" type="text/css" href="datatables.min.css">
<script type="text/javascript" src="datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	$('#example').DataTable();
	} );
</script>

<style>
.hiddentd
{
	display:inline-block;
    width:180px;
    white-space: nowrap;
    overflow:hidden !important;
} 
</style>
 
<div class="">

<div class="clearfix"></div>
<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0"  role="grid" aria-describedby="example_info" >

<?php
	
include("../connection.php");
 	
if(isset($_REQUEST['del_id'])) 
{
$del_id=$_REQUEST['del_id'];
mysqli_query($con,"delete from $table where id='$del_id'");
} 
?>


<script>

function rem()
{
	if(confirm('Are you sure you want to delete this record?')){
	return true;
	}
	else{
		return false;
	}
}


function rem2()
{
	if(confirm('Are you sure you want to deactive this record?')){
	return true;
	}
	else{
	return false;
	}
}
</script>
    
	
<?php


echo "<thead><tr>";

  echo "<th> Sl no. </th>";
  echo "<th> customer </th>";
  echo "<th> item </th>";
  echo "<th> qty </th>";
  echo "<th> price </th>";
  echo "<th> date </th>";
 
echo "</tr></thead>";
   
echo "<tbody>";
   
            
$today = date("Y-m-d");
echo "Today's Date : ".$today."<br><br>";
$result = mysqli_query($con,"SELECT om.cust_id, oc.item_id, oc.o_qty, oc.price, om.o_date FROM tbl_order_master om inner join tbl_order_child oc on om.id = oc.om_id WHERE o_date = '$today' AND status='PURCHASED'");
	
$sl=1;

while($row = mysqli_fetch_array($result))
{
	$sel = " SELECT * FROM tbl_item WHERE id = '$row[item_id]' ";
	$selRes = mysqli_query($con,$sel);
	$selrow = mysqli_fetch_assoc($selRes);

	if($_SESSION['sid'] == $selrow['sid'])
	{

		echo "<tr>";
		echo "<td >$sl</td>"; 
		for($k=0;$k<5;$k++)
		{
	
			if($k==0)
			{
			  $sql2 = "select *  from tbl_customer where id='$row[cust_id]' ";
    		  $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
			  $row2 =mysqli_fetch_array($result2);
			  echo "<td >  $row2[custfname]</td>";	
			}

			elseif($k==1)
			{
			  $sql2 = "select *  from tbl_item where id='$row[item_id]' ";
    		  $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
			  $row2 =mysqli_fetch_array($result2);
			  echo "<td >  $row2[item_name]</td>";	
			}
			 
			else
			{
			echo "<td >$row[$k]</td>";
			} 
		}  
		echo "</tr>";
	}
	$sl++;
}
       
?>
</tbody>
</table>
	 		
 
<script type="text/javascript"> 
	$('#example') 
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

<div class="clearfix"></div>
	
</div> 
 