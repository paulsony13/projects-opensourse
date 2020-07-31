<?php
session_start();
$title="";
error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>J V Associates</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="../common/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


<style>
hr
{
margin:2px !important;	
}
body
{

}
div
{
	background:#FFF;
	opacity: 1;
}
.link12 a
{
	color:#FFF;
}
.link
{
font-size:15px;	
}
.linkk
{
font-size:15px;	
color:#C70039;

}
.m5
{
padding:3px;	
}
</style>

</head>
<body>

<div class="wrapper">



    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    <div class="content" >
            <div class="container-fluid">
<div class="row">
                    <div class="col-md-3 " style="background:#5869D0;height:60px;border-bottom:1px solid #ccc;">
                <span style="font-size:20px;color:#FFF;margin-top:12px;"> Welcome <br><span style="font-size:12px;color:#000;"> <?php echo $_SESSION['login_user']; ?>
                </span>
                </span>
                    </div>
                    <div class="col-md-9 " style="line-height:60px;float:right;background:#F3F4F2;">
                  <span style="float:left;font-size:20px;color:#000;">    <?php echo $_SESSION['company_name']; ?> &nbsp;&nbsp;&nbsp;</span><span style="float:right;font-size:20px;color:#000;">   <a href="../login2/login.php">LOG OUT</a></span>
                    </div>
                    </div>
    	
       </div></div>


        <div class="content">
            <div class="container-fluid">
            
                <div class="row">
                    <div class="col-md-3 link " style="background:#5869D0;height:600px;">
                   
                  
                      
                       <div class="" style="border:1px solid #ccc;overflow:auto;height:360px;margin:5px;margin-top:10px;">
                      <div style="background:#5869D0;color:#FFF;padding:10px;">DOCUMENTS </div>
                     
                     <?php
					 $kk=0;
					  include("../connection.php");
					  $result = mysqli_query($con,"SELECT count(*) as cc,file_type,file FROM document_all where client_name='$_SESSION[userid]' group by file_type");
 
	while($row = mysqli_fetch_array($result))
		{
			
			$result2 = mysqli_query($con,"SELECT * FROM document_list where id='$row[file_type]'");
 
	$row2 = mysqli_fetch_array($result2);
			
			
			if($row['cc']==1)
			{
				echo "<a href='../document_all/uploads/$row[file]' target='_blank' class='linkk'>&nbsp;&nbsp<span class='pe-7s-cloud'>&nbsp;&nbsp</span>$row2[document_type] </a> <hr>";
			}
			else
			{
				$kk++;
				$da="#demo".$kk;
				$daa="demo".$kk;
				?>
                
                                
                      <div data-toggle='collapse' data-target='<?php echo $da; ?>'>&nbsp;
					<?php echo "<span style='cursor:pointer'>$row2[document_type] ($row[cc])   </span> 
					&nbsp;
					<span class='pe-7s-bottom-arrow'></span><hr>"; ?></div>
  <div id='<?php echo $daa; ?>' class='collapse'>
    <?php
	
		  $result3 = mysqli_query($con,"SELECT * FROM document_all where client_name='$_SESSION[userid]' and file_type='$row[file_type]' group by group_by_year");
 
	while($row3 = mysqli_fetch_array($result3))
		{
			$mm="";
			if($row3['group_by_year']!="0")
			{
				echo "&nbsp;&nbsp;<a href='' target='_blank' class='linkk'>$row3[group_by_year]  </a> <hr>";
			$mm=" &nbsp;&nbsp;&nbsp; >>";
			}
			else
			{
			//echo "&nbsp;&nbsp;<a href='../document_all/uploads/$row3[file]' target='_blank'> gg $row3[group_by_year]  </a> <hr>";	
				
			}
			  $result33 = mysqli_query($con,"SELECT * FROM document_all where client_name='$_SESSION[userid]' and file_type='$row[file_type]' and group_by_year='$row3[group_by_year]'");
 
	while($row33 = mysqli_fetch_array($result33))
		{
				echo " $mm &nbsp;&nbsp;<a href='../document_all/uploads/$row3[file]' target='_blank'> $row33[remark] </a> <hr>";
		}	
				
				
				
				
				
				
				
				
		}
	
	?>
  </div>
                <?php
			}
		}
					 
					 
					 
					 
					 
					 
					 ?>
                     
                     
                 
                     
                      
                      </div>
                     
                      
                     <div  style="border:1px solid #ccc;margin:5px;">
                      <div style="background:#5869D0;color:#FFF;padding:10px;" class='link12'>
                      <a href='../document_all/msg.php'>
                       COMMUNICATION HISTROY
                      </a>
                      </div>
                     
                    
                      
                      </div>
                    
                      
                    
                      
                      <div  style="border:1px solid #ccc;margin:5px;">
                      <div style="background:#5869D0;color:#FFF;padding:10px;" class='link12'>
                      <a href='../billing/select2.php'>
                      ACCOUNT
                      </a>
                      </div>
                     
                    
                      
                      </div>
                      
                       
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                    </div>
                    <div class="col-md-6" >
                     
                     
                     
                     
                     
                     
                     <div  >
                     
                     <div  style="height:230px;margin-bottom:10px;margin-top:10px; " >
                     
                      
                    
                    
                    
                    
                    
                    
                    <div style="width:48%;float:left;border:1px solid #ccc;">
                    
                      <div  style="height:220px;background:#F4F4F4;margin-right:0px;">
                       <div style="background:#5B76F4;color:#FFF;padding:10px;"> <i class='pe-7s-bottom-arrow'></i> &nbsp; REFERENCE</div><div style="overflow:auto;height:180px;">
                   
					 <?php
                     
                      $result = mysqli_query($con,"SELECT * FROM board order by reference asc ");
 
	while($row = mysqli_fetch_array($result))
		{
			echo "<div class='m5'>$row[reference] </div><hr> ";
		}
	
                     
                     ?>
                    
                     </div>
                     </div>
                     </div>
                     
                     
                     
                    
                    
                    
                    
                    
                     <div style="width:48%;float:right;border:1px solid #ccc;">
                    
                      <div  style="height:220px;background:#F4F4F4;margin-right:0px;">
                       <div style="background:#5B76F4;color:#FFF;padding:10px;"> <i class='pe-7s-bell'></i> &nbsp;  NOTIFICATION</div><div style="overflow:auto;height:180px;">
                     <marquee direction="up" scrolldelay="400" >
					 <?php
                     
                      $result = mysqli_query($con,"SELECT * FROM notification ");
 
	while($row = mysqli_fetch_array($result))
		{
			echo "<div class='m5'> $row[notification]</div> <hr> ";
		}
	
                     
                     ?>
                     </marquee>
                     </div>
                     </div>
                     </div>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     </div>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                      <div style="background:#5869D0;color:#FFF;padding:10px;"> <i class='pe-7s-mail-open'></i> &nbsp; MESSAGE SECTION</div>
                     <form action="" method="post"  enctype="multipart/form-data">
                     SUBJECT
                     <?php
					  include("../connection.php");
					  if(isset($_POST['submit']))
					  {
						  echo "insert";
						  
						  
						  
						  
						  if($_FILES['uploadedfile']['name']!="")
						  {
							  $target_path = "msg/";
$datee=date("Y-m-d-h-i-s");
$target_path = $target_path .$datee. basename( $_FILES['uploadedfile']['name']); 

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path) ;
						  }
						  
						  mysqli_query($con,"insert into message (user_id,message,title,path) value ('$_SESSION[userid]','$_POST[message]','$_POST[title]','$target_path')") or die(mysqli_error($con));
					  }
					  
					
 echo "<input name='title' type='text' class='form-control'>";
	
					 
					 
					 ?>
                     MESSAGE
                      <textarea style="width:100%;height:90px;" name="message"></textarea>
                      <br><br>
                      <div class="col-sm-12"> <div class="col-sm-7">
                      Choose a file to upload: <input name="uploadedfile" type="file" />
                      </div>
                       <div class="col-sm-4">
                      <input type="submit" name="submit" class="btn-danger btn" value="Send Message" >
                      </div>
                      </div>
                      
                      </form>
                      <br>
                      </div>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                      
                    </div>
                    
                     <div class="col-md-3">
                     
                     
                 
                     
                      <div class="col-md-12 " style="overflow:auto;height:500px;margin-left:5px;margin-top:10px;background:#F4F4F4;">
                    
                      <div style="background:#5869D0;color:#FFF;padding:10px;"> <i class='pe-7s-anchor'></i> &nbsp; UTILITY</div>
                     
                     <?php
					  include("../connection.php");
					  $result = mysqli_query($con,"SELECT * FROM utility");
 
	while($row = mysqli_fetch_array($result))
		{
			echo "<a href='../utilize/uploads/$row[file_upload]' target='_blank' class='linkk'>$row[document]</a> <hr>";
		}
					 
					 
					 ?>
                      
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
