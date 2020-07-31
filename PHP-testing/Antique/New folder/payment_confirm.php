<?php include 'connection.php';

error_reporting(0);
$amount=$_REQUEST['amount'];
$account_no=$_REQUEST['account_no'];

?>

<?php

session_start();

if(isset($_POST['confirm']))
{

$query4="SELECT * FROM tbl_order_master WHERE cust_id='$_SESSION[id]' and status='cart'";
$result4=mysqli_query($con,$query4);
$num_rows1 = mysqli_num_rows($result4);
$row4=mysqli_fetch_array($result4);

	$amount_to_pay=$_POST['amount'];
	//echo "amount=".$amount_to_pay;
	$account_no=$_POST['account_no'];
	//echo "account_no=".$account_no;

	$result=mysqli_query($con,"SELECT SUM(amount) AS sum1 FROM tbl_payment where account_no='$account_no'") or die("error");
	$row=mysqli_fetch_array($result);
	$credit_sum=$row['sum1'];
	
	//echo echo "credit_sum=".$credit_sum;
	$result1=mysqli_query($con,"SELECT SUM(amount) AS sum2 FROM tbl_payment where payment_type='debit' AND account_no='$account_no'") or die("error");
	$row1=mysqli_fetch_array($result1);
	$withdraw_sum=$row1['sum2'];
	//echo echo "withdraw_sum=".$withdraw_sum;
	$balance_amount=20000000;

if($num_rows1==1)
 {
	 if($amount_to_pay<$balance_amount)
{ //echo'yes';



$query = "INSERT INTO tbl_payment(email,amount,account_no,payment_type,remark)VALUES('$_SESSION[email]','$amount_to_pay','$account_no','debit','success')";	
	
	
 	if(mysqli_query($con,$query))
	{
		$query5="SELECT * FROM tbl_item WHERE id='1'";
                $result5=mysqli_query($con,$query5);
				//echo $row2['item_id'].".".$row2['order_qty']."//";
				//echo $query5;
                  while($row5=mysqli_fetch_array($result5))
				  {
                  $old=$row5['qty'];
				  $new=$row2['order_qty'];
				  $latest=$old-$new;
				 // $query6="UPDATE tbl_item SET quantity='$latest' WHERE id='$row2[item_id]'";
			   	// mysqli_query($con,$query6);
	  			 }
	 //mysqli_query($con,"INSERT INTO tbl_sales(om_id,cust_id,sales_price) VALUES ('$row4[id]','$_SESSION[id]',$amount_to_pay)");
	 mysqli_query($con,"UPDATE tbl_order_master SET status='Purchased' WHERE id='$row4[id]'");
	  mysqli_query($con,"UPDATE tbl_stock SET sales_qty='$new' WHERE item_id='$row2[item_id]'");
	 
	  $query2 = "SELECT * FROM tbl_order_c WHERE om_id='$row4[id]'";
      $result2=mysqli_query($con,$query2);
   
	 
	 $status="purchased";
     header("location:index.php?status=$status");
	}
	else
	{
	$status="error";
	header("location:payment_check.php?status=$status");
	}
}
else
{
	$status="balance";
	header("location:index.php?status=$status");

}
 }
 else
{
	
	header("location:index.php");

}

}
?>
<?php  
	echo"<style>#nav,#news,#footer{ display:none;
			}
		</style>";?>
        
<!DOCTYPE html>
<html>
<head>
<title>Antique Shop | Account </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  
<?php include("header.php");?>


<!---->	
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Payment Login</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
            
				<form  method="post">
					<div>
						<label>
							<input placeholder="amount" type="text" tabindex="1" name="amount" id="amount" value="<?php echo $amount; ?>"   readonly="readonly">
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Acoount Number" type="text" tabindex="2"  readonly="readonly" name="account_no" value="<?php echo $account_no; ?>" id="account_no">
						</label>
					</div>
                    
                   		<div>
						<input type="submit" value="Confirm Payment " name="confirm">
					</div>		
                                		
					
				</form>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<?php include("footer.php");?>

<!---->
</body>
</html>