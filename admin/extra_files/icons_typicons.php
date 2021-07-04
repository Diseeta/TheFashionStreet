<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_typicons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Design_Gurus" name="author">
    <meta content="WOW Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>WOW - Admin Template Bootstrap 4 with material design</title>

    <!--favicon-->
    <link href="assets/images/favicon.ico" rel="shortcut icon">

    <!--Preloader-CSS-->
    <link rel="stylesheet" href="assets/plugins/preloader/preloader.css">

    <!--bootstrap-4-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--Custom Scroll-->
    <link rel="stylesheet" href="assets/plugins/customScroll/jquery.mCustomScrollbar.min.css">
    <!--Font Icons-->
    <link rel="stylesheet" href="assets/icons/dripicons/dripicons.css">
    <link rel="stylesheet" href="assets/icons/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/icons/typicons/typicons.min.css">

    <!--Date-range-->
    <link rel="stylesheet" href="assets/plugins/date-range/daterangepicker.css">
    <!--Drop-Zone-->
    <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
    <!--Full Calendar-->
    <link rel="stylesheet" href="assets/plugins/full-calendar/fullcalendar.min.css">
    <!--Normalize Css-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--Main Css-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!---Preloader Starts Here--->
<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h1 class="ip-logo text-center"><img class="img-fluid" src="assets/images/logo-c.png" alt="" class="ip-logo text-center"/></h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
</div>
<!---Preloader Ends Here--->


<!--Navigation-->
<nav id="navigation" class="navigation-sidebar bg-primary">
    <div class="navigation-header">
        <a href="index.html"><span class="logo">WOW - Admin</span></a>
        <!--<img src="logo.png" alt="logo" class="brand" height="50">-->
    </div>

    <!--Navigation Profile area-->
    <div class="navigation-profile">
        <img class="profile-img rounded-circle" src="assets/images/1.jpg" alt="profile image">
        <h4 class="name">Meera</h4>
        <span class="designation">UI/UX EXPERT</span>

        <a id="show-user-menu" href="javascript:void(0);" class="circle-white-btn profile-setting"><i class="fa fa-cog"></i></a>

        <!--logged user hover menu-->
        <div class="logged-user-menu bg-white">
            <div class="avatar-info">
                <img class="profile-img rounded-circle" src="assets/images/1.jpg" alt="profile image">
                <h4 class="name">Meera</h4>
                <span class="designation">UI/UX EXPERT</span>
            </div>

            <ul class="list-unstyled">
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-ios-email-outline"></i>
                        <span>Emails</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-ios-person-outline"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="user_change-password.html">
                        <i class="ion-ios-locked-outline"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-log-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--Navigation Menu Links-->
    <div class="navigation-menu">

        <ul class="menu-items custom-scroll">
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Dashboard</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="index.html">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Main Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard_tasks-list.html">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Tasks List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="apps_calendar.html">
                    <span class="icon-thumbnail"><i class="fa fa-calendar"></i></span>
                    <span class="title">Full Calendar</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-document-new"></i></span>
                    <span class="title">Pages</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="pages_invoice.html">
                            <span class="icon-thumbnail"><i class="dripicons-print"></i></span>
                            <span class="title">Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_login.html">
                            <span class="icon-thumbnail"><i class="dripicons-enter"></i></span>
                            <span class="title">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_register.html">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">Register</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_404.html">
                            <span class="icon-thumbnail"><i class="dripicons-warning"></i></span>
                            <span class="title">404 Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages_500.html">
                            <span class="icon-thumbnail"><i class="dripicons-warning"></i></span>
                            <span class="title">500 Page</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-graph-bar"></i></span>
                    <span class="title">Charts</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="charts_line.html">
                            <span class="icon-thumbnail"><i class="dripicons-graph-line"></i></span>
                            <span class="title">Line Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts_bar.html">
                            <span class="icon-thumbnail"><i class="dripicons-graph-bar"></i></span>
                            <span class="title">Bar Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts_pie-doughnut.html">
                            <span class="icon-thumbnail"><i class="dripicons-graph-pie"></i></span>
                            <span class="title">Pie & Doughnut</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts_sparkline.html">
                            <span class="icon-thumbnail">SP</span>
                            <span class="title">Sparkline </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-heart"></i></span>
                    <span class="title">UI Kit</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="uikit_alerts.html">
                            <span class="icon-thumbnail"><i class="dripicons-warning"></i></span>
                            <span class="title">Alerts</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_buttons.html">
                            <span class="icon-thumbnail"><i class="dripicons-bold"></i></span>
                            <span class="title">Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_grid.html">
                            <span class="icon-thumbnail"><i class="dripicons-view-thumb"></i></span>
                            <span class="title">Grid</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_modals.html">
                            <span class="icon-thumbnail"><i class="dripicons-duplicate"></i></span>
                            <span class="title">Modals</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_progress.html">
                            <span class="icon-thumbnail"><i class="dripicons-scale"></i></span>
                            <span class="title">Progress Bar</span>
                        </a>
                    </li>
                    <li>
                        <a href="uikit_tooltips.html">
                            <span class="icon-thumbnail"><i class="dripicons-message"></i></span>
                            <span class="title">Tooltips</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-article"></i></span>
                    <span class="title">Forms</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="forms_regular.html">
                            <span class="icon-thumbnail"><i class="dripicons-blog"></i></span>
                            <span class="title">Regular Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms_validation.html">
                            <span class="icon-thumbnail"><i class="dripicons-checkmark"></i></span>
                            <span class="title">Form Validation</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms_uploads.html">
                            <span class="icon-thumbnail"><i class="dripicons-upload"></i></span>
                            <span class="title">File Uploads</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms_ckEditor.html">
                            <span class="icon-thumbnail"><i class="dripicons-document-edit"></i></span>
                            <span class="title">CK Editor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu">
                    <span class="icon-thumbnail"><i class="dripicons-view-list-large"></i></span>
                    <span class="title">Tables</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="tables_regular.html">
                            <span class="icon-thumbnail">RT</span>
                            <span class="title">Regular Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables_data-table.html">
                            <span class="icon-thumbnail">DT</span>
                            <span class="title">Data Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables_editable.html">
                            <span class="icon-thumbnail">ET</span>
                            <span class="title">Editable Tables</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-store"></i></span>
                    <span class="title">Icons</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="icons_simple-line.html">
                            <span class="icon-thumbnail">SL</span>
                            <span class="title">Simple Line</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_themify.html">
                            <span class="icon-thumbnail">TH</span>
                            <span class="title">Themify</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_dripicons.html">
                            <span class="icon-thumbnail">DP</span>
                            <span class="title">Dripicons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_eightyshades.html">
                            <span class="icon-thumbnail">ES</span>
                            <span class="title">Eightyshades</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_fontawesome.html">
                            <span class="icon-thumbnail">FA</span>
                            <span class="title">Font Awesome</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_foundation.html">
                            <span class="icon-thumbnail">FO</span>
                            <span class="title">Foundation</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_metrize.html">
                            <span class="icon-thumbnail">MI</span>
                            <span class="title">Metrize Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_typicons.html" class="active">
                            <span class="icon-thumbnail">TY</span>
                            <span class="title">Typicons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons_weathericons.html">
                            <span class="icon-thumbnail">WI</span>
                            <span class="title">Weather Icons</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="documentation.html">
                    <span class="icon-thumbnail"><i class="dripicons-document"></i></span>
                    <span class="title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">
        <!--Header Fixed-->
        <div class="header fixed-header">
            <div class="container-fluid" style="padding: 10px 25px">
                <div class="row">
                    <div class="col-9 col-md-6 d-lg-none">
                        <a id="toggle-navigation" href="javascript:void(0);" class="icon-btn mr-3"><i class="fa fa-bars"></i></a>
                        <span class="logo">WOW - Admin</span>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Icons</li>
                            <li class="breadcrumb-item active">Typicons</li>
                        </ol>
                    </div>
                    <div class="col-3 col-md-6 col-lg-4">
                        <a href="javascript:void(0);" class="btn btn-primary btn-round pull-right d-none d-md-block">Buy Theme Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        <div class="block">
                            <div class="block-heading">
                                <h5>Typicons</h5>
                                <p class="mt-2">Powered by Typicons set, for more info <a href="http://www.typicons.com/" target="_blank" class="btn-link">click here</a></p>
                            </div>

                            <ul class="demo-icons-list">
                                <li><a href="#"><i class="typcn typcn-adjust-brightness"></i><span>typcn typcn-adjust-brightness</span></a></li>
                                <li><a href="#"><i class="typcn typcn-adjust-contrast"></i><span>typcn typcn-adjust-contrast</span></a></li>
                                <li><a href="#"><i class="typcn typcn-anchor-outline"></i><span>typcn typcn-anchor-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-anchor"></i><span>typcn typcn-anchor</span></a></li>
                                <li><a href="#"><i class="typcn typcn-archive"></i><span>typcn typcn-archive</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-back-outline"></i><span>typcn typcn-arrow-back-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-back"></i><span>typcn typcn-arrow-back</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-down-outline"></i><span>typcn typcn-arrow-down-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-down-thick"></i><span>typcn typcn-arrow-down-thick</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-down"></i><span>typcn typcn-arrow-down</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-forward-outline"></i><span>typcn typcn-arrow-forward-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-forward"></i><span>typcn typcn-arrow-forward</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-left-outline"></i><span>typcn typcn-arrow-left-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-left-thick"></i><span>typcn typcn-arrow-left-thick</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-left"></i><span>typcn typcn-arrow-left</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-loop-outline"></i><span>typcn typcn-arrow-loop-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-loop"></i><span>typcn typcn-arrow-loop</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-maximise-outline"></i><span>typcn typcn-arrow-maximise-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-maximise"></i><span>typcn typcn-arrow-maximise</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-minimise-outline"></i><span>typcn typcn-arrow-minimise-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-minimise"></i><span>typcn typcn-arrow-minimise</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-move-outline"></i><span>typcn typcn-arrow-move-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-move"></i><span>typcn typcn-arrow-move</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-repeat-outline"></i><span>typcn typcn-arrow-repeat-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-repeat"></i><span>typcn typcn-arrow-repeat</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-right-outline"></i><span>typcn typcn-arrow-right-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-right-thick"></i><span>typcn typcn-arrow-right-thick</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-right"></i><span>typcn typcn-arrow-right</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-shuffle"></i><span>typcn typcn-arrow-shuffle</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-sorted-down"></i><span>typcn typcn-arrow-sorted-down</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-sorted-up"></i><span>typcn typcn-arrow-sorted-up</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-sync-outline"></i><span>typcn typcn-arrow-sync-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-sync"></i><span>typcn typcn-arrow-sync</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-unsorted"></i><span>typcn typcn-arrow-unsorted</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-up-outline"></i><span>typcn typcn-arrow-up-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-up-thick"></i><span>typcn typcn-arrow-up-thick</span></a></li>
                                <li><a href="#"><i class="typcn typcn-arrow-up"></i><span>typcn typcn-arrow-up</span></a></li>
                                <li><a href="#"><i class="typcn typcn-at"></i><span>typcn typcn-at</span></a></li>
                                <li><a href="#"><i class="typcn typcn-attachment-outline"></i><span>typcn typcn-attachment-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-attachment"></i><span>typcn typcn-attachment</span></a></li>
                                <li><a href="#"><i class="typcn typcn-backspace-outline"></i><span>typcn typcn-backspace-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-backspace"></i><span>typcn typcn-backspace</span></a></li>
                                <li><a href="#"><i class="typcn typcn-battery-charge"></i><span>typcn typcn-battery-charge</span></a></li>
                                <li><a href="#"><i class="typcn typcn-battery-full"></i><span>typcn typcn-battery-full</span></a></li>
                                <li><a href="#"><i class="typcn typcn-battery-high"></i><span>typcn typcn-battery-high</span></a></li>
                                <li><a href="#"><i class="typcn typcn-battery-low"></i><span>typcn typcn-battery-low</span></a></li>
                                <li><a href="#"><i class="typcn typcn-battery-mid"></i><span>typcn typcn-battery-mid</span></a></li>
                                <li><a href="#"><i class="typcn typcn-beaker"></i><span>typcn typcn-beaker</span></a></li>
                                <li><a href="#"><i class="typcn typcn-beer"></i><span>typcn typcn-beer</span></a></li>
                                <li><a href="#"><i class="typcn typcn-bell"></i><span>typcn typcn-bell</span></a></li>
                                <li><a href="#"><i class="typcn typcn-book"></i><span>typcn typcn-book</span></a></li>
                                <li><a href="#"><i class="typcn typcn-bookmark"></i><span>typcn typcn-bookmark</span></a></li>
                                <li><a href="#"><i class="typcn typcn-briefcase"></i><span>typcn typcn-briefcase</span></a></li>
                                <li><a href="#"><i class="typcn typcn-brush"></i><span>typcn typcn-brush</span></a></li>
                                <li><a href="#"><i class="typcn typcn-business-card"></i><span>typcn typcn-business-card</span></a></li>
                                <li><a href="#"><i class="typcn typcn-calculator"></i><span>typcn typcn-calculator</span></a></li>
                                <li><a href="#"><i class="typcn typcn-calendar-outline"></i><span>typcn typcn-calendar-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-calendar"></i><span>typcn typcn-calendar</span></a></li>
                                <li><a href="#"><i class="typcn typcn-camera-outline"></i><span>typcn typcn-camera-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-camera"></i><span>typcn typcn-camera</span></a></li>
                                <li><a href="#"><i class="typcn typcn-cancel-outline"></i><span>typcn typcn-cancel-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-cancel"></i><span>typcn typcn-cancel</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-area-outline"></i><span>typcn typcn-chart-area-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-area"></i><span>typcn typcn-chart-area</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-bar-outline"></i><span>typcn typcn-chart-bar-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-bar"></i><span>typcn typcn-chart-bar</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-line-outline"></i><span>typcn typcn-chart-line-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-line"></i><span>typcn typcn-chart-line</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-pie-outline"></i><span>typcn typcn-chart-pie-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chart-pie"></i><span>typcn typcn-chart-pie</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chevron-left-outline"></i><span>typcn typcn-chevron-left-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chevron-left"></i><span>typcn typcn-chevron-left</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chevron-right-outline"></i><span>typcn typcn-chevron-right-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-chevron-right"></i><span>typcn typcn-chevron-right</span></a></li>
                                <li><a href="#"><i class="typcn typcn-clipboard"></i><span>typcn typcn-clipboard</span></a></li>
                                <li><a href="#"><i class="typcn typcn-cloud-storage"></i><span>typcn typcn-cloud-storage</span></a></li>
                                <li><a href="#"><i class="typcn typcn-cloud-storage-outline"></i><span>typcn typcn-cloud-storage-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-code-outline"></i><span>typcn typcn-code-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-code"></i><span>typcn typcn-code</span></a></li>
                                <li><a href="#"><i class="typcn typcn-coffee"></i><span>typcn typcn-coffee</span></a></li>
                                <li><a href="#"><i class="typcn typcn-cog-outline"></i><span>typcn typcn-cog-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-cog"></i><span>typcn typcn-cog</span></a></li>
                                <li><a href="#"><i class="typcn typcn-compass"></i><span>typcn typcn-compass</span></a></li>
                                <li><a href="#"><i class="typcn typcn-contacts"></i><span>typcn typcn-contacts</span></a></li>
                                <li><a href="#"><i class="typcn typcn-credit-card"></i><span>typcn typcn-credit-card</span></a></li>
                                <li><a href="#"><i class="typcn typcn-css3"></i><span>typcn typcn-css3</span></a></li>
                                <li><a href="#"><i class="typcn typcn-database"></i><span>typcn typcn-database</span></a></li>
                                <li><a href="#"><i class="typcn typcn-delete-outline"></i><span>typcn typcn-delete-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-delete"></i><span>typcn typcn-delete</span></a></li>
                                <li><a href="#"><i class="typcn typcn-device-desktop"></i><span>typcn typcn-device-desktop</span></a></li>
                                <li><a href="#"><i class="typcn typcn-device-laptop"></i><span>typcn typcn-device-laptop</span></a></li>
                                <li><a href="#"><i class="typcn typcn-device-phone"></i><span>typcn typcn-device-phone</span></a></li>
                                <li><a href="#"><i class="typcn typcn-device-tablet"></i><span>typcn typcn-device-tablet</span></a></li>
                                <li><a href="#"><i class="typcn typcn-directions"></i><span>typcn typcn-directions</span></a></li>
                                <li><a href="#"><i class="typcn typcn-divide-outline"></i><span>typcn typcn-divide-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-divide"></i><span>typcn typcn-divide</span></a></li>
                                <li><a href="#"><i class="typcn typcn-document-add"></i><span>typcn typcn-document-add</span></a></li>
                                <li><a href="#"><i class="typcn typcn-document-delete"></i><span>typcn typcn-document-delete</span></a></li>
                                <li><a href="#"><i class="typcn typcn-document-text"></i><span>typcn typcn-document-text</span></a></li>
                                <li><a href="#"><i class="typcn typcn-document"></i><span>typcn typcn-document</span></a></li>
                                <li><a href="#"><i class="typcn typcn-download-outline"></i><span>typcn typcn-download-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-download"></i><span>typcn typcn-download</span></a></li>
                                <li><a href="#"><i class="typcn typcn-dropbox"></i><span>typcn typcn-dropbox</span></a></li>
                                <li><a href="#"><i class="typcn typcn-edit"></i><span>typcn typcn-edit</span></a></li>
                                <li><a href="#"><i class="typcn typcn-eject-outline"></i><span>typcn typcn-eject-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-eject"></i><span>typcn typcn-eject</span></a></li>
                                <li><a href="#"><i class="typcn typcn-equals-outline"></i><span>typcn typcn-equals-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-equals"></i><span>typcn typcn-equals</span></a></li>
                                <li><a href="#"><i class="typcn typcn-export-outline"></i><span>typcn typcn-export-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-export"></i><span>typcn typcn-export</span></a></li>
                                <li><a href="#"><i class="typcn typcn-eye-outline"></i><span>typcn typcn-eye-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-eye"></i><span>typcn typcn-eye</span></a></li>
                                <li><a href="#"><i class="typcn typcn-feather"></i><span>typcn typcn-feather</span></a></li>
                                <li><a href="#"><i class="typcn typcn-film"></i><span>typcn typcn-film</span></a></li>
                                <li><a href="#"><i class="typcn typcn-filter"></i><span>typcn typcn-filter</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flag-outline"></i><span>typcn typcn-flag-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flag"></i><span>typcn typcn-flag</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flash-outline"></i><span>typcn typcn-flash-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flash"></i><span>typcn typcn-flash</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flow-children"></i><span>typcn typcn-flow-children</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flow-merge"></i><span>typcn typcn-flow-merge</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flow-parallel"></i><span>typcn typcn-flow-parallel</span></a></li>
                                <li><a href="#"><i class="typcn typcn-flow-switch"></i><span>typcn typcn-flow-switch</span></a></li>
                                <li><a href="#"><i class="typcn typcn-folder-add"></i><span>typcn typcn-folder-add</span></a></li>
                                <li><a href="#"><i class="typcn typcn-folder-delete"></i><span>typcn typcn-folder-delete</span></a></li>
                                <li><a href="#"><i class="typcn typcn-folder-open"></i><span>typcn typcn-folder-open</span></a></li>
                                <li><a href="#"><i class="typcn typcn-folder"></i><span>typcn typcn-folder</span></a></li>
                                <li><a href="#"><i class="typcn typcn-gift"></i><span>typcn typcn-gift</span></a></li>
                                <li><a href="#"><i class="typcn typcn-globe-outline"></i><span>typcn typcn-globe-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-globe"></i><span>typcn typcn-globe</span></a></li>
                                <li><a href="#"><i class="typcn typcn-group-outline"></i><span>typcn typcn-group-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-group"></i><span>typcn typcn-group</span></a></li>
                                <li><a href="#"><i class="typcn typcn-headphones"></i><span>typcn typcn-headphones</span></a></li>
                                <li><a href="#"><i class="typcn typcn-heart-full-outline"></i><span>typcn typcn-heart-full-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-heart-half-outline"></i><span>typcn typcn-heart-half-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-heart-outline"></i><span>typcn typcn-heart-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-heart"></i><span>typcn typcn-heart</span></a></li>
                                <li><a href="#"><i class="typcn typcn-home-outline"></i><span>typcn typcn-home-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-home"></i><span>typcn typcn-home</span></a></li>
                                <li><a href="#"><i class="typcn typcn-html5"></i><span>typcn typcn-html5</span></a></li>
                                <li><a href="#"><i class="typcn typcn-image-outline"></i><span>typcn typcn-image-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-image"></i><span>typcn typcn-image</span></a></li>
                                <li><a href="#"><i class="typcn typcn-infinity-outline"></i><span>typcn typcn-infinity-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-infinity"></i><span>typcn typcn-infinity</span></a></li>
                                <li><a href="#"><i class="typcn typcn-info-large-outline"></i><span>typcn typcn-info-large-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-info-large"></i><span>typcn typcn-info-large</span></a></li>
                                <li><a href="#"><i class="typcn typcn-info-outline"></i><span>typcn typcn-info-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-info"></i><span>typcn typcn-info</span></a></li>
                                <li><a href="#"><i class="typcn typcn-input-checked-outline"></i><span>typcn typcn-input-checked-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-input-checked"></i><span>typcn typcn-input-checked</span></a></li>
                                <li><a href="#"><i class="typcn typcn-key-outline"></i><span>typcn typcn-key-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-key"></i><span>typcn typcn-key</span></a></li>
                                <li><a href="#"><i class="typcn typcn-keyboard"></i><span>typcn typcn-keyboard</span></a></li>
                                <li><a href="#"><i class="typcn typcn-leaf"></i><span>typcn typcn-leaf</span></a></li>
                                <li><a href="#"><i class="typcn typcn-lightbulb"></i><span>typcn typcn-lightbulb</span></a></li>
                                <li><a href="#"><i class="typcn typcn-link-outline"></i><span>typcn typcn-link-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-link"></i><span>typcn typcn-link</span></a></li>
                                <li><a href="#"><i class="typcn typcn-location-arrow-outline"></i><span>typcn typcn-location-arrow-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-location-arrow"></i><span>typcn typcn-location-arrow</span></a></li>
                                <li><a href="#"><i class="typcn typcn-location-outline"></i><span>typcn typcn-location-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-location"></i><span>typcn typcn-location</span></a></li>
                                <li><a href="#"><i class="typcn typcn-lock-closed-outline"></i><span>typcn typcn-lock-closed-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-lock-closed"></i><span>typcn typcn-lock-closed</span></a></li>
                                <li><a href="#"><i class="typcn typcn-lock-open-outline"></i><span>typcn typcn-lock-open-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-lock-open"></i><span>typcn typcn-lock-open</span></a></li>
                                <li><a href="#"><i class="typcn typcn-mail"></i><span>typcn typcn-mail</span></a></li>
                                <li><a href="#"><i class="typcn typcn-map"></i><span>typcn typcn-map</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-eject-outline"></i><span>typcn typcn-media-eject-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-eject"></i><span>typcn typcn-media-eject</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-fast-forward-outline"></i><span>typcn typcn-media-fast-forward-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-fast-forward"></i><span>typcn typcn-media-fast-forward</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-pause-outline"></i><span>typcn typcn-media-pause-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-pause"></i><span>typcn typcn-media-pause</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-play-outline"></i><span>typcn typcn-media-play-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-play-reverse-outline"></i><span>typcn typcn-media-play-reverse-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-play-reverse"></i><span>typcn typcn-media-play-reverse</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-play"></i><span>typcn typcn-media-play</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-record-outline"></i><span>typcn typcn-media-record-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-record"></i><span>typcn typcn-media-record</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-rewind-outline"></i><span>typcn typcn-media-rewind-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-rewind"></i><span>typcn typcn-media-rewind</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-stop-outline"></i><span>typcn typcn-media-stop-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-media-stop"></i><span>typcn typcn-media-stop</span></a></li>
                                <li><a href="#"><i class="typcn typcn-message-typing"></i><span>typcn typcn-message-typing</span></a></li>
                                <li><a href="#"><i class="typcn typcn-message"></i><span>typcn typcn-message</span></a></li>
                                <li><a href="#"><i class="typcn typcn-messages"></i><span>typcn typcn-messages</span></a></li>
                                <li><a href="#"><i class="typcn typcn-microphone-outline"></i><span>typcn typcn-microphone-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-microphone"></i><span>typcn typcn-microphone</span></a></li>
                                <li><a href="#"><i class="typcn typcn-minus-outline"></i><span>typcn typcn-minus-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-minus"></i><span>typcn typcn-minus</span></a></li>
                                <li><a href="#"><i class="typcn typcn-mortar-board"></i><span>typcn typcn-mortar-board</span></a></li>
                                <li><a href="#"><i class="typcn typcn-news"></i><span>typcn typcn-news</span></a></li>
                                <li><a href="#"><i class="typcn typcn-notes-outline"></i><span>typcn typcn-notes-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-notes"></i><span>typcn typcn-notes</span></a></li>
                                <li><a href="#"><i class="typcn typcn-pen"></i><span>typcn typcn-pen</span></a></li>
                                <li><a href="#"><i class="typcn typcn-pencil"></i><span>typcn typcn-pencil</span></a></li>
                                <li><a href="#"><i class="typcn typcn-phone-outline"></i><span>typcn typcn-phone-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-phone"></i><span>typcn typcn-phone</span></a></li>
                                <li><a href="#"><i class="typcn typcn-pi-outline"></i><span>typcn typcn-pi-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-pi"></i><span>typcn typcn-pi</span></a></li>
                                <li><a href="#"><i class="typcn typcn-pin-outline"></i><span>typcn typcn-pin-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-pin"></i><span>typcn typcn-pin</span></a></li>
                                <li><a href="#"><i class="typcn typcn-pipette"></i><span>typcn typcn-pipette</span></a></li>
                                <li><a href="#"><i class="typcn typcn-plane-outline"></i><span>typcn typcn-plane-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-plane"></i><span>typcn typcn-plane</span></a></li>
                                <li><a href="#"><i class="typcn typcn-plug"></i><span>typcn typcn-plug</span></a></li>
                                <li><a href="#"><i class="typcn typcn-plus-outline"></i><span>typcn typcn-plus-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-plus"></i><span>typcn typcn-plus</span></a></li>
                                <li><a href="#"><i class="typcn typcn-point-of-interest-outline"></i><span>typcn typcn-point-of-interest-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-point-of-interest"></i><span>typcn typcn-point-of-interest</span></a></li>
                                <li><a href="#"><i class="typcn typcn-power-outline"></i><span>typcn typcn-power-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-power"></i><span>typcn typcn-power</span></a></li>
                                <li><a href="#"><i class="typcn typcn-printer"></i><span>typcn typcn-printer</span></a></li>
                                <li><a href="#"><i class="typcn typcn-puzzle-outline"></i><span>typcn typcn-puzzle-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-puzzle"></i><span>typcn typcn-puzzle</span></a></li>
                                <li><a href="#"><i class="typcn typcn-radar-outline"></i><span>typcn typcn-radar-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-radar"></i><span>typcn typcn-radar</span></a></li>
                                <li><a href="#"><i class="typcn typcn-refresh-outline"></i><span>typcn typcn-refresh-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-refresh"></i><span>typcn typcn-refresh</span></a></li>
                                <li><a href="#"><i class="typcn typcn-rss-outline"></i><span>typcn typcn-rss-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-rss"></i><span>typcn typcn-rss</span></a></li>
                                <li><a href="#"><i class="typcn typcn-scissors-outline"></i><span>typcn typcn-scissors-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-scissors"></i><span>typcn typcn-scissors</span></a></li>
                                <li><a href="#"><i class="typcn typcn-shopping-bag"></i><span>typcn typcn-shopping-bag</span></a></li>
                                <li><a href="#"><i class="typcn typcn-shopping-cart"></i><span>typcn typcn-shopping-cart</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-at-circular"></i><span>typcn typcn-social-at-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-dribbble-circular"></i><span>typcn typcn-social-dribbble-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-dribbble"></i><span>typcn typcn-social-dribbble</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-facebook-circular"></i><span>typcn typcn-social-facebook-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-facebook"></i><span>typcn typcn-social-facebook</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-flickr-circular"></i><span>typcn typcn-social-flickr-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-flickr"></i><span>typcn typcn-social-flickr</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-github-circular"></i><span>typcn typcn-social-github-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-github"></i><span>typcn typcn-social-github</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-google-plus-circular"></i><span>typcn typcn-social-google-plus-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-google-plus"></i><span>typcn typcn-social-google-plus</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-instagram-circular"></i><span>typcn typcn-social-instagram-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-instagram"></i><span>typcn typcn-social-instagram</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-last-fm-circular"></i><span>typcn typcn-social-last-fm-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-last-fm"></i><span>typcn typcn-social-last-fm</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-linkedin-circular"></i><span>typcn typcn-social-linkedin-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-linkedin"></i><span>typcn typcn-social-linkedin</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-pinterest-circular"></i><span>typcn typcn-social-pinterest-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-pinterest"></i><span>typcn typcn-social-pinterest</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-skype-outline"></i><span>typcn typcn-social-skype-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-skype"></i><span>typcn typcn-social-skype</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-tumbler-circular"></i><span>typcn typcn-social-tumbler-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-tumbler"></i><span>typcn typcn-social-tumbler</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-twitter-circular"></i><span>typcn typcn-social-twitter-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-twitter"></i><span>typcn typcn-social-twitter</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-vimeo-circular"></i><span>typcn typcn-social-vimeo-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-vimeo"></i><span>typcn typcn-social-vimeo</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-youtube-circular"></i><span>typcn typcn-social-youtube-circular</span></a></li>
                                <li><a href="#"><i class="typcn typcn-social-youtube"></i><span>typcn typcn-social-youtube</span></a></li>
                                <li><a href="#"><i class="typcn typcn-sort-alphabetically-outline"></i><span>typcn typcn-sort-alphabetically-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-sort-alphabetically"></i><span>typcn typcn-sort-alphabetically</span></a></li>
                                <li><a href="#"><i class="typcn typcn-sort-numerically-outline"></i><span>typcn typcn-sort-numerically-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-sort-numerically"></i><span>typcn typcn-sort-numerically</span></a></li>
                                <li><a href="#"><i class="typcn typcn-spanner-outline"></i><span>typcn typcn-spanner-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-spanner"></i><span>typcn typcn-spanner</span></a></li>
                                <li><a href="#"><i class="typcn typcn-spiral"></i><span>typcn typcn-spiral</span></a></li>
                                <li><a href="#"><i class="typcn typcn-star-full-outline"></i><span>typcn typcn-star-full-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-star-half-outline"></i><span>typcn typcn-star-half-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-star-half"></i><span>typcn typcn-star-half</span></a></li>
                                <li><a href="#"><i class="typcn typcn-star-outline"></i><span>typcn typcn-star-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-star"></i><span>typcn typcn-star</span></a></li>
                                <li><a href="#"><i class="typcn typcn-starburst-outline"></i><span>typcn typcn-starburst-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-starburst"></i><span>typcn typcn-starburst</span></a></li>
                                <li><a href="#"><i class="typcn typcn-stopwatch"></i><span>typcn typcn-stopwatch</span></a></li>
                                <li><a href="#"><i class="typcn typcn-support"></i><span>typcn typcn-support</span></a></li>
                                <li><a href="#"><i class="typcn typcn-tabs-outline"></i><span>typcn typcn-tabs-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-tag"></i><span>typcn typcn-tag</span></a></li>
                                <li><a href="#"><i class="typcn typcn-tags"></i><span>typcn typcn-tags</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-large-outline"></i><span>typcn typcn-th-large-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-large"></i><span>typcn typcn-th-large</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-list-outline"></i><span>typcn typcn-th-list-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-list"></i><span>typcn typcn-th-list</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-menu-outline"></i><span>typcn typcn-th-menu-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-menu"></i><span>typcn typcn-th-menu</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-small-outline"></i><span>typcn typcn-th-small-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-th-small"></i><span>typcn typcn-th-small</span></a></li>
                                <li><a href="#"><i class="typcn typcn-thermometer"></i><span>typcn typcn-thermometer</span></a></li>
                                <li><a href="#"><i class="typcn typcn-thumbs-down"></i><span>typcn typcn-thumbs-down</span></a></li>
                                <li><a href="#"><i class="typcn typcn-thumbs-ok"></i><span>typcn typcn-thumbs-ok</span></a></li>
                                <li><a href="#"><i class="typcn typcn-thumbs-up"></i><span>typcn typcn-thumbs-up</span></a></li>
                                <li><a href="#"><i class="typcn typcn-tick-outline"></i><span>typcn typcn-tick-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-tick"></i><span>typcn typcn-tick</span></a></li>
                                <li><a href="#"><i class="typcn typcn-ticket"></i><span>typcn typcn-ticket</span></a></li>
                                <li><a href="#"><i class="typcn typcn-time"></i><span>typcn typcn-time</span></a></li>
                                <li><a href="#"><i class="typcn typcn-times-outline"></i><span>typcn typcn-times-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-times"></i><span>typcn typcn-times</span></a></li>
                                <li><a href="#"><i class="typcn typcn-trash"></i><span>typcn typcn-trash</span></a></li>
                                <li><a href="#"><i class="typcn typcn-tree"></i><span>typcn typcn-tree</span></a></li>
                                <li><a href="#"><i class="typcn typcn-upload-outline"></i><span>typcn typcn-upload-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-upload"></i><span>typcn typcn-upload</span></a></li>
                                <li><a href="#"><i class="typcn typcn-user-add-outline"></i><span>typcn typcn-user-add-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-user-add"></i><span>typcn typcn-user-add</span></a></li>
                                <li><a href="#"><i class="typcn typcn-user-delete-outline"></i><span>typcn typcn-user-delete-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-user-delete"></i><span>typcn typcn-user-delete</span></a></li>
                                <li><a href="#"><i class="typcn typcn-user-outline"></i><span>typcn typcn-user-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-user"></i><span>typcn typcn-user</span></a></li>
                                <li><a href="#"><i class="typcn typcn-vendor-android"></i><span>typcn typcn-vendor-android</span></a></li>
                                <li><a href="#"><i class="typcn typcn-vendor-apple"></i><span>typcn typcn-vendor-apple</span></a></li>
                                <li><a href="#"><i class="typcn typcn-vendor-microsoft"></i><span>typcn typcn-vendor-microsoft</span></a></li>
                                <li><a href="#"><i class="typcn typcn-video-outline"></i><span>typcn typcn-video-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-video"></i><span>typcn typcn-video</span></a></li>
                                <li><a href="#"><i class="typcn typcn-volume-down"></i><span>typcn typcn-volume-down</span></a></li>
                                <li><a href="#"><i class="typcn typcn-volume-mute"></i><span>typcn typcn-volume-mute</span></a></li>
                                <li><a href="#"><i class="typcn typcn-volume-up"></i><span>typcn typcn-volume-up</span></a></li>
                                <li><a href="#"><i class="typcn typcn-volume"></i><span>typcn typcn-volume</span></a></li>
                                <li><a href="#"><i class="typcn typcn-warning-outline"></i><span>typcn typcn-warning-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-warning"></i><span>typcn typcn-warning</span></a></li>
                                <li><a href="#"><i class="typcn typcn-watch"></i><span>typcn typcn-watch</span></a></li>
                                <li><a href="#"><i class="typcn typcn-waves-outline"></i><span>typcn typcn-waves-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-waves"></i><span>typcn typcn-waves</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-cloudy"></i><span>typcn typcn-weather-cloudy</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-downpour"></i><span>typcn typcn-weather-downpour</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-night"></i><span>typcn typcn-weather-night</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-partly-sunny"></i><span>typcn typcn-weather-partly-sunny</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-shower"></i><span>typcn typcn-weather-shower</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-snow"></i><span>typcn typcn-weather-snow</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-stormy"></i><span>typcn typcn-weather-stormy</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-sunny"></i><span>typcn typcn-weather-sunny</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-windy-cloudy"></i><span>typcn typcn-weather-windy-cloudy</span></a></li>
                                <li><a href="#"><i class="typcn typcn-weather-windy"></i><span>typcn typcn-weather-windy</span></a></li>
                                <li><a href="#"><i class="typcn typcn-wi-fi-outline"></i><span>typcn typcn-wi-fi-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-wi-fi"></i><span>typcn typcn-wi-fi</span></a></li>
                                <li><a href="#"><i class="typcn typcn-wine"></i><span>typcn typcn-wine</span></a></li>
                                <li><a href="#"><i class="typcn typcn-world-outline"></i><span>typcn typcn-world-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-world"></i><span>typcn typcn-world</span></a></li>
                                <li><a href="#"><i class="typcn typcn-zoom-in-outline"></i><span>typcn typcn-zoom-in-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-zoom-in"></i><span>typcn typcn-zoom-in</span></a></li>
                                <li><a href="#"><i class="typcn typcn-zoom-out-outline"></i><span>typcn typcn-zoom-out-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-zoom-out"></i><span>typcn typcn-zoom-out</span></a></li>
                                <li><a href="#"><i class="typcn typcn-zoom-outline"></i><span>typcn typcn-zoom-outline</span></a></li>
                                <li><a href="#"><i class="typcn typcn-zoom"></i><span>typcn typcn-zoom</span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!---Right Tray--->
<div class="right-sidebar px-3">
    <button class="right-side-toggle"><i class="fa fa-cog fa-spin"></i></button>
	<div class="block bg-trans" style="margin-bottom: 0">
        <div class="block-heading">
            <h5>Top Navigation</h5>
        </div>
        <ul class="list-unstyled top-nav themecolors">
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/cyan"><div class="color-div" style="background: #18BCC9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/blue"><div class="color-div" style="background: #1880c9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/green"><div class="color-div" style="background: #18c97e"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/red"><div class="color-div" style="background: #e13f4c"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/purple"><div class="color-div" style="background: #723fe1"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/orange"><div class="color-div" style="background: rgb(255,120,45)"><i class="fa fa-check my-auto"></i></div></a></li>
        </ul>
    </div>
	
    <div class="block bg-trans">
        <div class="block-heading">
            <h5>Side Navigation</h5>
        </div>
        <ul class="list-unstyled side-nav themecolors">
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/cyan"><div class="color-div" style="background: #18BCC9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/blue"><div class="color-div" style="background: #1880c9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/green"><div class="color-div" style="background: #18c97e"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/red"><div class="color-div" style="background: #e13f4c"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/purple"><div class="color-div" style="background: #723fe1"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/orange"><div class="color-div" style="background: rgb(255,120,45)"><i class="fa fa-check my-auto"></i></div></a></li>
        </ul>
    </div>
</div>

<!--Jquery-->
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<!--Bootstrap Js-->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!--Modernizr Js-->
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

<!--Morphin Search JS-->
<script type="text/javascript" src="assets/plugins/morphin-search/classie.js"></script>
<script type="text/javascript" src="assets/plugins/morphin-search/morphin-search.js"></script>
<!--Morphin Search JS-->
<script type="text/javascript" src="assets/plugins/preloader/pathLoader.js"></script>
<script type="text/javascript" src="assets/plugins/preloader/preloader-main.js"></script>

<!--Chart js-->
<script type="text/javascript" src="assets/plugins/charts/Chart.min.js"></script>

<!--Sparkline Chart Js-->
<script type="text/javascript" src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="assets/plugins/sparkline/jquery.charts-sparkline.js"></script>

<!--Custom Scroll-->
<script type="text/javascript" src="assets/plugins/customScroll/jquery.mCustomScrollbar.min.js"></script>
<!--Sortable Js-->
<script type="text/javascript" src="assets/plugins/sortable2/sortable.min.js"></script>
<!--DropZone Js-->
<script type="text/javascript" src="assets/plugins/dropzone/dropzone.js"></script>
<!--Date Range JS-->
<script type="text/javascript" src="assets/plugins/date-range/moment.min.js"></script>
<script type="text/javascript" src="assets/plugins/date-range/daterangepicker.js"></script>
<!--CK Editor JS-->
<script type="text/javascript" src="assets/plugins/ckEditor/ckeditor.js"></script>
<!--Data-Table JS-->
<script type="text/javascript" src="assets/plugins/data-tables/datatables.min.js"></script>
<!--Editable JS-->
<script type="text/javascript" src="assets/plugins/editable/editable.js"></script>
<!--Full Calendar JS-->
<script type="text/javascript" src="assets/plugins/full-calendar/fullcalendar.min.js"></script>

<!--- Main JS -->
<script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_typicons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:54 GMT -->
</html>
