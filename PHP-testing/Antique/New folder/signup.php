<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop | Signup</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        .new{
            height: 60px;
            border: none;
            border-radius: 0;
            background-color: #f5f7fa;
            padding-left: 30px;
            color: #6b6b6b;
            font-size: 14px;
        }


    </style>

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
                                <h2>Sign up</h2>
                            </div>

                            <form action="singup_action.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="first_name" value="" placeholder="First Name"  name="first_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="last_name" value="" placeholder="Last Name" name="last_name" required>
                                    </div>
                                   
                                     <div class="col-md-6 mb-3">
                                        <select class="w-100 new" id="gender" value="gender" name="gender" required >
                                            <option value=" ">-- Select Gender --</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="house" placeholder="House" value="" name="house" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control mb-3" id="street" placeholder="Street" value="" name="street" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="city" placeholder="City" value="" name="city" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="state" placeholder="State" value="" name="state" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="phone_number" placeholder="Phone No" value="" name="phone_number" pattern="[789][0-9]{9}" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email" value="" name="email" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="username" placeholder="Username" value="" name="username" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password" value="" name="password" required>
                                    </div>
                                    
                                    
                                    <div class="btn ">
                                        <input type="submit" class="btn amado-btn w-100" value="Sign up" required />
                                    </div>
                                    
                                    <div class="col-4 mt-2">
                                        <a href="login.php" style="color:#F90;font-size:15px">You Have Already Account ?? <br> Login here</a>
                                    </div>
                    
                                </div>
                            </form>
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