<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop | Checkout</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
  

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

<?php include 'connection.php';
      session_start();
?>

<?php include("header.php");

$amount = $_GET['amount']; 

$sql = "SELECT * FROM tbl_customer where id='$_SESSION[id]' ";

$result = mysqli_query($con,$sql);

$row= mysqli_fetch_array($result);

// cust_id='$_SESSION[id]

 ?>


        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="first_name" value="<?php echo $row['custfname']  ?>" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['custlname']  ?>" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email']  ?>" required>                
                                    </div>
                                    <div class="col-12 mb-3">
                                        <select class="w-100" name="country" style="height: 80px; border: none; border-radius: 0; background-color: #f5f7fa; padding: 30px; color: #000; font-size: 14px; ">
                                        <option value="ind">India</option>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="fra">France</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="cana">Canada</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" name="street_address" placeholder="Address" value="" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="city" placeholder="Town" value="<?php echo $row['city']  ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="zipCode" placeholder="Zip Code" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="phone_number" placeholder="Phone No" value="<?php echo $row['phn']  ?>" pattern="[789][0-9]{9}" >
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Leave a comment about your order" required></textarea>
                                    </div>
                                    <div class="cart-btn mt-30 ml-30">
                                        <!-- <a href="#" class="btn amado-btn w-100">Checkout</a> -->
                                        <input class="btn amado-btn w-100" type="submit" name="submit" value="Checkout" required>
                                    </div>
                                </div>
                            
                        </div>
<?php 
if(isset($_REQUEST['submit']))
{

$name = $_REQUEST['first_name']." ".$_REQUEST['last_name'];
$email = $_REQUEST['email'];
$country = $_REQUEST['country'];
$address = $_REQUEST['street_address'];
$city = $_REQUEST['city'];
$zipCode = $_REQUEST['zipCode'];
$phone_number = $_REQUEST['phone_number'];
$comment = $_REQUEST['comment'];
$dm=$amount;
$ptype = $_REQUEST['gender'];

date_default_timezone_set('Asia/Kolkata');

$date = date('d-m-Y H:i:s');

// echo $date;

$sql1="INSERT INTO invoice(name, email, country, address, city, zipCode, phone_number, amount, payment_type, purchase_date,comment) 
       VALUES ('$name', '$email', '$country', '$address', '$city', '$zipCode', '$phone_number', '$dm', '$ptype', '$date', '$comment')";
       echo $sql1;
mysqli_query($con, $sql1);

session_start();  

$_SESSION['amt'] = $dm;

$da = date("Y-m-d");

mysqli_query($con, "UPDATE tbl_order_master SET status='PURCHASED',o_date='$da' WHERE cust_id='$_SESSION[id]' "); 

    $omid = "SELECT * FROM tbl_order_master where cust_id='$_SESSION[id]'";
    echo $omid;

    $omresult = mysqli_query($con,$omid);
    $omrow = mysqli_fetch_array($omresult);
    $ocselectc = "SELECT * FROM tbl_order_child where om_id='$omrow[id]'";
    // echo $ocselectc;
       $_SESSION['omid'] = $omrow['id'];

    $ocresult = mysqli_query($con,$ocselectc);
    while($ocrow = mysqli_fetch_array($ocresult))
    {
        $itemselect = "SELECT * FROM tbl_item where id='$ocrow[item_id]'";
        echo $itemselect;
        $itemresult = mysqli_query($con, $itemselect);
        $itemrow = mysqli_fetch_array($itemresult);
        $old = $itemrow['qty']; 
        $new = $old - $ocrow['o_qty'];

        $updatestock = "UPDATE tbl_item SET qty = $new WHERE id = '$ocrow[item_id]' ";
        $updateresult = mysqli_query($con, $updatestock);
        // $itemrow = mysqli_fetch_array($itemresult);

    }
    


    if($ptype == "COD")
    {
echo "<script >alert(\"Item Order Places\");
    window.location.replace(\"bill.php\");</script>";
    }
    else{
      echo "<script >alert(\"Item Order Places\");
    window.location.replace(\"first.php\");</script>";  
    } 
}

?>


                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span><?php echo $amount; ?></span></li>
                                <li><span>delivery:</span> <span>100</span></li>
                                <li><span>total:</span> <span><?php echo $amount+100; ?></span></li>
                            </ul>

                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                   <!--  <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                    <br> -->
                                    <input type="radio" name="gender" value="COD" checked> Cash on Delivery<br>
									<input type="radio" name="gender" value="Card Payment"> Card <img class="ml-15" src="img/core-img/paypal.png" alt=""><br>
                                </div>
                
                                <!-- Paypal -->
                               <!--  <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="img/core-img/paypal.png" alt=""></label>
                                    <input class="custom-control-label" type="radio" name="gender" value="male" checked> Male<br>
									<input  class="custom-control-label" type="radio" name="gender" value="female"> Female<br>
									<input class="custom-control-label" type="radio" name="gender" value="other"> Other  
                                </div> -->
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