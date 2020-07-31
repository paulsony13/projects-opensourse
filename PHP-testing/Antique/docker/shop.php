
<?php include("connection.php"); 
$query = "SELECT * FROM tbl_category";
$result = mysqli_query($con,$query) or die(mysqli_error());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop | Shop</title>

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
 

        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Catagories</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">

                    <ul>
                    
                      <?php
                        // keeps getting the next row until there are no more to get
                        while($row = mysqli_fetch_array( $result )) {
                        ?>
                       
                        <li ><a href="?cid=<?php echo $row['id']; ?>"><?php echo $row['cat_name']; ?></a></li>
                       
                        <?php } ?> 
                    </ul>
                </div>
            </div>

            <?php

            if(isset($_REQUEST['cid']))
            {

                // echo $_REQUEST['cid'];
                $subcat = "SELECT * FROM tbl_subcategory WHERE cat_id='$_REQUEST[cid]'";
                $subresult = mysqli_query($con,$subcat);

            ?>

            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Sub catagories</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">

                    <ul>
                    
                      <?php
                        // keeps getting the next row until there are no more to get
                        while($subrow = mysqli_fetch_array( $subresult )) {
                        ?>
                       
                        <li ><a href="?cid=<?php echo $_REQUEST['cid']; ?>&subid=<?php echo $subrow['id']; ?>"><?php echo $subrow['subcat_name']; ?></a></li>
                       
                        <?php } ?> 
                    </ul>
                </div>
            </div>

            <?php
                }
            ?>

        </div>

      <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                <?php
				if(isset($_REQUEST['cid']))
				{
				$query1 ="SELECT * FROM tbl_item WHERE cat_id='$_REQUEST[cid]'";

                    if(isset($_REQUEST['subid']))
                    {
                    $query1 ="SELECT * FROM tbl_item WHERE subcat_id='$_REQUEST[subid]'";
                    }
                    
				}
                elseif(isset($_REQUEST['id']))
				{
				$query1="SELECT * FROM tbl_item WHERE id='$_REQUEST[id]'";
				}
				else
				{
					$query1 = "SELECT * FROM tbl_item";
				}
					$result1= mysqli_query($con,$query1) or die(mysqli_error());
					while($row1 = mysqli_fetch_array($result1)) {

				?>

                    <!-- Single Product Area -->
                    <div class="col-sm-6 col-md-6 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div >
                                <a href="product-details.php?id=<?php echo $row1['id']; ?>"><img src="admin/tbl_item/uploads/<?php echo $row1['image']; ?>" alt="" style="height:300px"></a>
                                <!-- Hover Thumb -->
                                <!-- <img class="hover-img" src="img/product-img/product2.jpg" alt=""> -->
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><?php echo"Rs".$row1['rate'];?></p>
                                    <a href="product-details.php?id=<?php echo $row1['id']; ?>">
                                        <h6><?php echo $row1['item_name'];?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                   <!--  <div class="cart">
                                        <a href="product-details.php?id=<?php // echo $row1['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    
<?php } ?>
                   </div>

                    

                <!--<div class="row">
                    <div class="col-12">
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>-->
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