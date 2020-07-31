<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop| Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body bgcolor="grey">




  <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
<?php include("header.php"); ?>
        
  
     <?php //  ../Admin/item/uploads/<?php echo $row['image']; ?> 
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
        <div style="padding-left:100px;padding-right:100px">      

</div>
            <div class="amado-pro-catagory clearfix">
<?php include("connection.php"); 
$query = "SELECT * FROM tbl_category";
$result = mysqli_query($con,$query) or die(mysqli_error());
while($row = mysqli_fetch_array($result)) {

?>
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.php?cid=<?php echo $row['id']; ?>">
                        <img src="admin/tbl_category/uploads/<?php echo $row['cat_image']; ?>" alt="" style="object-fit: contain;">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <!-- <p><?php /*echo "Rs ".$row['rate'];*/ ?></p> -->
                            <h4><?php echo $row['cat_name']; ?></h4>
                        </div>
                    </a>
                </div>
                <?php } ?>

                <!-- Single Catagory -->
              <!--  <div class="single-products-catagory clearfix">
                    <a href="shop.php">
                        <img src="img/bg-img/2.jpg" alt="">
                     
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From Rs180</p>
                            <h4>Minimalistic Plant Pot</h4>
                        </div>
                    </a>
                </div>-->

                <!-- Single Catagory -->
               <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.php">
                        <img src="img/bg-img/3.jpg" alt="">
                       
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From Rs180</p>
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>-->

                <!-- Single Catagory -->
                <!--<div class="single-products-catagory clearfix">
                    <a href="shop.php">
                        <img src="img/bg-img/4.jpg" alt="">-->
                      
                       <!--  <div class="hover-content">
                            <div class="line"></div>
                            <p>From Rs180</p>
                            <h4>Night Stand</h4>
                        </div>
                    </a>
                </div>-->

                <!-- Single Catagory -->
               <!--  <div class="single-products-catagory clearfix">
                   <a href="shop.php">
                        <img src="img/bg-img/5.jpg" alt="">
                        <!-- Hover Content -->
                        <!-- <div class="hover-content">
                            <div class="line"></div>
                            <p>From Rs18</p>
                            <h4>Plant Pot</h4>
                        </div>
                    </a>
                </div>-->

                <!-- Single Catagory -->
               <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.php">
                        <img src="img/bg-img/6.jpg" alt="">
                      
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $320</p>
                            <h4>Small Table</h4>
                        </div>
                    </a>
                </div>-->

                <!-- Single Catagory -->
               <!-- <div class="single-products-catagory clearfix">
                    <a href="shop.php">
                        <img src="img/bg-img/7.jpg" alt="">
                     
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Metallic Chair</h4>
                        </div>
                    </a>
                </div>
-->
                <!-- Single Catagory -->
                <!--<div class="single-products-catagory clearfix">
                    <a href="shop.php">
                        <img src="img/bg-img/8.jpg" alt="">
                       
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Modern Rocking Chair</h4>
                        </div>
                    </a>
                </div>-->

                <!-- Single Catagory -->
                <!--<div class="single-products-catagory clearfix">
                    <a href="shop.php">
                        <img src="img/bg-img/9.jpg" alt="">
                       
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $318</p>
                            <h4>Home Deco</h4>
                        </div>
                    </a>
                </div>-->
            </div>
        </div>
        <!-- Product Catagories Area End -->
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