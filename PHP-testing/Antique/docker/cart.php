<!DOCTYPE html>
<?php include 'connection.php';
	  session_start();
?>
<?php
if(isset($_REQUEST['did']))
{
$query6="DELETE FROM tbl_order_child WHERE id='$_REQUEST[did]'";
if(mysqli_query($con,$query6))
{
header("location:cart.php");	
}
else
{
	echo "Error : ".mysqli_error($con);
}
}?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

<?php include("header.php"); ?>

 <?php $query4 = "SELECT * FROM tbl_order_master WHERE cust_id='$_SESSION[id]' and status='cart'"; 

$result4=mysqli_query($con,$query4);

while($row4 = mysqli_fetch_array($result4))
{

//echo $row4['id'];


      $query5 = "select SUM(o_qty*price),COUNT(id) FROM tbl_order_child WHERE om_id='$row4[id]'";

      $result5=mysqli_query($con,$query5);
	  $row5=mysqli_fetch_array($result5);

}
			  
           ?> 

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart(<?php echo " ". $row5['COUNT(id)']." "; ?>)</h2>
                        </div>
                        
                          <div class="cart-table clearfix">
                         <!--   <table class="table table-responsive">-->
                         <table style="width:90%;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                        
                        
                          <?php

$query = "SELECT * FROM tbl_order_master WHERE cust_id='$_SESSION[id]' and status='cart'"; 
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
//echo $row['id'];

      $query2 = "SELECT * FROM tbl_order_child WHERE om_id='$row[id]'";
      $result2=mysqli_query($con,$query2);
   
	       while($row2 = mysqli_fetch_array( $result2 )) {
			  // echo $row2['id'];
				   
			   $query3 = "SELECT * FROM tbl_item WHERE id='$row2[item_id]'";
               $result3=mysqli_query($con,$query3);
	              while($row3 = mysqli_fetch_array($result3)) {
	                  //  echo $row3['name'];

?>


                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img  src="admin/tbl_item/uploads/<?php echo $row3['image']; ?>" alt="Product" width="50" height="50"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5><?php echo $row3['item_name']; ?></h5>
                                        </td>
                                        <td class="price">
                                            <span><?php echo $row2['price']; ?></span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p><?php echo $row2['o_qty']; ?></p>
                                            </div>
                                        </td>
                                         <td class="qty">
                                           <span><a href="cart.php?did=<?php echo $row2['id']; ?>" style=""><font size="+3" color="#FF0000">X</font></a></span></td>
                                        
                                    </tr>
                                    
                                     <?php
			
			  }}}?>
                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span><?php echo ": ₹ ". $row5['SUM(o_qty*price)']; ?></span></li>
                                <li><span>No:of items:</span> <span><?php echo ":  ". $row5['COUNT(id)']; ?></span></li>
                                  
                                <li><span>total:</span> <span><?php echo ": ₹ ". $row5['SUM(o_qty*price)']; ?></span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="checkout.php?amount=<?php echo $row5['SUM(o_qty*price)']; ?>" class="btn amado-btn w-100">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

     <?php include("footer.php"); ?>


    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>