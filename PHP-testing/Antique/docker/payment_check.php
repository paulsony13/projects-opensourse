<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop  | Signup</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
  

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
    
    <?php
include("connection.php");
session_start();
error_reporting(0);
$amount=$_REQUEST['amount'];
	if(isset($_POST['proceed']))
	{
	$account_no=$_POST['account_no'];
	$password=$_POST['password'];
	$match1="SELECT * FROM tbl_account WHERE account_no='$account_no' AND password='$password'";
	$qry1 = mysqli_query($con,$match1);
	$num_rows1 = mysqli_num_rows($qry1);
	if($num_rows1>0)
		{
			
		header("location:payment_confirm.php?amount=$amount&&account_no=$account_no");
		}
	else
		{
			
		
		header("location:payment_check.php?amount=$amount");
		}
	}
?>

<?php include("header.php"); ?>



        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix" >

                            <div class="cart-title">
                                <h2>Payment Login</h2>
                            </div>

                            <form  method="post">
                                <div class="row">
                                    
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="amount" id="amount" style="width:400px" placeholder="Amount" value="<?php echo $amount; ?>"  readonly name="email">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="account_no" style="width:400px" placeholder="Account number"  name="account_no">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="password" class="form-control" style="width:400px"  placeholder="Password"  name="password">
                                    </div>

                                    <div class="btn ">
                                        <input type="submit"  name="proceed" class="btn amado-btn w-100" value="Login" />
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