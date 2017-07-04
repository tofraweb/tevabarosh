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
                        <a>Languages</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#">English <i class="fa fa-check"></i></a>
                            </li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Russian</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>
                    <li><a href="page_faq.html">שאלות ותשובות</a></li>
                    <li class="topbar-devider"></li>
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
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=1">פרחי שדה</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=5">עצים ושיחים</a>
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

                    <!-- Shortcodes -->
                    <li class="dropdown mega-menu-fullwidth">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            תפריט
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content disable-icons">
                                    <div class="container">
                                        <div class="row equal-height">
                                            <div class="col-md-3 equal-height-in">
                                                <ul class="list-unstyled equal-height-list">
                                                    <li><h3>Typography &amp; Components</h3></li>

                                                    <!-- Typography -->
                                                    <li><a href="shortcode_typo_general.html"><i class="fa fa-sort-alpha-asc"></i> General Typography</a></li>
                                                    <li><a href="shortcode_typo_headings.html"><i class="fa fa-magic"></i> Headings Options</a></li>
                                                    <li><a href="shortcode_typo_dividers.html"><i class="fa fa-ellipsis-h"></i> Dividers</a></li>
                                                    <li><a href="shortcode_typo_blockquote.html"><i class="fa fa-quote-left"></i> Blockquote Blocks</a></li>
                                                    <li><a href="shortcode_typo_boxshadows.html"><i class="fa fa-asterisk"></i> Box Shadows</a></li>
                                                    <li><a href="shortcode_typo_testimonials.html"><i class="fa fa-comments"></i> Testimonials</a></li>
                                                    <li><a href="shortcode_typo_tagline_boxes.html"><i class="fa fa-tasks"></i> Tagline Boxes</a></li>
                                                    <li><a href="shortcode_typo_grid.html"><i class="fa fa-align-justify"></i> Grid Layouts</a></li>
                                                    <!-- End Typography -->

                                                    <!-- Components -->
                                                    <li><a href="shortcode_compo_messages.html"><i class="fa fa-comment"></i> Alerts &amp; Messages</a></li>
                                                    <li><a href="shortcode_compo_labels.html"><i class="fa fa-tags"></i> Labels &amp; Badges</a></li>
                                                    <li><a href="shortcode_compo_media.html"><i class="fa fa-volume-down"></i> Audio/Videos &amp; Images</a></li>
                                                    <li><a href="shortcode_compo_pagination.html"><i class="fa fa-arrows-h"></i> Paginations</a></li>
                                                    <!-- End Components -->
                                                </ul>
                                            </div>
                                            <div class="col-md-3 equal-height-in">
                                                <ul class="list-unstyled equal-height-list">
                                                    <li><h3>Buttons &amp; Icons</h3></li>

                                                    <!-- Buttons -->
                                                    <li><a href="shortcode_btn_general.html"><i class="fa fa-flask"></i> General Buttons</a></li>
                                                    <li><a href="shortcode_btn_brands.html"><i class="fa fa-html5"></i> Brand &amp; Social Buttons</a></li>
                                                    <li><a href="shortcode_btn_effects.html"><i class="fa fa-bolt"></i> Loading &amp; Hover Effects</a></li>
                                                    <!-- End Buttons -->

                                                    <!-- Icons -->
                                                    <li><a href="shortcode_icon_general.html"><i class="fa fa-chevron-circle-right"></i> General Icons</a></li>
                                                    <li><a href="shortcode_icon_fa.html"><i class="fa fa-chevron-circle-right"></i> Font Awesome Icons</a></li>
                                                    <li><a href="shortcode_icon_line.html"><i class="fa fa-chevron-circle-right"></i> Line Icons</a></li>
                                                    <li><a href="shortcode_icon_glyph.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons (Bootstrap)</a></li>
                                                    <li><a href="shortcode_icon_glyph_pro.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons Pro</a></li>
                                                    <!-- End Icons -->
                                                </ul>
                                            </div>
                                            <div class="col-md-3 equal-height-in">
                                                <ul class="list-unstyled equal-height-list">
                                                    <li><h3>Common elements</h3></li>

                                                    <!-- Content Boxes -->
                                                    <li><a href="shortcode_box_general.html"><i class="fa fa-cog"></i> General Content Boxes</a></li>
                                                    <li><a href="shortcode_box_colored.html"><i class="fa fa-align-center"></i> Colored Boxes</a></li>
                                                    <li><a href="shortcode_thumbnails.html"><i class="fa fa-image"></i> Thumbnails</a></li>
                                                    <li><a href="shortcode_accordion_and_tabs.html"><i class="fa fa-list-ol"></i> Accordion &amp; Tabs</a></li>
                                                    <li><a href="shortcode_timeline1.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 1</a></li>
                                                    <li><a href="shortcode_timeline2.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 2</a></li>
                                                    <li><a href="shortcode_table_general.html"><i class="fa fa-table"></i> Tables</a></li>
                                                    <li><a href="shortcode_compo_progress_bars.html"><i class="fa fa-align-left"></i> Progress Bars</a></li>
                                                    <li><a href="shortcode_compo_panels.html"><i class="fa fa-columns"></i> Panels</a></li>
                                                    <!-- End Common Elements -->
                                                </ul>
                                            </div>
                                            <div class="col-md-3 equal-height-in">
                                                <ul class="list-unstyled equal-height-list">
                                                    <li><h3>Forms &amp; Infographics</h3></li>

                                                    <!-- Forms -->
                                                    <li><a href="shortcode_form_general.html"><i class="fa fa-bars"></i> Common Bootstrap Forms</a></li>
                                                    <li><a href="shortcode_form_general1.html"><i class="fa fa-bars"></i> General Unify Forms</a></li>
                                                    <li><a href="shortcode_form_advanced.html"><i class="fa fa-bars"></i> Advanced Forms</a></li>
                                                    <li><a href="shortcode_form_layouts.html"><i class="fa fa-bars"></i> Form Layouts</a></li>
                                                    <li><a href="shortcode_form_layouts_advanced.html"><i class="fa fa-bars"></i> Advanced Layout Forms</a></li>
                                                    <li><a href="shortcode_form_states.html"><i class="fa fa-bars"></i> Form States</a></li>
                                                    <li><a href="shortcode_form_sliders.html"><i class="fa fa-bars"></i> Form Sliders</a></li>
                                                    <li><a href="shortcode_form_modals.html"><i class="fa fa-bars"></i> Modals</a></li>
                                                    <!-- End Forms -->

                                                    <!-- Infographics -->
                                                    <li><a href="shortcode_carousels.html"><i class="fa fa-sliders"></i> Carousel Examples</a></li>
                                                    <li><a href="shortcode_compo_charts.html"><i class="fa fa-pie-chart"></i> Charts &amp; Countdowns</a></li>
                                                    <li><a href="shortcode_maps_google.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>
                                                    <li><a href="shortcode_maps_vector.html"><i class="fa fa-align-center"></i> Vector Maps</a></li>
                                                    <!-- End Infographics -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- End Shortcodes -->

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
