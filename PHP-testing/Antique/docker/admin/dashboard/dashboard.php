<?php
error_reporting(0);
$status=$_REQUEST['status'];
if ($status == "logout")
{
    session_start();
    session_unset();
    session_destroy();
	header("location:../login/login.php");
}
?>
<?php
include("../common/menu.php");
	
?>


    <style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
</style>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}


#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#F36;
padding:10px;	
}
.table
{
margin-bottom:10px;
background:#E6F4FF;	
}
.sep
{
height:30px;
background:#666;	
}
</style>
       


        <div class="content" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                                             
                            </div>
                            <div class="content all-icons">
                                <div class="row" style=" /*background-image: url(boutique.jpg);*/ ">
                                                            
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../tbl_customer/select.php">    <div class="font-icon-detail"><i class="pe-7s-users"></i>
                                      <input type="text" value="CUSTOMER">
                                    </div></a>
                                  </div>
                                <!--                                                             
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../tbl_vendor/form.php">    <div class="font-icon-detail"><i class="pe-7s-culture"></i>
                                      <input type="text" value="VENDOR">
                                    </div></a>
                                  </div>    -->


                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../tbl_item/select.php">    <div class="font-icon-detail"><i class="pe-7s-ticket"></i>
                                      <input type="text" value="ITEMS">
                                    </div></a>
                                  </div>   

                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../tbl_category/form.php">    <div class="font-icon-detail"><i class="pe-7s-menu"></i>
                                      <input type="text" value="CATAGORY">
                                    </div></a>
                                  </div>
                                                         
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../tbl_subcategory/form.php">    <div class="font-icon-detail"><i class="pe-7s-menu"></i>
                                      <input type="text" value="SUB CATEGORIES">
                                    </div></a>
                                  </div>    
                                <!--                                                           
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../tbl_purchase/select.php">  <div class="font-icon-detail"><i class="pe-7s-note2"></i>
                                      <input type="text" value="PURCHASE">
                                    </div></a>
                                  </div>   -->

                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../tbl_order/select.php">    <div class="font-icon-detail"><i class="pe-7s-cart"></i>
                                      <input type="text" value="ORDER">
                                    </div></a>
                                  </div>

                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                  <a href="../tbl_userpreference/select.php">    <div class="font-icon-detail"><i class="pe-7s-upload"></i>
                                      <input type="text" value="Userpreference">
                                    </div></a>
                                  </div>

                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                  <a href="../tbl_complaints/select.php">    <div class="font-icon-detail"><i class="pe-7s-upload"></i>
                                      <input type="text" value="COMPLAINTS">
                                    </div></a>
                                  </div>

                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                  <a href="../tbl_feedback/select.php">    <div class="font-icon-detail"><i class="pe-7s-box1"></i>
                                      <input type="text" value="FEEDBACK">
                                    </div></a>
                                  </div>
        
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



                
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	

</html>
