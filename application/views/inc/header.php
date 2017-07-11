<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html dir="rtl" lang="en"> <!--<![endif]-->
<head>
    <title>טבע בראש - על צמחים וציפורים</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/style-rtl.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/headers/header-default-rtl.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/footers/footer-v1-rtl.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/parallax-slider/css/parallax-slider-rtl.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/owl-carousel2/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/pages/portfolio-v1-rtl.css">

    <!-- Style Switcher -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/style-switcher.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/theme-skins/dark.css">

    <!-- RTL Customization -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/rtl.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css-rtl/custom-rtl.css">
</head>

<body>

<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/img/tevabarosh_logo_small.png" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    <li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a>שפות</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#">עברית <i class="fa fa-check"></i></a>
                            </li>
                            <li><a href="#">Magyar</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>
                    <!-- <li><a href="page_faq.html">שאלות ותשובות</a></li>
                    <li class="topbar-devider"></li> -->
                    <li><a href="<?php echo base_url();?>admin">התחבר</a></li>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav" style="font-size:20px">
                    <!-- Home -->
                    <li class="active">
                        <a href="<?php echo base_url();?>">
                            בית
                        </a>
                    </li>
                    <!-- End Home -->

                    <!-- Plants -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            קטלוג צמחים
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Service Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">צמחי גינה</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>catalog/?cat=4">סוקולנטים</a></li>
                                    <li><a href="javascript:void(0);">משתרעים</a></li>
                                    <li><a href="javascript:void(0);">עונתיים</a></li>
                                    <li><a href="javascript:void(0);">ירוק עד</a></li>
                                    <li><a href="<?php echo base_url();?>catalog/?cat=3">כל צמחי הגינה</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=1">פרחי שדה</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=5">עצים ושיחים</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?kd=1">כל הצמחים</a>
                            </li>
                            <!-- End Sub Level Menu -->
                        </ul>
                    </li>
                    <!-- End Plants -->

                    <!-- Birds -->
                    <li>
                        <a href="<?php echo base_url();?>catalog/?cat=2">
                            קטלוג ציפורים
                        </a>
                    </li>
                    <!-- End Birds -->


                    <!-- Blog -->
                    <li>
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            בלוג
                        </a>
                    </li>
                    <!-- End Blog -->

                    <!-- Personal -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            שלום טומי
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Service Pages -->
                            <li>
                                <a href="<?php echo base_url();?>">הפרופיל שלי</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog">הגן שלי</a>
                            </li>
                            <!-- End Sub Level Menu -->
                        </ul>
                    </li>
                    <!-- End Personal -->

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <form method="get" action="<?php echo base_url();?>catalog">
                          <div class="search-open">
                              <div class="input-group animated fadeInDown">
                                  <input type="text" class="form-control" name="s" id="s" placeholder="חיפוש באתר">
                                  <span class="input-group-btn">
                                      <button class="btn-u" type="button">חפש</button>
                                  </span>
                              </div>
                          </div>
                        </form>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
