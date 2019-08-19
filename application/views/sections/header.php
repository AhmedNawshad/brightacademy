<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bright Academy</title>
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <!-- Normalize Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>">
    <!-- Color Switcher -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/color-switcher.css'); ?>" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/extras/animate.css'); ?>" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/extras/owl.carousel.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/extras/owl.theme.css'); ?>" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/extras/settings.css'); ?>" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/extras/nivo-lightbox.css'); ?>" type="text/css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.css'); ?>" type="text/css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/colors/sky.css'); ?>" media="screen" />
    
     <!-- Header area wrapper Starts -->
    <header id="header-wrap">
    
    <!-- Navbar Start -->
    <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="active"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
          </div>
          <!-- Brand End -->

          <!-- Search Icon -->
          <div class="header-search pull-right">
              <a class="open-search">
                  <i class="fa fa-search"></i>
              </a>
          </div>  
                   
             <!-- Form for navbar search area -->
             <form class="full-search">
              <div class="container">
                <div class="row">
                  <input class="form-control" type="text" placeholder="Search">
                  <a class="close-search">
                  <span class="fa fa-times">
                  </span>
                  </a>
                </div>
              </div>
            </form>
            <!-- Search form ends -->  

          <!-- Collapse Navbar -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown dropdown-toggle">
                <a class="active" href="<?php echo base_url('home/index'); ?>">Home </a>
              </li>
              <li class="dropdown dropdown-toggle">
                <a href="<?php echo base_url('home/courses'); ?>">Courses </a>
              </li>
              <li class="dropdown dropdown-toggle">
                <a href="<?php echo base_url('home/about'); ?>" >About Us </a>
              </li>
                           
              <li><a href="<?php echo base_url('home/contact'); ?>">Contact</a></li>
            </ul>
          </div>  
        

          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
              <a class="active" href="index.php">Home</a>
              <ul>
              <a class="active" href="<?php echo base_url('home/index'); ?>">Home </a>    
                    
              </ul>                        
            </li>
            <li>
            <a href="<?php echo base_url('home/courses'); ?>">Courses </a>                    
            </li>
            <li>
              <a href="">About Us</a>
            </li>           
            <a href="<?php echo base_url('home/about'); ?>" >About Us </a>
          </ul>
          <!-- Mobile Menu End -->

        </div>
    </nav>
    <!-- Navbar End -->

  </header>
  <!-- Header area wrapper End -->

  </head>