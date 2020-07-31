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

<?php include("header.php"); ?>
<?php
if(isset($_POST['update']))
{
	
	
	
	
	$up= "UPDATE tbl_account SET account_no='$_POST[account_no]',password='$_POST[password]' WHERE email='$_SESSION[email]'";
	mysqli_query($con,$up);
	/*if (mysqli_query($con,$up))
     {  
	   ?>
       <h4 id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Password Changed"; echo "<br />";?></h4>
       <?php
	}
	else
	{
	  ?>
       <h4 id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Unsuccessfull"; echo "<br />";?></h4>
       <?php
	}
}*/
}
$query="SELECT * FROM tbl_account WHERE email='$_SESSION[email]'";
	$result = mysqli_query($con,$query);
	$num_rows = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	/*if($num_rows>0)
	{*/
?>


        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Sign up</h2>
                            </div>

                            <form  method="post">
                                <div class="row">
                                    
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" id="email" min="0" placeholder="Email" value="<?php echo $_SESSION['email']; ?>"  readonly name="email">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="email" placeholder="Account number" value="<?php echo $row['account_no']; ?>" name="account_no">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>" name="password">

                                    </div>

                            <div class="btn ">
                                <input type="submit"  name="update" class="btn amado-btn w-100" value="Update" />
                      
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