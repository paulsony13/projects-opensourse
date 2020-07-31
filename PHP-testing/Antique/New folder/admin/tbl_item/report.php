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

	Item Report  </center>
</h2></thead>

<tbody>
<table  class="table" cellspacing="0" border="1"  role="grid" width="100%" >

       
        
            
          <?php
	
		  include("../connection.php");
	
	
	
	
	
	
	
	
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


	
		  $result2 = mysqli_query($con,"SHOW FIELDS FROM $table");

 echo "<tr>";

while ($row2 = mysqli_fetch_array($result2))
 {

  $name=$row2['Field'];
if($name=="item_idss")
{
echo "<th>Item Name</th>";
}else
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
			  
 	$result = mysqli_query($con,"SELECT * FROM $table ");
	
	$m=0;
		while($row = mysqli_fetch_array($result))
		{
		$id=$row['0'];
	  $m++;
			
		echo "<tr>";
		for($k=0;$k<$i;$k++)
		{
	

	   
			if($k==1)
			{
			  $sql2 = "select *  from tbl_category where id='$row[cat_id]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
		
		

			echo "<td >  $row2[cat_name]</td>";
				
			}
			elseif($k==0)
			{
			  	

			echo "<td > $m</td>";
				
			}
			
			elseif($k==2)
			{
			  $sql2 = "select *  from tbl_subcategory where id='$row[subcat_id]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
		
		

			echo "<td >  $row2[subcat_name]</td>";
				
			}
				
			elseif($k==31)
			{
				

			echo "<td class='hiddentd'> $row[content] </td>";
				
			}
			
			
				elseif($k==7)
			{
			  

			echo "<td > <img src='uploads/$row[$k]' width='100'></td>";
				
			}
			
			else
			{
			echo "<td >$row[$k]</td>";
			}
		
		
		
		
		
		}
		
		
		
		
	
		}
 
       
        ?>
        
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