<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_simple-line.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
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
    <link rel="stylesheet" href="assets/icons/simple-line/css/simple-line-icons.css">

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
                        <a href="icons_simple-line.html" class="active">
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
                            <li class="breadcrumb-item active">Simple-Line</li>
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
                                <h5>Simple Line Icons</h5>
                                <p class="mt-2">Powered by Simple Line Icons set, for more info <a href="https://github.com/thesabbir/simple-line-icons/" target="_blank" class="btn-link">click here</a></p>
                            </div>

                            <ul class="demo-icons-list">
                                <li><a href="#"><i class="icon-user"></i><span>icon-user</span></a></li>
                                <li><a href="#"><i class="icon-people"></i><span>icon-people</span></a></li>
                                <li><a href="#"><i class="icon-user-female"></i><span>icon-user-female</span></a></li>
                                <li><a href="#"><i class="icon-user-follow"></i><span>icon-user-follow</span></a></li>
                                <li><a href="#"><i class="icon-user-following"></i><span>icon-user-following</span></a></li>
                                <li><a href="#"><i class="icon-user-unfollow"></i><span>icon-user-unfollow</span></a></li>
                                <li><a href="#"><i class="icon-login"></i><span>icon-login</span></a></li>
                                <li><a href="#"><i class="icon-logout"></i><span>icon-logout</span></a></li>
                                <li><a href="#"><i class="icon-emotsmile"></i><span>icon-emotsmile</span></a></li>
                                <li><a href="#"><i class="icon-phone"></i><span>icon-phone</span></a></li>
                                <li><a href="#"><i class="icon-call-end"></i><span>icon-call-end</span></a></li>
                                <li><a href="#"><i class="icon-call-in"></i><span>icon-call-in</span></a></li>
                                <li><a href="#"><i class="icon-call-out"></i><span>icon-call-out</span></a></li>
                                <li><a href="#"><i class="icon-map"></i><span>icon-map</span></a></li>
                                <li><a href="#"><i class="icon-location-pin"></i><span>icon-location-pin</span></a></li>
                                <li><a href="#"><i class="icon-direction"></i><span>icon-direction</span></a></li>
                                <li><a href="#"><i class="icon-directions"></i><span>icon-directions</span></a></li>
                                <li><a href="#"><i class="icon-compass"></i><span>icon-compass</span></a></li>
                                <li><a href="#"><i class="icon-layers"></i><span>icon-layers</span></a></li>
                                <li><a href="#"><i class="icon-menu"></i><span>icon-menu</span></a></li>
                                <li><a href="#"><i class="icon-list"></i><span>icon-list</span></a></li>
                                <li><a href="#"><i class="icon-options-vertical"></i><span>icon-options-vertical</span></a></li>
                                <li><a href="#"><i class="icon-options"></i><span>icon-options</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down"></i><span>icon-arrow-down</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left"></i><span>icon-arrow-left</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right"></i><span>icon-arrow-right</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up"></i><span>icon-arrow-up</span></a></li>
                                <li><a href="#"><i class="icon-arrow-up-circle"></i><span>icon-arrow-up-circle</span></a></li>
                                <li><a href="#"><i class="icon-arrow-left-circle"></i><span>icon-arrow-left-circle</span></a></li>
                                <li><a href="#"><i class="icon-arrow-right-circle"></i><span>icon-arrow-right-circle</span></a></li>
                                <li><a href="#"><i class="icon-arrow-down-circle"></i><span>icon-arrow-down-circle</span></a></li>
                                <li><a href="#"><i class="icon-check"></i><span>icon-check</span></a></li>
                                <li><a href="#"><i class="icon-clock"></i><span>icon-clock</span></a></li>
                                <li><a href="#"><i class="icon-plus"></i><span>icon-plus</span></a></li>
                                <li><a href="#"><i class="icon-minus"></i><span>icon-minus</span></a></li>
                                <li><a href="#"><i class="icon-close"></i><span>icon-close</span></a></li>
                                <li><a href="#"><i class="icon-event"></i><span>icon-event</span></a></li>
                                <li><a href="#"><i class="icon-exclamation"></i><span>icon-exclamation</span></a></li>
                                <li><a href="#"><i class="icon-organization"></i><span>icon-organization</span></a></li>
                                <li><a href="#"><i class="icon-trophy"></i><span>icon-trophy</span></a></li>
                                <li><a href="#"><i class="icon-screen-smartphone"></i><span>icon-screen-smartphone</span></a></li>
                                <li><a href="#"><i class="icon-screen-desktop"></i><span>icon-screen-desktop</span></a></li>
                                <li><a href="#"><i class="icon-plane"></i><span>icon-plane</span></a></li>
                                <li><a href="#"><i class="icon-notebook"></i><span>icon-notebook</span></a></li>
                                <li><a href="#"><i class="icon-mustache"></i><span>icon-mustache</span></a></li>
                                <li><a href="#"><i class="icon-mouse"></i><span>icon-mouse</span></a></li>
                                <li><a href="#"><i class="icon-magnet"></i><span>icon-magnet</span></a></li>
                                <li><a href="#"><i class="icon-energy"></i><span>icon-energy</span></a></li>
                                <li><a href="#"><i class="icon-disc"></i><span>icon-disc</span></a></li>
                                <li><a href="#"><i class="icon-cursor"></i><span>icon-cursor</span></a></li>
                                <li><a href="#"><i class="icon-cursor-move"></i><span>icon-cursor-move</span></a></li>
                                <li><a href="#"><i class="icon-crop"></i><span>icon-crop</span></a></li>
                                <li><a href="#"><i class="icon-chemistry"></i><span>icon-chemistry</span></a></li>
                                <li><a href="#"><i class="icon-speedometer"></i><span>icon-speedometer</span></a></li>
                                <li><a href="#"><i class="icon-shield"></i><span>icon-shield</span></a></li>
                                <li><a href="#"><i class="icon-screen-tablet"></i><span>icon-screen-tablet</span></a></li>
                                <li><a href="#"><i class="icon-magic-wand"></i><span>icon-magic-wand</span></a></li>
                                <li><a href="#"><i class="icon-hourglass"></i><span>icon-hourglass</span></a></li>
                                <li><a href="#"><i class="icon-graduation"></i><span>icon-graduation</span></a></li>
                                <li><a href="#"><i class="icon-ghost"></i><span>icon-ghost</span></a></li>
                                <li><a href="#"><i class="icon-game-controller"></i><span>icon-game-controller</span></a></li>
                                <li><a href="#"><i class="icon-fire"></i><span>icon-fire</span></a></li>
                                <li><a href="#"><i class="icon-eyeglass"></i><span>icon-eyeglass</span></a></li>
                                <li><a href="#"><i class="icon-envelope-open"></i><span>icon-envelope-open</span></a></li>
                                <li><a href="#"><i class="icon-envelope-letter"></i><span>icon-envelope-letter</span></a></li>
                                <li><a href="#"><i class="icon-bell"></i><span>icon-bell</span></a></li>
                                <li><a href="#"><i class="icon-badge"></i><span>icon-badge</span></a></li>
                                <li><a href="#"><i class="icon-anchor"></i><span>icon-anchor</span></a></li>
                                <li><a href="#"><i class="icon-wallet"></i><span>icon-wallet</span></a></li>
                                <li><a href="#"><i class="icon-vector"></i><span>icon-vector</span></a></li>
                                <li><a href="#"><i class="icon-speech"></i><span>icon-speech</span></a></li>
                                <li><a href="#"><i class="icon-puzzle"></i><span>icon-puzzle</span></a></li>
                                <li><a href="#"><i class="icon-printer"></i><span>icon-printer</span></a></li>
                                <li><a href="#"><i class="icon-present"></i><span>icon-present</span></a></li>
                                <li><a href="#"><i class="icon-playlist"></i><span>icon-playlist</span></a></li>
                                <li><a href="#"><i class="icon-pin"></i><span>icon-pin</span></a></li>
                                <li><a href="#"><i class="icon-picture"></i><span>icon-picture</span></a></li>
                                <li><a href="#"><i class="icon-handbag"></i><span>icon-handbag</span></a></li>
                                <li><a href="#"><i class="icon-globe-alt"></i><span>icon-globe-alt</span></a></li>
                                <li><a href="#"><i class="icon-globe"></i><span>icon-globe</span></a></li>
                                <li><a href="#"><i class="icon-folder-alt"></i><span>icon-folder-alt</span></a></li>
                                <li><a href="#"><i class="icon-folder"></i><span>icon-folder</span></a></li>
                                <li><a href="#"><i class="icon-film"></i><span>icon-film</span></a></li>
                                <li><a href="#"><i class="icon-feed"></i><span>icon-feed</span></a></li>
                                <li><a href="#"><i class="icon-drop"></i><span>icon-drop</span></a></li>
                                <li><a href="#"><i class="icon-drawer"></i><span>icon-drawer</span></a></li>
                                <li><a href="#"><i class="icon-docs"></i><span>icon-docs</span></a></li>
                                <li><a href="#"><i class="icon-doc"></i><span>icon-doc</span></a></li>
                                <li><a href="#"><i class="icon-diamond"></i><span>icon-diamond</span></a></li>
                                <li><a href="#"><i class="icon-cup"></i><span>icon-cup</span></a></li>
                                <li><a href="#"><i class="icon-calculator"></i><span>icon-calculator</span></a></li>
                                <li><a href="#"><i class="icon-bubbles"></i><span>icon-bubbles</span></a></li>
                                <li><a href="#"><i class="icon-briefcase"></i><span>icon-briefcase</span></a></li>
                                <li><a href="#"><i class="icon-book-open"></i><span>icon-book-open</span></a></li>
                                <li><a href="#"><i class="icon-basket-loaded"></i><span>icon-basket-loaded</span></a></li>
                                <li><a href="#"><i class="icon-basket"></i><span>icon-basket</span></a></li>
                                <li><a href="#"><i class="icon-bag"></i><span>icon-bag</span></a></li>
                                <li><a href="#"><i class="icon-action-undo"></i><span>icon-action-undo</span></a></li>
                                <li><a href="#"><i class="icon-action-redo"></i><span>icon-action-redo</span></a></li>
                                <li><a href="#"><i class="icon-wrench"></i><span>icon-wrench</span></a></li>
                                <li><a href="#"><i class="icon-umbrella"></i><span>icon-umbrella</span></a></li>
                                <li><a href="#"><i class="icon-trash"></i><span>icon-trash</span></a></li>
                                <li><a href="#"><i class="icon-tag"></i><span>icon-tag</span></a></li>
                                <li><a href="#"><i class="icon-support"></i><span>icon-support</span></a></li>
                                <li><a href="#"><i class="icon-frame"></i><span>icon-frame</span></a></li>
                                <li><a href="#"><i class="icon-size-fullscreen"></i><span>icon-size-fullscreen</span></a></li>
                                <li><a href="#"><i class="icon-size-actual"></i><span>icon-size-actual</span></a></li>
                                <li><a href="#"><i class="icon-shuffle"></i><span>icon-shuffle</span></a></li>
                                <li><a href="#"><i class="icon-share-alt"></i><span>icon-share-alt</span></a></li>
                                <li><a href="#"><i class="icon-share"></i><span>icon-share</span></a></li>
                                <li><a href="#"><i class="icon-rocket"></i><span>icon-rocket</span></a></li>
                                <li><a href="#"><i class="icon-question"></i><span>icon-question</span></a></li>
                                <li><a href="#"><i class="icon-pie-chart"></i><span>icon-pie-chart</span></a></li>
                                <li><a href="#"><i class="icon-pencil"></i><span>icon-pencil</span></a></li>
                                <li><a href="#"><i class="icon-note"></i><span>icon-note</span></a></li>
                                <li><a href="#"><i class="icon-loop"></i><span>icon-loop</span></a></li>
                                <li><a href="#"><i class="icon-home"></i><span>icon-home</span></a></li>
                                <li><a href="#"><i class="icon-grid"></i><span>icon-grid</span></a></li>
                                <li><a href="#"><i class="icon-graph"></i><span>icon-graph</span></a></li>
                                <li><a href="#"><i class="icon-microphone"></i><span>icon-microphone</span></a></li>
                                <li><a href="#"><i class="icon-music-tone-alt"></i><span>icon-music-tone-alt</span></a></li>
                                <li><a href="#"><i class="icon-music-tone"></i><span>icon-music-tone</span></a></li>
                                <li><a href="#"><i class="icon-earphones-alt"></i><span>icon-earphones-alt</span></a></li>
                                <li><a href="#"><i class="icon-earphones"></i><span>icon-earphones</span></a></li>
                                <li><a href="#"><i class="icon-equalizer"></i><span>icon-equalizer</span></a></li>
                                <li><a href="#"><i class="icon-like"></i><span>icon-like</span></a></li>
                                <li><a href="#"><i class="icon-dislike"></i><span>icon-dislike</span></a></li>
                                <li><a href="#"><i class="icon-control-start"></i><span>icon-control-start</span></a></li>
                                <li><a href="#"><i class="icon-control-rewind"></i><span>icon-control-rewind</span></a></li>
                                <li><a href="#"><i class="icon-control-play"></i><span>icon-control-play</span></a></li>
                                <li><a href="#"><i class="icon-control-pause"></i><span>icon-control-pause</span></a></li>
                                <li><a href="#"><i class="icon-control-forward"></i><span>icon-control-forward</span></a></li>
                                <li><a href="#"><i class="icon-control-end"></i><span>icon-control-end</span></a></li>
                                <li><a href="#"><i class="icon-volume-1"></i><span>icon-volume-1</span></a></li>
                                <li><a href="#"><i class="icon-volume-2"></i><span>icon-volume-2</span></a></li>
                                <li><a href="#"><i class="icon-volume-off"></i><span>icon-volume-off</span></a></li>
                                <li><a href="#"><i class="icon-calendar"></i><span>icon-calendar</span></a></li>
                                <li><a href="#"><i class="icon-bulb"></i><span>icon-bulb</span></a></li>
                                <li><a href="#"><i class="icon-chart"></i><span>icon-chart</span></a></li>
                                <li><a href="#"><i class="icon-ban"></i><span>icon-ban</span></a></li>
                                <li><a href="#"><i class="icon-bubble"></i><span>icon-bubble</span></a></li>
                                <li><a href="#"><i class="icon-camrecorder"></i><span>icon-camrecorder</span></a></li>
                                <li><a href="#"><i class="icon-camera"></i><span>icon-camera</span></a></li>
                                <li><a href="#"><i class="icon-cloud-download"></i><span>icon-cloud-download</span></a></li>
                                <li><a href="#"><i class="icon-cloud-upload"></i><span>icon-cloud-upload</span></a></li>
                                <li><a href="#"><i class="icon-envelope"></i><span>icon-envelope</span></a></li>
                                <li><a href="#"><i class="icon-eye"></i><span>icon-eye</span></a></li>
                                <li><a href="#"><i class="icon-flag"></i><span>icon-flag</span></a></li>
                                <li><a href="#"><i class="icon-heart"></i><span>icon-heart</span></a></li>
                                <li><a href="#"><i class="icon-info"></i><span>icon-info</span></a></li>
                                <li><a href="#"><i class="icon-key"></i><span>icon-key</span></a></li>
                                <li><a href="#"><i class="icon-link"></i><span>icon-link</span></a></li>
                                <li><a href="#"><i class="icon-lock"></i><span>icon-lock</span></a></li>
                                <li><a href="#"><i class="icon-lock-open"></i><span>icon-lock-open</span></a></li>
                                <li><a href="#"><i class="icon-magnifier"></i><span>icon-magnifier</span></a></li>
                                <li><a href="#"><i class="icon-magnifier-add"></i><span>icon-magnifier-add</span></a></li>
                                <li><a href="#"><i class="icon-magnifier-remove"></i><span>icon-magnifier-remove</span></a></li>
                                <li><a href="#"><i class="icon-paper-clip"></i><span>icon-paper-clip</span></a></li>
                                <li><a href="#"><i class="icon-paper-plane"></i><span>icon-paper-plane</span></a></li>
                                <li><a href="#"><i class="icon-power"></i><span>icon-power</span></a></li>
                                <li><a href="#"><i class="icon-refresh"></i><span>icon-refresh</span></a></li>
                                <li><a href="#"><i class="icon-reload"></i><span>icon-reload</span></a></li>
                                <li><a href="#"><i class="icon-settings"></i><span>icon-settings</span></a></li>
                                <li><a href="#"><i class="icon-star"></i><span>icon-star</span></a></li>
                                <li><a href="#"><i class="icon-symbol-female"></i><span>icon-symbol-female</span></a></li>
                                <li><a href="#"><i class="icon-symbol-male"></i><span>icon-symbol-male</span></a></li>
                                <li><a href="#"><i class="icon-target"></i><span>icon-target</span></a></li>
                                <li><a href="#"><i class="icon-credit-card"></i><span>icon-credit-card</span></a></li>
                                <li><a href="#"><i class="icon-paypal"></i><span>icon-paypal</span></a></li>
                                <li><a href="#"><i class="icon-social-tumblr"></i><span>icon-social-tumblr</span></a></li>
                                <li><a href="#"><i class="icon-social-twitter"></i><span>icon-social-twitter</span></a></li>
                                <li><a href="#"><i class="icon-social-facebook"></i><span>icon-social-facebook</span></a></li>
                                <li><a href="#"><i class="icon-social-instagram"></i><span>icon-social-instagram</span></a></li>
                                <li><a href="#"><i class="icon-social-linkedin"></i><span>icon-social-linkedin</span></a></li>
                                <li><a href="#"><i class="icon-social-pinterest"></i><span>icon-social-pinterest</span></a></li>
                                <li><a href="#"><i class="icon-social-github"></i><span>icon-social-github</span></a></li>
                                <li><a href="#"><i class="icon-social-google"></i><span>icon-social-google</span></a></li>
                                <li><a href="#"><i class="icon-social-reddit"></i><span>icon-social-reddit</span></a></li>
                                <li><a href="#"><i class="icon-social-skype"></i><span>icon-social-skype</span></a></li>
                                <li><a href="#"><i class="icon-social-dribbble"></i><span>icon-social-dribbble</span></a></li>
                                <li><a href="#"><i class="icon-social-behance"></i><span>icon-social-behance</span></a></li>
                                <li><a href="#"><i class="icon-social-foursqare"></i><span>icon-social-foursqare</span></a></li>
                                <li><a href="#"><i class="icon-social-soundcloud"></i><span>icon-social-soundcloud</span></a></li>
                                <li><a href="#"><i class="icon-social-spotify"></i><span>icon-social-spotify</span></a></li>
                                <li><a href="#"><i class="icon-social-stumbleupon"></i><span>icon-social-stumbleupon</span></a></li>
                                <li><a href="#"><i class="icon-social-youtube"></i><span>icon-social-youtube</span></a></li>
                                <li><a href="#"><i class="icon-social-dropbox"></i><span>icon-social-dropbox</span></a></li>
                                <li><a href="#"><i class="icon-social-vkontakte"></i><span>icon-social-vkontakte</span></a></li>
                                <li><a href="#"><i class="icon-social-steam"></i><span>icon-social-steam</span></a></li>
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/icons_simple-line.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:53 GMT -->
</html>