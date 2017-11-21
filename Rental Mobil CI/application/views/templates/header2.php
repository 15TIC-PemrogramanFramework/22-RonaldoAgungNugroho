<!DOCTYPE html>
<head>
<title>Rental BUS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url();?>/assets2/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>/assets2/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/font.css" type="text/css"/>
<link href="<?php echo base_url();?>/assets2/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script href="<?php echo base_url();?>/assets2/<?php echo base_url();?>/assets2/js/jquery2.0.3.min.js"></script>
<script href="<?php echo base_url();?>/assets2/<?php echo base_url();?>/assets2/js/raphael-min.js"></script>
<script href="<?php echo base_url();?>/assets2/<?php echo base_url();?>/assets2/js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="<?php echo base_url();?>/assets2/index.html" class="logo">
        Rental BUS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->

    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
                <?php
                $status = $this->session->userdata('username');
                if($status=='login')
                {
                    echo "<li>".anchor('kendaraan','<i class="fa fa-user fa-fw"></i> Home')."</li>";
                    echo "<li>".anchor('login/logout','<i class="fa fa-sign-out fa-fw"></i> Logout'."</li>");
                }
                elseif($status==''){
                    echo "<li>".anchor('dashboard','<i class="fa fa-user fa-fw"></i> Admin Menu '.$this->session->userdata('username'))."</li>";
                    echo "<li>".anchor('login_admin/logout','<i class="fa fa-sign-out fa-fw"></i> Logout'."</li>");
                }
                ?>
    </ul>
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                        <?php
                        $menu = array(
                            // array ('url','icon','LInk')
                            array('','','kendaraan'),
                            array('','','Sopir'),
                            array('','','tarif'),
                            array('','','pelanggan'),
                            array('','','transaksi')
                        );                       
                       echo "<li>".anchor('kendaraan',"<i class='fa fa-bar-chart-o fa-fw'></i> DATA KENDARAAN")."</li>";
                       echo "<li>".anchor('sopir',"<i class='fa fa-bar-chart-o fa-fw'></i> DATA SOPIR")."</li>";
                       echo "<li>".anchor('tarif',"<i class='fa fa-bar-chart-o fa-fw'></i> DATA TARIF")."</li>";
                       echo "<li>".anchor('pelanggan',"<i class='fa fa-bar-chart-o fa-fw'></i> DATA PELANGGAN")."</li>";
                       echo "<li>".anchor('transaksi',"<i class='fa fa-bar-chart-o fa-fw'></i> DATA TRANSAKSI")."</li>";
                       ?>
            </ul>            </div>
        <!-- sidebar menu end-->
                    <?php echo $contents;?>
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">