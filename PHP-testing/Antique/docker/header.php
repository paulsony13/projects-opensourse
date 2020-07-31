<?php 
error_reporting(0);

session_start();

include("connection.php");

if ($_SESSION['id']=='')
{
    	echo"<style>#logoutbtn,#bank{ display:none;
			}
		</style>";

}
else 
{
	echo"<style>#loginbtn{ display:none;
			}
		</style>";}?>
        <?php $query4 = "SELECT * FROM tbl_order_master WHERE cust_id='$_SESSION[id]' and status='cart'"; 
$result4=mysqli_query($con,$query4);

while($row4 = mysqli_fetch_array($result4))
{

//echo $row4['id'];


      $query5 = "select COUNT(id)FROM tbl_order_child WHERE om_id='$row4[id]'";

      $result5=mysqli_query($con,$query5);
	  $row5=mysqli_fetch_array($result5);

}
			  
           ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Antique Shop</title>
</head>

<body>


    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### 
    <div class="main-content-wrapper d-flex clearfix"> -->

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/antique.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/core-img/antique.png" alt=""></a>
            </div>
            <div class="main-panel" style=" background-image: url(../dashboard/b3.jpg); ">
                
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li ><a href="index.php">Home</a></li>
                    <li ><a href="about.php">About Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <!--<li><a href="product-details.php">Product</a></li>-->
                    <li><a href="cart.php">Cart</a></li>
                    <li ><a href="userpreference.php">User Preference</a></li>
                    <li ><a href="feedback.php">Feedback</a></li>
                    <li ><a href="complaint.php">Complaints</a></li>
                     <li ><a href="contact.php">Contact Us</a></li>
                    <li id="loginbtn"><a href="login.php">Login</a></li>
                    <li id="logoutbtn"><a href="logout_action.php">Logout</a></li>
                   

                   <!-- <li><a href="checkout.php">Checkout</a></li>-->
                </ul>
            </nav>
            <!-- Button Group -->
           <div class="amado-btn-group mt-30 mb-100">
               <!--  <a href="#" class="btn amado-btn mb-15">%Discount%</a>
                <a href="#" class="btn amado-btn active">New this week</a>-->
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(<?php echo " ".$row5['COUNT(id)']." "; ?>)</span></a>
                <!-- <a href="bank.php" id="bank" class="fav-nav"><img src="img/core-img/money.png" alt=""> Bank Details</a> -->
                <!-- <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a> -->
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="https://www.pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
        </header>
        <!-- Header Area End -->


</body>
</html>