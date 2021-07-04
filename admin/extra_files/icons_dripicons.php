<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_dripicons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
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
                        <a href="icons_dripicons.html" class="active">
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
                        <a href="icons_typicons.html">
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
                            <li class="breadcrumb-item active">Dripicons</li>
                        </ol>
                    </div>
                    <div class="col-3 col-md-6 col-lg-4">
                        <a href="javascript:void(0);" class="btn btn-primary btn-round pull-right d-none d-md-block">Buy Theme Now</a>
                    </div>
                </div>
            </div>
        </div>        <div class="content sm-gutter">
        <div class="container-fluid padding-25 sm-padding-10">
            <div class="row">
                <div class="col-12">
                    <div class="block">
                        <div class="block-heading">
                            <h5>Dripicons Icons</h5>
                            <p class="mt-2">Powered by Dripicons Icons set, for more info <a href="https://github.com/amitjakhu/dripicons" target="_blank" class="btn-link">click here</a></p>
                        </div>

                        <ul class="demo-icons-list"><li><a href="#"><i class="dripicons-alarm"></i><span>dripicons-alarm</span></a></li><li><a href="#"><i class="dripicons-align-center"></i><span>dripicons-align-center</span></a></li><li><a href="#"><i class="dripicons-align-justify"></i><span>dripicons-align-justify</span></a></li><li><a href="#"><i class="dripicons-align-left"></i><span>dripicons-align-left</span></a></li><li><a href="#"><i class="dripicons-align-right"></i><span>dripicons-align-right</span></a></li><li><a href="#"><i class="dripicons-anchor"></i><span>dripicons-anchor</span></a></li><li><a href="#"><i class="dripicons-archive"></i><span>dripicons-archive</span></a></li><li><a href="#"><i class="dripicons-arrow-down"></i><span>dripicons-arrow-down</span></a></li><li><a href="#"><i class="dripicons-arrow-left"></i><span>dripicons-arrow-left</span></a></li><li><a href="#"><i class="dripicons-arrow-right"></i><span>dripicons-arrow-right</span></a></li><li><a href="#"><i class="dripicons-arrow-thin-down"></i><span>dripicons-arrow-thin-down</span></a></li><li><a href="#"><i class="dripicons-arrow-thin-left"></i><span>dripicons-arrow-thin-left</span></a></li><li><a href="#"><i class="dripicons-arrow-thin-right"></i><span>dripicons-arrow-thin-right</span></a></li><li><a href="#"><i class="dripicons-arrow-thin-up"></i><span>dripicons-arrow-thin-up</span></a></li><li><a href="#"><i class="dripicons-arrow-up"></i><span>dripicons-arrow-up</span></a></li><li><a href="#"><i class="dripicons-article"></i><span>dripicons-article</span></a></li><li><a href="#"><i class="dripicons-backspace"></i><span>dripicons-backspace</span></a></li><li><a href="#"><i class="dripicons-basket"></i><span>dripicons-basket</span></a></li><li><a href="#"><i class="dripicons-basketball"></i><span>dripicons-basketball</span></a></li><li><a href="#"><i class="dripicons-battery-empty"></i><span>dripicons-battery-empty</span></a></li><li><a href="#"><i class="dripicons-battery-full"></i><span>dripicons-battery-full</span></a></li><li><a href="#"><i class="dripicons-battery-low"></i><span>dripicons-battery-low</span></a></li><li><a href="#"><i class="dripicons-battery-medium"></i><span>dripicons-battery-medium</span></a></li><li><a href="#"><i class="dripicons-bell"></i><span>dripicons-bell</span></a></li><li><a href="#"><i class="dripicons-blog"></i><span>dripicons-blog</span></a></li><li><a href="#"><i class="dripicons-bluetooth"></i><span>dripicons-bluetooth</span></a></li><li><a href="#"><i class="dripicons-bold"></i><span>dripicons-bold</span></a></li><li><a href="#"><i class="dripicons-bookmark"></i><span>dripicons-bookmark</span></a></li><li><a href="#"><i class="dripicons-bookmarks"></i><span>dripicons-bookmarks</span></a></li><li><a href="#"><i class="dripicons-box"></i><span>dripicons-box</span></a></li><li><a href="#"><i class="dripicons-briefcase"></i><span>dripicons-briefcase</span></a></li><li><a href="#"><i class="dripicons-brightness-low"></i><span>dripicons-brightness-low</span></a></li><li><a href="#"><i class="dripicons-brightness-max"></i><span>dripicons-brightness-max</span></a></li><li><a href="#"><i class="dripicons-brightness-medium"></i><span>dripicons-brightness-medium</span></a></li><li><a href="#"><i class="dripicons-broadcast"></i><span>dripicons-broadcast</span></a></li><li><a href="#"><i class="dripicons-browser"></i><span>dripicons-browser</span></a></li><li><a href="#"><i class="dripicons-browser-upload"></i><span>dripicons-browser-upload</span></a></li><li><a href="#"><i class="dripicons-brush"></i><span>dripicons-brush</span></a></li><li><a href="#"><i class="dripicons-calendar"></i><span>dripicons-calendar</span></a></li><li><a href="#"><i class="dripicons-camcorder"></i><span>dripicons-camcorder</span></a></li><li><a href="#"><i class="dripicons-camera"></i><span>dripicons-camera</span></a></li><li><a href="#"><i class="dripicons-card"></i><span>dripicons-card</span></a></li><li><a href="#"><i class="dripicons-cart"></i><span>dripicons-cart</span></a></li><li><a href="#"><i class="dripicons-checklist"></i><span>dripicons-checklist</span></a></li><li><a href="#"><i class="dripicons-checkmark"></i><span>dripicons-checkmark</span></a></li><li><a href="#"><i class="dripicons-chevron-down"></i><span>dripicons-chevron-down</span></a></li><li><a href="#"><i class="dripicons-chevron-left"></i><span>dripicons-chevron-left</span></a></li><li><a href="#"><i class="dripicons-chevron-right"></i><span>dripicons-chevron-right</span></a></li><li><a href="#"><i class="dripicons-chevron-up"></i><span>dripicons-chevron-up</span></a></li><li><a href="#"><i class="dripicons-clipboard"></i><span>dripicons-clipboard</span></a></li><li><a href="#"><i class="dripicons-clock"></i><span>dripicons-clock</span></a></li><li><a href="#"><i class="dripicons-clockwise"></i><span>dripicons-clockwise</span></a></li><li><a href="#"><i class="dripicons-cloud"></i><span>dripicons-cloud</span></a></li><li><a href="#"><i class="dripicons-cloud-download"></i><span>dripicons-cloud-download</span></a></li><li><a href="#"><i class="dripicons-cloud-upload"></i><span>dripicons-cloud-upload</span></a></li><li><a href="#"><i class="dripicons-code"></i><span>dripicons-code</span></a></li><li><a href="#"><i class="dripicons-contract"></i><span>dripicons-contract</span></a></li><li><a href="#"><i class="dripicons-contract-2"></i><span>dripicons-contract-2</span></a></li><li><a href="#"><i class="dripicons-conversation"></i><span>dripicons-conversation</span></a></li><li><a href="#"><i class="dripicons-copy"></i><span>dripicons-copy</span></a></li><li><a href="#"><i class="dripicons-crop"></i><span>dripicons-crop</span></a></li><li><a href="#"><i class="dripicons-cross"></i><span>dripicons-cross</span></a></li><li><a href="#"><i class="dripicons-crosshair"></i><span>dripicons-crosshair</span></a></li><li><a href="#"><i class="dripicons-cutlery"></i><span>dripicons-cutlery</span></a></li><li><a href="#"><i class="dripicons-device-desktop"></i><span>dripicons-device-desktop</span></a></li><li><a href="#"><i class="dripicons-device-mobile"></i><span>dripicons-device-mobile</span></a></li><li><a href="#"><i class="dripicons-device-tablet"></i><span>dripicons-device-tablet</span></a></li><li><a href="#"><i class="dripicons-direction"></i><span>dripicons-direction</span></a></li><li><a href="#"><i class="dripicons-disc"></i><span>dripicons-disc</span></a></li><li><a href="#"><i class="dripicons-document"></i><span>dripicons-document</span></a></li><li><a href="#"><i class="dripicons-document-delete"></i><span>dripicons-document-delete</span></a></li><li><a href="#"><i class="dripicons-document-edit"></i><span>dripicons-document-edit</span></a></li><li><a href="#"><i class="dripicons-document-new"></i><span>dripicons-document-new</span></a></li><li><a href="#"><i class="dripicons-document-remove"></i><span>dripicons-document-remove</span></a></li><li><a href="#"><i class="dripicons-dot"></i><span>dripicons-dot</span></a></li><li><a href="#"><i class="dripicons-dots-2"></i><span>dripicons-dots-2</span></a></li><li><a href="#"><i class="dripicons-dots-3"></i><span>dripicons-dots-3</span></a></li><li><a href="#"><i class="dripicons-download"></i><span>dripicons-download</span></a></li><li><a href="#"><i class="dripicons-duplicate"></i><span>dripicons-duplicate</span></a></li><li><a href="#"><i class="dripicons-enter"></i><span>dripicons-enter</span></a></li><li><a href="#"><i class="dripicons-exit"></i><span>dripicons-exit</span></a></li><li><a href="#"><i class="dripicons-expand"></i><span>dripicons-expand</span></a></li><li><a href="#"><i class="dripicons-expand-2"></i><span>dripicons-expand-2</span></a></li><li><a href="#"><i class="dripicons-experiment"></i><span>dripicons-experiment</span></a></li><li><a href="#"><i class="dripicons-export"></i><span>dripicons-export</span></a></li><li><a href="#"><i class="dripicons-feed"></i><span>dripicons-feed</span></a></li><li><a href="#"><i class="dripicons-flag"></i><span>dripicons-flag</span></a></li><li><a href="#"><i class="dripicons-flashlight"></i><span>dripicons-flashlight</span></a></li><li><a href="#"><i class="dripicons-folder"></i><span>dripicons-folder</span></a></li><li><a href="#"><i class="dripicons-folder-open"></i><span>dripicons-folder-open</span></a></li><li><a href="#"><i class="dripicons-forward"></i><span>dripicons-forward</span></a></li><li><a href="#"><i class="dripicons-gaming"></i><span>dripicons-gaming</span></a></li><li><a href="#"><i class="dripicons-gear"></i><span>dripicons-gear</span></a></li><li><a href="#"><i class="dripicons-graduation"></i><span>dripicons-graduation</span></a></li><li><a href="#"><i class="dripicons-graph-bar"></i><span>dripicons-graph-bar</span></a></li><li><a href="#"><i class="dripicons-graph-line"></i><span>dripicons-graph-line</span></a></li><li><a href="#"><i class="dripicons-graph-pie"></i><span>dripicons-graph-pie</span></a></li><li><a href="#"><i class="dripicons-headset"></i><span>dripicons-headset</span></a></li><li><a href="#"><i class="dripicons-heart"></i><span>dripicons-heart</span></a></li><li><a href="#"><i class="dripicons-help"></i><span>dripicons-help</span></a></li><li><a href="#"><i class="dripicons-home"></i><span>dripicons-home</span></a></li><li><a href="#"><i class="dripicons-hourglass"></i><span>dripicons-hourglass</span></a></li><li><a href="#"><i class="dripicons-inbox"></i><span>dripicons-inbox</span></a></li><li><a href="#"><i class="dripicons-information"></i><span>dripicons-information</span></a></li><li><a href="#"><i class="dripicons-italic"></i><span>dripicons-italic</span></a></li><li><a href="#"><i class="dripicons-jewel"></i><span>dripicons-jewel</span></a></li><li><a href="#"><i class="dripicons-lifting"></i><span>dripicons-lifting</span></a></li><li><a href="#"><i class="dripicons-lightbulb"></i><span>dripicons-lightbulb</span></a></li><li><a href="#"><i class="dripicons-link"></i><span>dripicons-link</span></a></li><li><a href="#"><i class="dripicons-link-broken"></i><span>dripicons-link-broken</span></a></li><li><a href="#"><i class="dripicons-list"></i><span>dripicons-list</span></a></li><li><a href="#"><i class="dripicons-loading"></i><span>dripicons-loading</span></a></li><li><a href="#"><i class="dripicons-location"></i><span>dripicons-location</span></a></li><li><a href="#"><i class="dripicons-lock"></i><span>dripicons-lock</span></a></li><li><a href="#"><i class="dripicons-lock-open"></i><span>dripicons-lock-open</span></a></li><li><a href="#"><i class="dripicons-mail"></i><span>dripicons-mail</span></a></li><li><a href="#"><i class="dripicons-map"></i><span>dripicons-map</span></a></li><li><a href="#"><i class="dripicons-media-loop"></i><span>dripicons-media-loop</span></a></li><li><a href="#"><i class="dripicons-media-next"></i><span>dripicons-media-next</span></a></li><li><a href="#"><i class="dripicons-media-pause"></i><span>dripicons-media-pause</span></a></li><li><a href="#"><i class="dripicons-media-play"></i><span>dripicons-media-play</span></a></li><li><a href="#"><i class="dripicons-media-previous"></i><span>dripicons-media-previous</span></a></li><li><a href="#"><i class="dripicons-media-record"></i><span>dripicons-media-record</span></a></li><li><a href="#"><i class="dripicons-media-shuffle"></i><span>dripicons-media-shuffle</span></a></li><li><a href="#"><i class="dripicons-media-stop"></i><span>dripicons-media-stop</span></a></li><li><a href="#"><i class="dripicons-medical"></i><span>dripicons-medical</span></a></li><li><a href="#"><i class="dripicons-menu"></i><span>dripicons-menu</span></a></li><li><a href="#"><i class="dripicons-message"></i><span>dripicons-message</span></a></li><li><a href="#"><i class="dripicons-meter"></i><span>dripicons-meter</span></a></li><li><a href="#"><i class="dripicons-microphone"></i><span>dripicons-microphone</span></a></li><li><a href="#"><i class="dripicons-minus"></i><span>dripicons-minus</span></a></li><li><a href="#"><i class="dripicons-monitor"></i><span>dripicons-monitor</span></a></li><li><a href="#"><i class="dripicons-move"></i><span>dripicons-move</span></a></li><li><a href="#"><i class="dripicons-music"></i><span>dripicons-music</span></a></li><li><a href="#"><i class="dripicons-network-1"></i><span>dripicons-network-1</span></a></li><li><a href="#"><i class="dripicons-network-2"></i><span>dripicons-network-2</span></a></li><li><a href="#"><i class="dripicons-network-3"></i><span>dripicons-network-3</span></a></li><li><a href="#"><i class="dripicons-network-4"></i><span>dripicons-network-4</span></a></li><li><a href="#"><i class="dripicons-network-5"></i><span>dripicons-network-5</span></a></li><li><a href="#"><i class="dripicons-pamphlet"></i><span>dripicons-pamphlet</span></a></li><li><a href="#"><i class="dripicons-paperclip"></i><span>dripicons-paperclip</span></a></li><li><a href="#"><i class="dripicons-pencil"></i><span>dripicons-pencil</span></a></li><li><a href="#"><i class="dripicons-phone"></i><span>dripicons-phone</span></a></li><li><a href="#"><i class="dripicons-photo"></i><span>dripicons-photo</span></a></li><li><a href="#"><i class="dripicons-photo-group"></i><span>dripicons-photo-group</span></a></li><li><a href="#"><i class="dripicons-pill"></i><span>dripicons-pill</span></a></li><li><a href="#"><i class="dripicons-pin"></i><span>dripicons-pin</span></a></li><li><a href="#"><i class="dripicons-plus"></i><span>dripicons-plus</span></a></li><li><a href="#"><i class="dripicons-power"></i><span>dripicons-power</span></a></li><li><a href="#"><i class="dripicons-preview"></i><span>dripicons-preview</span></a></li><li><a href="#"><i class="dripicons-print"></i><span>dripicons-print</span></a></li><li><a href="#"><i class="dripicons-pulse"></i><span>dripicons-pulse</span></a></li><li><a href="#"><i class="dripicons-question"></i><span>dripicons-question</span></a></li><li><a href="#"><i class="dripicons-reply"></i><span>dripicons-reply</span></a></li><li><a href="#"><i class="dripicons-reply-all"></i><span>dripicons-reply-all</span></a></li><li><a href="#"><i class="dripicons-return"></i><span>dripicons-return</span></a></li><li><a href="#"><i class="dripicons-retweet"></i><span>dripicons-retweet</span></a></li><li><a href="#"><i class="dripicons-rocket"></i><span>dripicons-rocket</span></a></li><li><a href="#"><i class="dripicons-scale"></i><span>dripicons-scale</span></a></li><li><a href="#"><i class="dripicons-search"></i><span>dripicons-search</span></a></li><li><a href="#"><i class="dripicons-shopping-bag"></i><span>dripicons-shopping-bag</span></a></li><li><a href="#"><i class="dripicons-skip"></i><span>dripicons-skip</span></a></li><li><a href="#"><i class="dripicons-stack"></i><span>dripicons-stack</span></a></li><li><a href="#"><i class="dripicons-star"></i><span>dripicons-star</span></a></li><li><a href="#"><i class="dripicons-stopwatch"></i><span>dripicons-stopwatch</span></a></li><li><a href="#"><i class="dripicons-store"></i><span>dripicons-store</span></a></li><li><a href="#"><i class="dripicons-suitcase"></i><span>dripicons-suitcase</span></a></li><li><a href="#"><i class="dripicons-swap"></i><span>dripicons-swap</span></a></li><li><a href="#"><i class="dripicons-tag"></i><span>dripicons-tag</span></a></li><li><a href="#"><i class="dripicons-tag-delete"></i><span>dripicons-tag-delete</span></a></li><li><a href="#"><i class="dripicons-tags"></i><span>dripicons-tags</span></a></li><li><a href="#"><i class="dripicons-thumbs-down"></i><span>dripicons-thumbs-down</span></a></li><li><a href="#"><i class="dripicons-thumbs-up"></i><span>dripicons-thumbs-up</span></a></li><li><a href="#"><i class="dripicons-ticket"></i><span>dripicons-ticket</span></a></li><li><a href="#"><i class="dripicons-time-reverse"></i><span>dripicons-time-reverse</span></a></li><li><a href="#"><i class="dripicons-to-do"></i><span>dripicons-to-do</span></a></li><li><a href="#"><i class="dripicons-toggles"></i><span>dripicons-toggles</span></a></li><li><a href="#"><i class="dripicons-trash"></i><span>dripicons-trash</span></a></li><li><a href="#"><i class="dripicons-trophy"></i><span>dripicons-trophy</span></a></li><li><a href="#"><i class="dripicons-upload"></i><span>dripicons-upload</span></a></li><li><a href="#"><i class="dripicons-user"></i><span>dripicons-user</span></a></li><li><a href="#"><i class="dripicons-user-group"></i><span>dripicons-user-group</span></a></li><li><a href="#"><i class="dripicons-user-id"></i><span>dripicons-user-id</span></a></li><li><a href="#"><i class="dripicons-vibrate"></i><span>dripicons-vibrate</span></a></li><li><a href="#"><i class="dripicons-view-apps"></i><span>dripicons-view-apps</span></a></li><li><a href="#"><i class="dripicons-view-list"></i><span>dripicons-view-list</span></a></li><li><a href="#"><i class="dripicons-view-list-large"></i><span>dripicons-view-list-large</span></a></li><li><a href="#"><i class="dripicons-view-thumb"></i><span>dripicons-view-thumb</span></a></li><li><a href="#"><i class="dripicons-volume-full"></i><span>dripicons-volume-full</span></a></li><li><a href="#"><i class="dripicons-volume-low"></i><span>dripicons-volume-low</span></a></li><li><a href="#"><i class="dripicons-volume-medium"></i><span>dripicons-volume-medium</span></a></li><li><a href="#"><i class="dripicons-volume-off"></i><span>dripicons-volume-off</span></a></li><li><a href="#"><i class="dripicons-wallet"></i><span>dripicons-wallet</span></a></li><li><a href="#"><i class="dripicons-warning"></i><span>dripicons-warning</span></a></li><li><a href="#"><i class="dripicons-web"></i><span>dripicons-web</span></a></li><li><a href="#"><i class="dripicons-weight"></i><span>dripicons-weight</span></a></li><li><a href="#"><i class="dripicons-wifi"></i><span>dripicons-wifi</span></a></li><li><a href="#"><i class="dripicons-wrong"></i><span>dripicons-wrong</span></a></li><li><a href="#"><i class="dripicons-zoom-in"></i><span>dripicons-zoom-in</span></a></li><li><a href="#"><i class="dripicons-zoom-out"></i><span>dripicons-zoom-out</span></a></li></ul>
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_dripicons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
</html>
