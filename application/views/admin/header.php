<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Shops Bay Admin Panel">
    <meta name="author" content="">
    <title><?=APP_TITLE?> - Admin Panel</title>
    <link rel="apple-touch-icon" href="<?=IMG?>logo/favicon.jpg" sizes="16x16">
    <link rel="icon" href="<?=IMG?>logo/favicon.jpg" sizes="16x16">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?=GLOBAL_?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>assets/css/site.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/waves/waves.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/datatables-bootstrap/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/datatables-fixedheader/dataTables.fixedHeader.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/datatables-responsive/dataTables.responsive.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>assets/examples/css/tables/datatable.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/formvalidation/formValidation.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>assets/examples/css/forms/validation.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/blueimp-file-upload/jquery.fileupload.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/dropify/dropify.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="<?=GLOBAL_?>assets/examples/css/uikit/icons.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/7-stroke/7-stroke.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/ionicons/ionicons.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/mfglabs/mfglabs.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/open-iconic/open-iconic.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/themify/themify.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/weather-icons/weather-icons.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/glyphicons/glyphicons.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/web-icons/web-icons.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/octicons/octicons.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>vendor/summernote/summernote.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="<?=GLOBAL_?>assets/examples/css/pages/invoice.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <!--[if lt IE 9]>
      <script src="<?=GLOBAL_?>vendor/html5shiv/html5shiv.min.js"></script>
      <![endif]-->
    <!--[if lt IE 10]>
      <script src="<?=GLOBAL_?>vendor/media-match/media.match.min.js"></script>
      <script src="<?=GLOBAL_?>vendor/respond/respond.min.js"></script>
      <![endif]-->
    <!-- Scripts -->
    <script src="<?=GLOBAL_?>vendor/jquery/jquery.js"></script>
    <script src="<?=GLOBAL_?>vendor/modernizr/modernizr.js"></script>
    <script src="<?=GLOBAL_?>vendor/breakpoints/breakpoints.js"></script>
    <script>
    Breakpoints();
    </script>
</head>
<body>
<style>
  .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover,
  .btn-primary.active.focus, 
  .btn-primary.active:focus, 
  .btn-primary.active:hover, 
  .btn-primary:active.focus, 
  .btn-primary:active:focus, 
  .btn-primary:active:hover, 
  .open>.dropdown-toggle.btn-primary.focus, 
  .open>.dropdown-toggle.btn-primary:focus, 
  .open>.dropdown-toggle.btn-primary:hover,
  .btn-primary:hover,
  .btn-primary:active,
  .btn-primary:focus,
  .btn-primary{
    background: #f79206;
    border-color: #f79206;
  }
</style>

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation" style="background: transparent;">
    <div class="navbar-header" style="border-right: 1px solid #f3f4f5;">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" style="width: 100%; text-align: center;background: #000;" data-toggle="gridmenu">
        <!-- <img class="navbar-brand-logo" src="<?=IMG?>logo.png"> -->
        <span class="navbar-brand-text"><?=APP_TITLE?></span>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon md-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
        </ul>
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
    <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li rel="setting" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/setting">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Setting</span>
                </a>
            </li>
            <li rel="homepage" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/homepage">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Home Page</span>
                </a>
            </li>
            <li rel="slider" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/slider">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Slider</span>
                </a>
            </li>
            <li rel="testimonials" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/testimonials">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Testimonials</span>
                </a>
            </li>
            <li rel="blog" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/blog">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Blog</span>
                </a>
            </li>
            <li rel="features" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/features">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Features</span>
                </a>
            </li>
            <li rel="faqs" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/faqs">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">FAQs</span>
                </a>
            </li>
            <li rel="team" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/team">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Team</span>
                </a>
            </li>

            <li class="site-menu-category">Contact Forms</li>
            <li rel="contact_forms_0" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/contact-forms/0">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">New</span>
                </a>
            </li>
            <li rel="contact_forms_1" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/contact-forms/1">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Seen</span>
                </a>
            </li>

            <li class="site-menu-category">Locations</li>
            <li rel="locations_all" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/locations/all">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">All</span>
                </a>
            </li>
            <li rel="locations_1" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/locations/1">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Active</span>
                </a>
            </li>
            <li rel="locations_0" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/locations/0">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Inactive</span>
                </a>
            </li>
            <li rel="add_location" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/add-location">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Add</span>
                </a>
            </li>

            <li class="site-menu-category">Services</li>
            <li rel="services" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/services">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">All</span>
                </a>
            </li>
            <li rel="add_service" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/add-service">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Add</span>
                </a>
            </li>

            <li class="site-menu-category">Main Site</li>
            <li rel="pages" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/pages">
                    <i class="site-menu-icon md-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Pages</span>
                </a>
            </li>
            
            <li class="site-menu-category">Account</li>
            <li rel="pass" class="site-menu-item">
                <a class="animsition-link" href="<?=BASEURL?>admin/change-password">
                    <i class="site-menu-icon md-key" aria-hidden="true"></i>
                    <span class="site-menu-title">Change Password</span>
                </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="site-menubar-footer">
      <a href="<?=BASEURL?>admin/logout" style="width: 100%;" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon md-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>