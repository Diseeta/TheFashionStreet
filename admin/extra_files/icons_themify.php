<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_themify.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
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
    <link rel="stylesheet" href="assets/icons/themify/themify-icons.css">

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
                        <a href="icons_themify.html" class="active">
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
                            <li class="breadcrumb-item active">Themify</li>
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
                                <h5>Themify Icons</h5>
                                <p class="mt-2">Powered by Themify Icons set, for more info <a href="https://themify.me/themify-icons" target="_blank" class="btn-link">click here</a></p>
                            </div>

                            <ul class="demo-icons-list">
                                <li><a href="#"><i class="ti-wand"></i><span>ti-wand</span></a></li>
                                <li><a href="#"><i class="ti-volume"></i><span>ti-volume</span></a></li>
                                <li><a href="#"><i class="ti-user"></i><span>ti-user</span></a></li>
                                <li><a href="#"><i class="ti-unlock"></i><span>ti-unlock</span></a></li>
                                <li><a href="#"><i class="ti-unlink"></i><span>ti-unlink</span></a></li>
                                <li><a href="#"><i class="ti-trash"></i><span>ti-trash</span></a></li>
                                <li><a href="#"><i class="ti-thought"></i><span>ti-thought</span></a></li>
                                <li><a href="#"><i class="ti-target"></i><span>ti-target</span></a></li>
                                <li><a href="#"><i class="ti-tag"></i><span>ti-tag</span></a></li>
                                <li><a href="#"><i class="ti-tablet"></i><span>ti-tablet</span></a></li>
                                <li><a href="#"><i class="ti-star"></i><span>ti-star</span></a></li>
                                <li><a href="#"><i class="ti-spray"></i><span>ti-spray</span></a></li>
                                <li><a href="#"><i class="ti-signal"></i><span>ti-signal</span></a></li>
                                <li><a href="#"><i class="ti-shopping-cart"></i><span>ti-shopping-cart</span></a></li>
                                <li><a href="#"><i class="ti-shopping-cart-full"></i><span>ti-shopping-cart-full</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i><span>ti-settings</span></a></li>
                                <li><a href="#"><i class="ti-search"></i><span>ti-search</span></a></li>
                                <li><a href="#"><i class="ti-zoom-in"></i><span>ti-zoom-in</span></a></li>
                                <li><a href="#"><i class="ti-zoom-out"></i><span>ti-zoom-out</span></a></li>
                                <li><a href="#"><i class="ti-cut"></i><span>ti-cut</span></a></li>
                                <li><a href="#"><i class="ti-ruler"></i><span>ti-ruler</span></a></li>
                                <li><a href="#"><i class="ti-ruler-pencil"></i><span>ti-ruler-pencil</span></a></li>
                                <li><a href="#"><i class="ti-ruler-alt"></i><span>ti-ruler-alt</span></a></li>
                                <li><a href="#"><i class="ti-bookmark"></i><span>ti-bookmark</span></a></li>
                                <li><a href="#"><i class="ti-bookmark-alt"></i><span>ti-bookmark-alt</span></a></li>
                                <li><a href="#"><i class="ti-reload"></i><span>ti-reload</span></a></li>
                                <li><a href="#"><i class="ti-plus"></i><span>ti-plus</span></a></li>
                                <li><a href="#"><i class="ti-pin"></i><span>ti-pin</span></a></li>
                                <li><a href="#"><i class="ti-pencil"></i><span>ti-pencil</span></a></li>
                                <li><a href="#"><i class="ti-pencil-alt"></i><span>ti-pencil-alt</span></a></li>
                                <li><a href="#"><i class="ti-paint-roller"></i><span>ti-paint-roller</span></a></li>
                                <li><a href="#"><i class="ti-paint-bucket"></i><span>ti-paint-bucket</span></a></li>
                                <li><a href="#"><i class="ti-na"></i><span>ti-na</span></a></li>
                                <li><a href="#"><i class="ti-mobile"></i><span>ti-mobile</span></a></li>
                                <li><a href="#"><i class="ti-minus"></i><span>ti-minus</span></a></li>
                                <li><a href="#"><i class="ti-medall"></i><span>ti-medall</span></a></li>
                                <li><a href="#"><i class="ti-medall-alt"></i><span>ti-medall-alt</span></a></li>
                                <li><a href="#"><i class="ti-marker"></i><span>ti-marker</span></a></li>
                                <li><a href="#"><i class="ti-marker-alt"></i><span>ti-marker-alt</span></a></li>
                                <li><a href="#"><i class="ti-arrow-up"></i><span>ti-arrow-up</span></a></li>
                                <li><a href="#"><i class="ti-arrow-right"></i><span>ti-arrow-right</span></a></li>
                                <li><a href="#"><i class="ti-arrow-left"></i><span>ti-arrow-left</span></a></li>
                                <li><a href="#"><i class="ti-arrow-down"></i><span>ti-arrow-down</span></a></li>
                                <li><a href="#"><i class="ti-lock"></i><span>ti-lock</span></a></li>
                                <li><a href="#"><i class="ti-location-arrow"></i><span>ti-location-arrow</span></a></li>
                                <li><a href="#"><i class="ti-link"></i><span>ti-link</span></a></li>
                                <li><a href="#"><i class="ti-layout"></i><span>ti-layout</span></a></li>
                                <li><a href="#"><i class="ti-layers"></i><span>ti-layers</span></a></li>
                                <li><a href="#"><i class="ti-layers-alt"></i><span>ti-layers-alt</span></a></li>
                                <li><a href="#"><i class="ti-key"></i><span>ti-key</span></a></li>
                                <li><a href="#"><i class="ti-import"></i><span>ti-import</span></a></li>
                                <li><a href="#"><i class="ti-image"></i><span>ti-image</span></a></li>
                                <li><a href="#"><i class="ti-heart"></i><span>ti-heart</span></a></li>
                                <li><a href="#"><i class="ti-heart-broken"></i><span>ti-heart-broken</span></a></li>
                                <li><a href="#"><i class="ti-hand-stop"></i><span>ti-hand-stop</span></a></li>
                                <li><a href="#"><i class="ti-hand-open"></i><span>ti-hand-open</span></a></li>
                                <li><a href="#"><i class="ti-hand-drag"></i><span>ti-hand-drag</span></a></li>
                                <li><a href="#"><i class="ti-folder"></i><span>ti-folder</span></a></li>
                                <li><a href="#"><i class="ti-flag"></i><span>ti-flag</span></a></li>
                                <li><a href="#"><i class="ti-flag-alt"></i><span>ti-flag-alt</span></a></li>
                                <li><a href="#"><i class="ti-flag-alt-2"></i><span>ti-flag-alt-2</span></a></li>
                                <li><a href="#"><i class="ti-eye"></i><span>ti-eye</span></a></li>
                                <li><a href="#"><i class="ti-export"></i><span>ti-export</span></a></li>
                                <li><a href="#"><i class="ti-exchange-vertical"></i><span>ti-exchange-vertical</span></a></li>
                                <li><a href="#"><i class="ti-desktop"></i><span>ti-desktop</span></a></li>
                                <li><a href="#"><i class="ti-cup"></i><span>ti-cup</span></a></li>
                                <li><a href="#"><i class="ti-crown"></i><span>ti-crown</span></a></li>
                                <li><a href="#"><i class="ti-comments"></i><span>ti-comments</span></a></li>
                                <li><a href="#"><i class="ti-comment"></i><span>ti-comment</span></a></li>
                                <li><a href="#"><i class="ti-comment-alt"></i><span>ti-comment-alt</span></a></li>
                                <li><a href="#"><i class="ti-close"></i><span>ti-close</span></a></li>
                                <li><a href="#"><i class="ti-clip"></i><span>ti-clip</span></a></li>
                                <li><a href="#"><i class="ti-angle-up"></i><span>ti-angle-up</span></a></li>
                                <li><a href="#"><i class="ti-angle-right"></i><span>ti-angle-right</span></a></li>
                                <li><a href="#"><i class="ti-angle-left"></i><span>ti-angle-left</span></a></li>
                                <li><a href="#"><i class="ti-angle-down"></i><span>ti-angle-down</span></a></li>
                                <li><a href="#"><i class="ti-check"></i><span>ti-check</span></a></li>
                                <li><a href="#"><i class="ti-check-box"></i><span>ti-check-box</span></a></li>
                                <li><a href="#"><i class="ti-camera"></i><span>ti-camera</span></a></li>
                                <li><a href="#"><i class="ti-announcement"></i><span>ti-announcement</span></a></li>
                                <li><a href="#"><i class="ti-brush"></i><span>ti-brush</span></a></li>
                                <li><a href="#"><i class="ti-briefcase"></i><span>ti-briefcase</span></a></li>
                                <li><a href="#"><i class="ti-bolt"></i><span>ti-bolt</span></a></li>
                                <li><a href="#"><i class="ti-bolt-alt"></i><span>ti-bolt-alt</span></a></li>
                                <li><a href="#"><i class="ti-blackboard"></i><span>ti-blackboard</span></a></li>
                                <li><a href="#"><i class="ti-bag"></i><span>ti-bag</span></a></li>
                                <li><a href="#"><i class="ti-move"></i><span>ti-move</span></a></li>
                                <li><a href="#"><i class="ti-arrows-vertical"></i><span>ti-arrows-vertical</span></a></li>
                                <li><a href="#"><i class="ti-arrows-horizontal"></i><span>ti-arrows-horizontal</span></a></li>
                                <li><a href="#"><i class="ti-fullscreen"></i><span>ti-fullscreen</span></a></li>
                                <li><a href="#"><i class="ti-arrow-top-right"></i><span>ti-arrow-top-right</span></a></li>
                                <li><a href="#"><i class="ti-arrow-top-left"></i><span>ti-arrow-top-left</span></a></li>
                                <li><a href="#"><i class="ti-arrow-circle-up"></i><span>ti-arrow-circle-up</span></a></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i><span>ti-arrow-circle-right</span></a></li>
                                <li><a href="#"><i class="ti-arrow-circle-left"></i><span>ti-arrow-circle-left</span></a></li>
                                <li><a href="#"><i class="ti-arrow-circle-down"></i><span>ti-arrow-circle-down</span></a></li>
                                <li><a href="#"><i class="ti-angle-double-up"></i><span>ti-angle-double-up</span></a></li>
                                <li><a href="#"><i class="ti-angle-double-right"></i><span>ti-angle-double-right</span></a></li>
                                <li><a href="#"><i class="ti-angle-double-left"></i><span>ti-angle-double-left</span></a></li>
                                <li><a href="#"><i class="ti-angle-double-down"></i><span>ti-angle-double-down</span></a></li>
                                <li><a href="#"><i class="ti-zip"></i><span>ti-zip</span></a></li>
                                <li><a href="#"><i class="ti-world"></i><span>ti-world</span></a></li>
                                <li><a href="#"><i class="ti-wheelchair"></i><span>ti-wheelchair</span></a></li>
                                <li><a href="#"><i class="ti-view-list"></i><span>ti-view-list</span></a></li>
                                <li><a href="#"><i class="ti-view-list-alt"></i><span>ti-view-list-alt</span></a></li>
                                <li><a href="#"><i class="ti-view-grid"></i><span>ti-view-grid</span></a></li>
                                <li><a href="#"><i class="ti-uppercase"></i><span>ti-uppercase</span></a></li>
                                <li><a href="#"><i class="ti-upload"></i><span>ti-upload</span></a></li>
                                <li><a href="#"><i class="ti-underline"></i><span>ti-underline</span></a></li>
                                <li><a href="#"><i class="ti-truck"></i><span>ti-truck</span></a></li>
                                <li><a href="#"><i class="ti-timer"></i><span>ti-timer</span></a></li>
                                <li><a href="#"><i class="ti-ticket"></i><span>ti-ticket</span></a></li>
                                <li><a href="#"><i class="ti-thumb-up"></i><span>ti-thumb-up</span></a></li>
                                <li><a href="#"><i class="ti-thumb-down"></i><span>ti-thumb-down</span></a></li>
                                <li><a href="#"><i class="ti-text"></i><span>ti-text</span></a></li>
                                <li><a href="#"><i class="ti-stats-up"></i><span>ti-stats-up</span></a></li>
                                <li><a href="#"><i class="ti-stats-down"></i><span>ti-stats-down</span></a></li>
                                <li><a href="#"><i class="ti-split-v"></i><span>ti-split-v</span></a></li>
                                <li><a href="#"><i class="ti-split-h"></i><span>ti-split-h</span></a></li>
                                <li><a href="#"><i class="ti-smallcap"></i><span>ti-smallcap</span></a></li>
                                <li><a href="#"><i class="ti-shine"></i><span>ti-shine</span></a></li>
                                <li><a href="#"><i class="ti-shift-right"></i><span>ti-shift-right</span></a></li>
                                <li><a href="#"><i class="ti-shift-left"></i><span>ti-shift-left</span></a></li>
                                <li><a href="#"><i class="ti-shield"></i><span>ti-shield</span></a></li>
                                <li><a href="#"><i class="ti-notepad"></i><span>ti-notepad</span></a></li>
                                <li><a href="#"><i class="ti-server"></i><span>ti-server</span></a></li>
                                <li><a href="#"><i class="ti-quote-right"></i><span>ti-quote-right</span></a></li>
                                <li><a href="#"><i class="ti-quote-left"></i><span>ti-quote-left</span></a></li>
                                <li><a href="#"><i class="ti-pulse"></i><span>ti-pulse</span></a></li>
                                <li><a href="#"><i class="ti-printer"></i><span>ti-printer</span></a></li>
                                <li><a href="#"><i class="ti-power-off"></i><span>ti-power-off</span></a></li>
                                <li><a href="#"><i class="ti-plug"></i><span>ti-plug</span></a></li>
                                <li><a href="#"><i class="ti-pie-chart"></i><span>ti-pie-chart</span></a></li>
                                <li><a href="#"><i class="ti-paragraph"></i><span>ti-paragraph</span></a></li>
                                <li><a href="#"><i class="ti-panel"></i><span>ti-panel</span></a></li>
                                <li><a href="#"><i class="ti-package"></i><span>ti-package</span></a></li>
                                <li><a href="#"><i class="ti-music"></i><span>ti-music</span></a></li>
                                <li><a href="#"><i class="ti-music-alt"></i><span>ti-music-alt</span></a></li>
                                <li><a href="#"><i class="ti-mouse"></i><span>ti-mouse</span></a></li>
                                <li><a href="#"><i class="ti-mouse-alt"></i><span>ti-mouse-alt</span></a></li>
                                <li><a href="#"><i class="ti-money"></i><span>ti-money</span></a></li>
                                <li><a href="#"><i class="ti-microphone"></i><span>ti-microphone</span></a></li>
                                <li><a href="#"><i class="ti-menu"></i><span>ti-menu</span></a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i><span>ti-menu-alt</span></a></li>
                                <li><a href="#"><i class="ti-map"></i><span>ti-map</span></a></li>
                                <li><a href="#"><i class="ti-map-alt"></i><span>ti-map-alt</span></a></li>
                                <li><a href="#"><i class="ti-loop"></i><span>ti-loop</span></a></li>
                                <li><a href="#"><i class="ti-location-pin"></i><span>ti-location-pin</span></a></li>
                                <li><a href="#"><i class="ti-list"></i><span>ti-list</span></a></li>
                                <li><a href="#"><i class="ti-light-bulb"></i><span>ti-light-bulb</span></a></li>
                                <li><a href="#"><i class="ti-Italic"></i><span>ti-Italic</span></a></li>
                                <li><a href="#"><i class="ti-info"></i><span>ti-info</span></a></li>
                                <li><a href="#"><i class="ti-infinite"></i><span>ti-infinite</span></a></li>
                                <li><a href="#"><i class="ti-id-badge"></i><span>ti-id-badge</span></a></li>
                                <li><a href="#"><i class="ti-hummer"></i><span>ti-hummer</span></a></li>
                                <li><a href="#"><i class="ti-home"></i><span>ti-home</span></a></li>
                                <li><a href="#"><i class="ti-help"></i><span>ti-help</span></a></li>
                                <li><a href="#"><i class="ti-headphone"></i><span>ti-headphone</span></a></li>
                                <li><a href="#"><i class="ti-harddrives"></i><span>ti-harddrives</span></a></li>
                                <li><a href="#"><i class="ti-harddrive"></i><span>ti-harddrive</span></a></li>
                                <li><a href="#"><i class="ti-gift"></i><span>ti-gift</span></a></li>
                                <li><a href="#"><i class="ti-game"></i><span>ti-game</span></a></li>
                                <li><a href="#"><i class="ti-filter"></i><span>ti-filter</span></a></li>
                                <li><a href="#"><i class="ti-files"></i><span>ti-files</span></a></li>
                                <li><a href="#"><i class="ti-file"></i><span>ti-file</span></a></li>
                                <li><a href="#"><i class="ti-eraser"></i><span>ti-eraser</span></a></li>
                                <li><a href="#"><i class="ti-envelope"></i><span>ti-envelope</span></a></li>
                                <li><a href="#"><i class="ti-download"></i><span>ti-download</span></a></li>
                                <li><a href="#"><i class="ti-direction"></i><span>ti-direction</span></a></li>
                                <li><a href="#"><i class="ti-direction-alt"></i><span>ti-direction-alt</span></a></li>
                                <li><a href="#"><i class="ti-dashboard"></i><span>ti-dashboard</span></a></li>
                                <li><a href="#"><i class="ti-control-stop"></i><span>ti-control-stop</span></a></li>
                                <li><a href="#"><i class="ti-control-shuffle"></i><span>ti-control-shuffle</span></a></li>
                                <li><a href="#"><i class="ti-control-play"></i><span>ti-control-play</span></a></li>
                                <li><a href="#"><i class="ti-control-pause"></i><span>ti-control-pause</span></a></li>
                                <li><a href="#"><i class="ti-control-forward"></i><span>ti-control-forward</span></a></li>
                                <li><a href="#"><i class="ti-control-backward"></i><span>ti-control-backward</span></a></li>
                                <li><a href="#"><i class="ti-cloud"></i><span>ti-cloud</span></a></li>
                                <li><a href="#"><i class="ti-cloud-up"></i><span>ti-cloud-up</span></a></li>
                                <li><a href="#"><i class="ti-cloud-down"></i><span>ti-cloud-down</span></a></li>
                                <li><a href="#"><i class="ti-clipboard"></i><span>ti-clipboard</span></a></li>
                                <li><a href="#"><i class="ti-car"></i><span>ti-car</span></a></li>
                                <li><a href="#"><i class="ti-calendar"></i><span>ti-calendar</span></a></li>
                                <li><a href="#"><i class="ti-book"></i><span>ti-book</span></a></li>
                                <li><a href="#"><i class="ti-bell"></i><span>ti-bell</span></a></li>
                                <li><a href="#"><i class="ti-basketball"></i><span>ti-basketball</span></a></li>
                                <li><a href="#"><i class="ti-bar-chart"></i><span>ti-bar-chart</span></a></li>
                                <li><a href="#"><i class="ti-bar-chart-alt"></i><span>ti-bar-chart-alt</span></a></li>
                                <li><a href="#"><i class="ti-back-right"></i><span>ti-back-right</span></a></li>
                                <li><a href="#"><i class="ti-back-left"></i><span>ti-back-left</span></a></li>
                                <li><a href="#"><i class="ti-arrows-corner"></i><span>ti-arrows-corner</span></a></li>
                                <li><a href="#"><i class="ti-archive"></i><span>ti-archive</span></a></li>
                                <li><a href="#"><i class="ti-anchor"></i><span>ti-anchor</span></a></li>
                                <li><a href="#"><i class="ti-align-right"></i><span>ti-align-right</span></a></li>
                                <li><a href="#"><i class="ti-align-left"></i><span>ti-align-left</span></a></li>
                                <li><a href="#"><i class="ti-align-justify"></i><span>ti-align-justify</span></a></li>
                                <li><a href="#"><i class="ti-align-center"></i><span>ti-align-center</span></a></li>
                                <li><a href="#"><i class="ti-alert"></i><span>ti-alert</span></a></li>
                                <li><a href="#"><i class="ti-alarm-clock"></i><span>ti-alarm-clock</span></a></li>
                                <li><a href="#"><i class="ti-agenda"></i><span>ti-agenda</span></a></li>
                                <li><a href="#"><i class="ti-write"></i><span>ti-write</span></a></li>
                                <li><a href="#"><i class="ti-window"></i><span>ti-window</span></a></li>
                                <li><a href="#"><i class="ti-widgetized"></i><span>ti-widgetized</span></a></li>
                                <li><a href="#"><i class="ti-widget"></i><span>ti-widget</span></a></li>
                                <li><a href="#"><i class="ti-widget-alt"></i><span>ti-widget-alt</span></a></li>
                                <li><a href="#"><i class="ti-wallet"></i><span>ti-wallet</span></a></li>
                                <li><a href="#"><i class="ti-video-clapper"></i><span>ti-video-clapper</span></a></li>
                                <li><a href="#"><i class="ti-video-camera"></i><span>ti-video-camera</span></a></li>
                                <li><a href="#"><i class="ti-vector"></i><span>ti-vector</span></a></li>
                                <li><a href="#"><i class="ti-themify-logo"></i><span>ti-themify-logo</span></a></li>
                                <li><a href="#"><i class="ti-themify-favicon"></i><span>ti-themify-favicon</span></a></li>
                                <li><a href="#"><i class="ti-themify-favicon-alt"></i><span>ti-themify-favicon-alt</span></a></li>
                                <li><a href="#"><i class="ti-support"></i><span>ti-support</span></a></li>
                                <li><a href="#"><i class="ti-stamp"></i><span>ti-stamp</span></a></li>
                                <li><a href="#"><i class="ti-split-v-alt"></i><span>ti-split-v-alt</span></a></li>
                                <li><a href="#"><i class="ti-slice"></i><span>ti-slice</span></a></li>
                                <li><a href="#"><i class="ti-shortcode"></i><span>ti-shortcode</span></a></li>
                                <li><a href="#"><i class="ti-shift-right-alt"></i><span>ti-shift-right-alt</span></a></li>
                                <li><a href="#"><i class="ti-shift-left-alt"></i><span>ti-shift-left-alt</span></a></li>
                                <li><a href="#"><i class="ti-ruler-alt-2"></i><span>ti-ruler-alt-2</span></a></li>
                                <li><a href="#"><i class="ti-receipt"></i><span>ti-receipt</span></a></li>
                                <li><a href="#"><i class="ti-pin2"></i><span>ti-pin2</span></a></li>
                                <li><a href="#"><i class="ti-pin-alt"></i><span>ti-pin-alt</span></a></li>
                                <li><a href="#"><i class="ti-pencil-alt2"></i><span>ti-pencil-alt2</span></a></li>
                                <li><a href="#"><i class="ti-palette"></i><span>ti-palette</span></a></li>
                                <li><a href="#"><i class="ti-more"></i><span>ti-more</span></a></li>
                                <li><a href="#"><i class="ti-more-alt"></i><span>ti-more-alt</span></a></li>
                                <li><a href="#"><i class="ti-microphone-alt"></i><span>ti-microphone-alt</span></a></li>
                                <li><a href="#"><i class="ti-magnet"></i><span>ti-magnet</span></a></li>
                                <li><a href="#"><i class="ti-line-double"></i><span>ti-line-double</span></a></li>
                                <li><a href="#"><i class="ti-line-dotted"></i><span>ti-line-dotted</span></a></li>
                                <li><a href="#"><i class="ti-line-dashed"></i><span>ti-line-dashed</span></a></li>
                                <li><a href="#"><i class="ti-layout-width-full"></i><span>ti-layout-width-full</span></a></li>
                                <li><a href="#"><i class="ti-layout-width-default"></i><span>ti-layout-width-default</span></a></li>
                                <li><a href="#"><i class="ti-layout-width-default-alt"></i><span>ti-layout-width-default-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-tab"></i><span>ti-layout-tab</span></a></li>
                                <li><a href="#"><i class="ti-layout-tab-window"></i><span>ti-layout-tab-window</span></a></li>
                                <li><a href="#"><i class="ti-layout-tab-v"></i><span>ti-layout-tab-v</span></a></li>
                                <li><a href="#"><i class="ti-layout-tab-min"></i><span>ti-layout-tab-min</span></a></li>
                                <li><a href="#"><i class="ti-layout-slider"></i><span>ti-layout-slider</span></a></li>
                                <li><a href="#"><i class="ti-layout-slider-alt"></i><span>ti-layout-slider-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-sidebar-right"></i><span>ti-layout-sidebar-right</span></a></li>
                                <li><a href="#"><i class="ti-layout-sidebar-none"></i><span>ti-layout-sidebar-none</span></a></li>
                                <li><a href="#"><i class="ti-layout-sidebar-left"></i><span>ti-layout-sidebar-left</span></a></li>
                                <li><a href="#"><i class="ti-layout-placeholder"></i><span>ti-layout-placeholder</span></a></li>
                                <li><a href="#"><i class="ti-layout-menu"></i><span>ti-layout-menu</span></a></li>
                                <li><a href="#"><i class="ti-layout-menu-v"></i><span>ti-layout-menu-v</span></a></li>
                                <li><a href="#"><i class="ti-layout-menu-separated"></i><span>ti-layout-menu-separated</span></a></li>
                                <li><a href="#"><i class="ti-layout-menu-full"></i><span>ti-layout-menu-full</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-right-alt"></i><span>ti-layout-media-right-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-right"></i><span>ti-layout-media-right</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-overlay"></i><span>ti-layout-media-overlay</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-overlay-alt"></i><span>ti-layout-media-overlay-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-overlay-alt-2"></i><span>ti-layout-media-overlay-alt-2</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-left-alt"></i><span>ti-layout-media-left-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-left"></i><span>ti-layout-media-left</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-center-alt"></i><span>ti-layout-media-center-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-media-center"></i><span>ti-layout-media-center</span></a></li>
                                <li><a href="#"><i class="ti-layout-list-thumb"></i><span>ti-layout-list-thumb</span></a></li>
                                <li><a href="#"><i class="ti-layout-list-thumb-alt"></i><span>ti-layout-list-thumb-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-list-post"></i><span>ti-layout-list-post</span></a></li>
                                <li><a href="#"><i class="ti-layout-list-large-image"></i><span>ti-layout-list-large-image</span></a></li>
                                <li><a href="#"><i class="ti-layout-line-solid"></i><span>ti-layout-line-solid</span></a></li>
                                <li><a href="#"><i class="ti-layout-grid4"></i><span>ti-layout-grid4</span></a></li>
                                <li><a href="#"><i class="ti-layout-grid3"></i><span>ti-layout-grid3</span></a></li>
                                <li><a href="#"><i class="ti-layout-grid2"></i><span>ti-layout-grid2</span></a></li>
                                <li><a href="#"><i class="ti-layout-grid2-thumb"></i><span>ti-layout-grid2-thumb</span></a></li>
                                <li><a href="#"><i class="ti-layout-cta-right"></i><span>ti-layout-cta-right</span></a></li>
                                <li><a href="#"><i class="ti-layout-cta-left"></i><span>ti-layout-cta-left</span></a></li>
                                <li><a href="#"><i class="ti-layout-cta-center"></i><span>ti-layout-cta-center</span></a></li>
                                <li><a href="#"><i class="ti-layout-cta-btn-right"></i><span>ti-layout-cta-btn-right</span></a></li>
                                <li><a href="#"><i class="ti-layout-cta-btn-left"></i><span>ti-layout-cta-btn-left</span></a></li>
                                <li><a href="#"><i class="ti-layout-column4"></i><span>ti-layout-column4</span></a></li>
                                <li><a href="#"><i class="ti-layout-column3"></i><span>ti-layout-column3</span></a></li>
                                <li><a href="#"><i class="ti-layout-column2"></i><span>ti-layout-column2</span></a></li>
                                <li><a href="#"><i class="ti-layout-accordion-separated"></i><span>ti-layout-accordion-separated</span></a></li>
                                <li><a href="#"><i class="ti-layout-accordion-merged"></i><span>ti-layout-accordion-merged</span></a></li>
                                <li><a href="#"><i class="ti-layout-accordion-list"></i><span>ti-layout-accordion-list</span></a></li>
                                <li><a href="#"><i class="ti-ink-pen"></i><span>ti-ink-pen</span></a></li>
                                <li><a href="#"><i class="ti-info-alt"></i><span>ti-info-alt</span></a></li>
                                <li><a href="#"><i class="ti-help-alt"></i><span>ti-help-alt</span></a></li>
                                <li><a href="#"><i class="ti-headphone-alt"></i><span>ti-headphone-alt</span></a></li>
                                <li><a href="#"><i class="ti-hand-point-up"></i><span>ti-hand-point-up</span></a></li>
                                <li><a href="#"><i class="ti-hand-point-right"></i><span>ti-hand-point-right</span></a></li>
                                <li><a href="#"><i class="ti-hand-point-left"></i><span>ti-hand-point-left</span></a></li>
                                <li><a href="#"><i class="ti-hand-point-down"></i><span>ti-hand-point-down</span></a></li>
                                <li><a href="#"><i class="ti-gallery"></i><span>ti-gallery</span></a></li>
                                <li><a href="#"><i class="ti-face-smile"></i><span>ti-face-smile</span></a></li>
                                <li><a href="#"><i class="ti-face-sad"></i><span>ti-face-sad</span></a></li>
                                <li><a href="#"><i class="ti-credit-card"></i><span>ti-credit-card</span></a></li>
                                <li><a href="#"><i class="ti-control-skip-forward"></i><span>ti-control-skip-forward</span></a></li>
                                <li><a href="#"><i class="ti-control-skip-backward"></i><span>ti-control-skip-backward</span></a></li>
                                <li><a href="#"><i class="ti-control-record"></i><span>ti-control-record</span></a></li>
                                <li><a href="#"><i class="ti-control-eject"></i><span>ti-control-eject</span></a></li>
                                <li><a href="#"><i class="ti-comments-smiley"></i><span>ti-comments-smiley</span></a></li>
                                <li><a href="#"><i class="ti-brush-alt"></i><span>ti-brush-alt</span></a></li>
                                <li><a href="#"><i class="ti-youtube"></i><span>ti-youtube</span></a></li>
                                <li><a href="#"><i class="ti-vimeo"></i><span>ti-vimeo</span></a></li>
                                <li><a href="#"><i class="ti-twitter"></i><span>ti-twitter</span></a></li>
                                <li><a href="#"><i class="ti-time"></i><span>ti-time</span></a></li>
                                <li><a href="#"><i class="ti-tumblr"></i><span>ti-tumblr</span></a></li>
                                <li><a href="#"><i class="ti-skype"></i><span>ti-skype</span></a></li>
                                <li><a href="#"><i class="ti-share"></i><span>ti-share</span></a></li>
                                <li><a href="#"><i class="ti-share-alt"></i><span>ti-share-alt</span></a></li>
                                <li><a href="#"><i class="ti-rocket"></i><span>ti-rocket</span></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i><span>ti-pinterest</span></a></li>
                                <li><a href="#"><i class="ti-new-window"></i><span>ti-new-window</span></a></li>
                                <li><a href="#"><i class="ti-microsoft"></i><span>ti-microsoft</span></a></li>
                                <li><a href="#"><i class="ti-list-ol"></i><span>ti-list-ol</span></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i><span>ti-linkedin</span></a></li>
                                <li><a href="#"><i class="ti-layout-sidebar-2"></i><span>ti-layout-sidebar-2</span></a></li>
                                <li><a href="#"><i class="ti-layout-grid4-alt"></i><span>ti-layout-grid4-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-grid3-alt"></i><span>ti-layout-grid3-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-grid2-alt"></i><span>ti-layout-grid2-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-column4-alt"></i><span>ti-layout-column4-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-column3-alt"></i><span>ti-layout-column3-alt</span></a></li>
                                <li><a href="#"><i class="ti-layout-column2-alt"></i><span>ti-layout-column2-alt</span></a></li>
                                <li><a href="#"><i class="ti-instagram"></i><span>ti-instagram</span></a></li>
                                <li><a href="#"><i class="ti-google"></i><span>ti-google</span></a></li>
                                <li><a href="#"><i class="ti-github"></i><span>ti-github</span></a></li>
                                <li><a href="#"><i class="ti-flickr"></i><span>ti-flickr</span></a></li>
                                <li><a href="#"><i class="ti-facebook"></i><span>ti-facebook</span></a></li>
                                <li><a href="#"><i class="ti-dropbox"></i><span>ti-dropbox</span></a></li>
                                <li><a href="#"><i class="ti-dribbble"></i><span>ti-dribbble</span></a></li>
                                <li><a href="#"><i class="ti-apple"></i><span>ti-apple</span></a></li>
                                <li><a href="#"><i class="ti-android"></i><span>ti-android</span></a></li>
                                <li><a href="#"><i class="ti-save"></i><span>ti-save</span></a></li>
                                <li><a href="#"><i class="ti-save-alt"></i><span>ti-save-alt</span></a></li>
                                <li><a href="#"><i class="ti-yahoo"></i><span>ti-yahoo</span></a></li>
                                <li><a href="#"><i class="ti-wordpress"></i><span>ti-wordpress</span></a></li>
                                <li><a href="#"><i class="ti-vimeo-alt"></i><span>ti-vimeo-alt</span></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i><span>ti-twitter-alt</span></a></li>
                                <li><a href="#"><i class="ti-tumblr-alt"></i><span>ti-tumblr-alt</span></a></li>
                                <li><a href="#"><i class="ti-trello"></i><span>ti-trello</span></a></li>
                                <li><a href="#"><i class="ti-stack-overflow"></i><span>ti-stack-overflow</span></a></li>
                                <li><a href="#"><i class="ti-soundcloud"></i><span>ti-soundcloud</span></a></li>
                                <li><a href="#"><i class="ti-sharethis"></i><span>ti-sharethis</span></a></li>
                                <li><a href="#"><i class="ti-sharethis-alt"></i><span>ti-sharethis-alt</span></a></li>
                                <li><a href="#"><i class="ti-reddit"></i><span>ti-reddit</span></a></li>
                                <li><a href="#"><i class="ti-pinterest-alt"></i><span>ti-pinterest-alt</span></a></li>
                                <li><a href="#"><i class="ti-microsoft-alt"></i><span>ti-microsoft-alt</span></a></li>
                                <li><a href="#"><i class="ti-linux"></i><span>ti-linux</span></a></li>
                                <li><a href="#"><i class="ti-jsfiddle"></i><span>ti-jsfiddle</span></a></li>
                                <li><a href="#"><i class="ti-joomla"></i><span>ti-joomla</span></a></li>
                                <li><a href="#"><i class="ti-html5"></i><span>ti-html5</span></a></li>
                                <li><a href="#"><i class="ti-flickr-alt"></i><span>ti-flickr-alt</span></a></li>
                                <li><a href="#"><i class="ti-email"></i><span>ti-email</span></a></li>
                                <li><a href="#"><i class="ti-drupal"></i><span>ti-drupal</span></a></li>
                                <li><a href="#"><i class="ti-dropbox-alt"></i><span>ti-dropbox-alt</span></a></li>
                                <li><a href="#"><i class="ti-css3"></i><span>ti-css3</span></a></li>
                                <li><a href="#"><i class="ti-rss"></i><span>ti-rss</span></a></li>
                                <li><a href="#"><i class="ti-rss-alt"></i><span>ti-rss-alt</span></a></li>
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_themify.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
</html>
