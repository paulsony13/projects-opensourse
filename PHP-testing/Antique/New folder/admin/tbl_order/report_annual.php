<?php
include("tables.php");
include("../header_inner.php");
$date=date('Y-m-d');
$del_id=0;
$i=0;
?>


<link rel="stylesheet" type="text/css" href="datatables.min.css">
<script type="text/javascript" src="datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();
});
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
 
<script type="text/javascript">     
    function PrintDiv() {    
    	   var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
           }
</script>

<div class='col-md-10'>
<form class="form-inline" method="post">
<div class="form-group">
    <label >Date:</label>
    <input type="date" class="form-control" id="date" name="d1"  max="<?php echo $date;?>">
</div>

<input type="submit" class="btn btn-danger" name="submit">
</form>
</div>
	
<center>
    <input type="submit" value="Print" onclick="PrintDiv();" class='btn btn-primary'/>
</center>

<br/><br/><br/>
<div id="divToPrint">
<table border="3" >
<thead>
	<h2>
		<center>
			<img src="../common/header.png" width="100%">
				Sales Report of <?php echo date('Y', strtotime($_REQUEST['d1'])) ?>
		</center>
	</h2>
</thead>

<tbody>
<table  class="table" cellspacing="0" border="1"  role="grid" width="100%" >

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
 
echo "<tr>";
 
echo "<th> Sl no. </th>";
echo "<th> customer </th>";
echo "<th> item </th>";
echo "<th> qty </th>";
echo "<th> price </th>";
echo "<th> date </th>";
 
echo "</tr>";
             
if(isset($_REQUEST['d1']))
{

$tot = 0;
$results = mysqli_query($con,"SELECT om.cust_id, oc.item_id, oc.o_qty, oc.price, om.o_date FROM tbl_order_master om inner join tbl_order_child oc on om.id = oc.om_id 
	WHERE om.status='PURCHASED' AND YEAR(om.o_date) = '$_REQUEST[d1]'"); 

$sl=1;
while($row = mysqli_fetch_array($results))
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
			
			
			elseif($k==3)
			{
				$amt  = $row[price] * $row[o_qty];
 				echo "<td> $amt </td>";
			}

			elseif($k==31)
			{
 				echo "<td class='hiddentd'> $row[content] </td>";
			}
			
			
			elseif($k==40)
			{ 
				echo "<td > <img src='uploads/$row[$k]' width='100'></td>";	
			}
			
			else
			{
				echo "<td >$row[$k]</td>";
		 	}
		}
		$tot = $tot + $amt;
		$sl = $sl + 1;
	 	
	 echo "</tr>";
}

}
       
?>

<tr>
<td><b>Total</b></td><td colspan="7" align="left"><b><?php echo $tot; ?></b></td>
</tr>
</table>
</tbody>
</table>	
		
</div>


<script type="text/javascript"> 
	$('#example') 
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

<div class="clearfix"></div>	
</div> 
