<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo $this->baseURL; ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo $this->baseURL; ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo $this->baseURL; ?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">
                        <img src="<?php echo $this->baseURL; ?>assets/img/logo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="logout" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="admin" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></a>
                    </li>
                    <li>
                        <a href="viewalluser">Allusers</a>
                    </li>
                </ul>
                            </div>
                        </nav>
                        <div id="page-wrapper" >
                            <div id="page-inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                     <h2>ADMIN DASHBOARD</h2>   
                                    </div>
                                </div>              
                                 <!-- /. ROW  -->