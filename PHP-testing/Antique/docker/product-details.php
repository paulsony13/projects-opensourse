<!DOCTYPE html>
<?php
include 'connection.php';
if(isset($_REQUEST['id']))
{
$query1="SELECT * FROM tbl_item WHERE id='$_REQUEST[id]'";
$result1= mysqli_query($con,$query1) or die(mysqli_error());
$row1 = mysqli_fetch_array($result1);
}

if(isset($_POST['submit']))
{

//error_reporting(0);
session_start();
//$date=date("Y-m-d");

    if ($_SESSION['id']=='')
    {
    echo "<script >alert(\"Please Signin first\");
    window.location.replace(\"login.php\");</script>";
    }

    else
    {

    $query2="SELECT * FROM tbl_order_master WHERE cust_id='$_SESSION[id]' and status='cart' ";
    $result2=mysqli_query($con,$query2);
    $row2 = mysqli_fetch_array( $result2);
    $count=mysqli_num_rows($result2);
    	
    	// echo $query2;
        // echo $row2['0'];

        if($count==1)                 
        {
        	$query3="INSERT INTO tbl_order_child (om_id, item_id, o_qty, price) 
        VALUES('$row2[id]', '$_REQUEST[id]', '$_POST[quantity]', '$row1[rate]')";
        // echo $query3;
        mysqli_query($con,$query3);
        header("location:product-details.php?id=$row1[id]");
        }
    	
        else
        {
        $query4="INSERT INTO tbl_order_master (cust_id,o_date,status) VALUES('$_SESSION[id]', now(), 'cart')";
        // echo $query4;

            if($result4=mysqli_query($con,$query4))
            {
            	$oid=mysqli_insert_id($con);          // (item_id,om_id,order_qty,price) 
            	$query5="INSERT INTO tbl_order_child (om_id, item_id,o_qty,price) 
                    VALUES('$oid', '$_REQUEST[id]','$_POST[quantity]','$row1[rate]')";
                    // echo "<br>".$query5;
                $result5=mysqli_query($con,$query5);
            	header("location:product-details.php?id=$row1[id]");	
            }
            else
            {
            	echo "Error : ".mysqli_error($con);
            }

        }
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop | Product Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">

        .not-active {
          pointer-events: none;
          cursor: default;
          text-decoration: none;
          color: black;
          text-decoration: line-through;
        }

    </style>
</head>

<body>

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

<?php 
include("connection.php"); 
include("header.php");
 ?>

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                                             
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                <?php

				?>
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="admin/tbl_item/uploads/<?php echo $row1['image']; ?>">
                                            <img class="d-block w-100" style="height:650px; width:100px; object-fit: contain;" src="admin/tbl_item/uploads/<?php echo $row1['image']; ?>" alt="First slide">
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"><?php echo"$".$row1['rate'];?></p>
                                <a href="product-details.php">
                                    <h6><?php echo $row1['item_name'];?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                  
                                </div>
                                <!-- Avaiable -->
                                <?php 

                                        if( $row1['qty'] >  0 )
                                        {
                                            $Stock = "avaibility";
                                            $comment = "In Stock";
                                        }
                                        else{
                                            $Stock = "unavaibility";
                                            $comment = "Out of Stock";
                                        }

                                ?>
                                <p class="<?php echo $Stock; ?>"><i class="fa fa-circle"></i> <?php echo $comment; ?> </p>
                                <?php
                                    

                                ?>
                            </div>

                            <div class="short_overview my-5">
                                <p><?php echo $row1['item_desc'];?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post">
                                <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <div class="quantity">
                                        <!-- <?php echo $row1['qty']; ?> -->
                                        <span class="qty-minus" onClick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="<?php echo $row1['qty'];?>" name="quantity"  oninput="validity.valid||(value='');" value="1">
                                        <span class="qty-plus" onClick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <!-- <?php if($row1['qty'] < 5) echo'not-active' ?>  -->
                                <button type="submit" name="submit" value="5" class="btn amado-btn ">Add to cart</button>
                            </form>

                        </div>
                    </div>
                   
                    
                </div>
              
            </div>
        </div>
        <!-- Product Details Area End -->
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