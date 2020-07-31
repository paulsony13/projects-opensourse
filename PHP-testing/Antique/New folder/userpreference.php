<?php 
include("connection.php");
error_reporting(0);
session_start();
if ($_SESSION['id']=='')
{
echo "<script >alert(\"Please Sign in to continue\");
window.location.replace(\"login.php\");</script>";
	

}
?>
<?php

if(isset($_POST['submit']))
{


$query=" INSERT INTO tbl_userpreference (requrements, uid, rdate) VALUES ('$_POST[requrements]','$_SESSION[id]',now()) ";
if(mysqli_query($con,$query))
{
header("location:index.php");	
}
else
{
	echo "Error : ".mysqli_error($con);
}
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
    <title>Antique Shop | User Preference</title>

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
                                <h2>User Preference</h2>
                            </div>

                            <form  method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                    <label for="complaint_description" class="col-sm-3 control-label">Requrements</label>

                                    <textarea class="form-control" id="requrements" value="" placeholder=""  name="requrements" required> </textarea>
                                    </div>
                                        
                                    <!-- <div class="col-md-12 mb-3">
                                     <label for="contact_no" class="col-sm-3 control-label">Phone No</label>

                                        <input type="text" class="form-control" id="contact_no" name="contact_no">
                                    </div> -->
                                   

                            <div class="btn ">
                                <input type="submit" class="btn amado-btn w-100" value="Submit" name="submit" />
                      
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
    <script src="js/active.js"> </script>

</body>

</html>