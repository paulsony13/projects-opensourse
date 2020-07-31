<?php
error_reporting(0);
$status=$_REQUEST['status'];
if ($status == "logout")
{
    session_start();
    session_unset();
    session_destroy();
}
if ($status == "error")
{
	echo "<script>alert('Invalid UserName or Password')</script>";
}
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
    <title>Antique Shop  | Sign in</title>

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


        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Log in</h2>
                            </div>

                            <form action="login_action.php" method="post">
                                <div class="row">
                                   
                                    <div class="col-9 mb-3">
                                        <input type="text" class="form-control" id="email" placeholder="User Name" name="email" value="">
                                    </div>
                                    <div class="col-9 mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
                                    </div>

                            <div class="btn ">
                              <input type="submit" class="btn amado-btn w-100" name="login" value="Login" />
                      
                    </div>
                     <div class="col-4 mt-4">
                                <a href="signup.php" style="color:#F90;font-size:20px">Create Account</a>
                      
                    </div>
                    
                                </div>
                            </form>
                        </div>
                    </div>
                   
                    <div class="main-panel" style=" background-image: url(../dashboard/b3.jpg); ">
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