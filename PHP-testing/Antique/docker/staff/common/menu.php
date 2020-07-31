<?php
session_start();
if($_SESSION['user']=="")
{
header("location:../../login.php");
}

$title="";
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title></title>

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

</head>
<body>

<div class="wrapper">

<div class="sidebar" data-color="yh">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
            <br/> <br/>
            
                <img src="../common/core-img/logo.png">
                 
            </div>

            <ul class="nav">
                
                
                <li >
                    <a href="../dashboard/dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                
                <li>
                    <a href="../registration/select.php">
                        <i class="pe-7s-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                
                  <li>
                    <a href="../account/select.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Accounts</p>
                    </a>
                </li>
                
                
                
                
                
              <!--  <li>
                    <a href="../customer/select.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Client</p>
                    </a>
                </li>
                -->
                
                
             
                
                
                
                
              
                 <li>
                    <a href="../../login.php?status=logout">
                        <i class="pe-7s-bell"></i>
                        <p>Log Out</p>
                    </a>
                </li>
               
               
                
                <!-- <li>
                    <a href="../station/select.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Station </p>
                    </a>
                </li>
                
             
                 <li>
                    <a href="../offer/select.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Offer </p>
                    </a>
                </li>
                
                -->
                
                
                 
               
				
            </ul>
    	</div>
    </div>
    <div class="main-panel">
    
    
    
    <nav class="">
            <div class="container-fluid">
                <div class="navbar-header">
                           <div style="padding-left:50px;padding-right:50px">      
<marquee width="100%" direction="left" height="50%" behavior="scroll">
  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#fbb808">  <font color="#000000">Welcome </font>You <font color="#000000">To</font> Amado<font color="#000000"> Furniture</font></font>
</marquee>
                  
                </div>
                
            </div>
        </nav>