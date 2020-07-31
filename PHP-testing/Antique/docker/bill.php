<?php

$date=date('Y-m-d');
$del_id=0;
$i=0;
$total=0;
session_start();
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


 <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>




<span >

<div style="float display: inline;">
	<div> <input type="submit" value="Print" onclick="PrintDiv();" class='btn btn-primary'/></div>
	<div></div>

</div>

	 	<form action="index.php">
	 		<input type="submit" name="back" value="back">
	 	</form></span>
	
	 	<span>
   

</span>



<br/><br/><br/>
<div id="divToPrint">
<table border="3" >
<thead>
<h2>
<center><img src="admin/common/header.png" width="100%">
Bill  </center>
 <span style="float:left; ">Bill No :<?php echo "BIZZ-".$_SESSION['omid']; ?></span>
 
 <span style="float:right; ">Date :<?php echo date('d-m-Y'); ?></span>
 <br>
</h2></thead>

<tbody>
<table  class="table" cellspacing="0" border="1"  role="grid" width="100%" >

       
        
            
          <?php
	
		  include("connection.php");
	
	
	
	
	
	
	
	
if(isset($_REQUEST['del_id']))
{
$del_id=$_REQUEST['del_id'];
mysqli_query($con,"delete from $table where id='$del_id'");
//if($del_id!="")
}
	?>
    <script>


function rem()
{
if(confirm('Are you sure you want to delete this record?')){
return true;
}
else
{
return false;
}
}


function rem2()
{
if(confirm('Are you sure you want to deactive this record?')){
return true;
}
else
{
return false;
}
}
</script>
    
	
	<?php


	
		  $result2 = mysqli_query($con,"SHOW FIELDS FROM tbl_order_child");

 echo "<tr>";

while ($row2 = mysqli_fetch_array($result2))
 {

  $name=$row2['Field'];

 if($name=="item_id")
{
echo "<th>Item Name</th>";
}
elseif($name=="om_id")
{

}
else
{
  echo "<th>".
  str_replace('_', ' ', $name)
  ."</th>";
}
 $i++;
 }
 echo "

 </tr>";
   
  // $i=0;
   echo "";
   
            
            

			 //
			$results = mysqli_query($con,"SELECT * FROM tbl_order_master WHERE status='PURCHASED' AND id='$_SESSION[omid]'"); 

		 $m=0;
		while($rows = mysqli_fetch_array($results))
		{
	$result = mysqli_query($con,"SELECT * FROM tbl_order_child WHERE om_id='$rows[id]'"); 

		while($row = mysqli_fetch_array($result))
		{
				$m++;
		
			
		$id=$row['0'];
		echo "<tr>";
		for($k=0;$k<$i;$k++)
		{
	
			
			  if($k==0)
			{
			 
		

			
			echo "<td >$m</td>";
				
			}

			 elseif($k==1)
			{

				
			}

						elseif($k==100)
			{
			  $sql2 = "select *  from tbl_vendor where id='$row[pm_id]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
		
		

			echo "<td >  $row2[vname]</td>";
				
			}

	
			
			elseif($k==2)
			{
			  $sql2 = "select *  from tbl_item where id='$row[item_id]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
		
		

			echo "<td >  $row2[item_name]</td>";
				
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

		
		
		
			echo "
			
			</tr>

			<tr><td colspan='4' height='30px'></td></tr>


			";
		
	
		
		 $result = mysqli_query($con,"SELECT SUM(price)as ts FROM tbl_order_child WHERE om_id='$rows[id]'");
		$row = mysqli_fetch_array($result);
		$total=$total+$row['ts'];
		}
		 }
       
        ?>
        <tr>
		<td><b>Total</b></td><td colspan="7" align="left"><b><?php echo $total; ?></b></td>
		</tr>
    </table>
		</tbody>
        </table>	
		

</div>

<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

<div class="clearfix"></div>
	
    </div> 
    
    <?php
	
//	include("../footer_inner.php");
	?>