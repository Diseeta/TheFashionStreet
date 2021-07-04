<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/documentation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:54 GMT -->
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
    <link rel="stylesheet" href="assets/icons/simple-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/icons/dripicons/dripicons.css">
    <link rel="stylesheet" href="assets/icons/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/icons/eightyshades/eightyshades.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/icons/foundation/foundation-icons.css">
    <link rel="stylesheet" href="assets/icons/metrize/metrize.css">
    <link rel="stylesheet" href="assets/icons/typicons/typicons.min.css">
    <link rel="stylesheet" href="assets/icons/weathericons/css/weather-icons.min.css">

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
                <a href="javascript:void(0);" class="have-submenu">
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
                <a href="documentation.html" class="active">
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
                            <li class="breadcrumb-item active">Documentation</li>
                        </ol>
                    </div>
                    <div class="col-3 col-md-6 col-lg-4">
                        <a href="javascript:void(0);" class="btn btn-primary btn-round pull-right d-none d-md-block">Buy Theme Now</a>
                    </div>
                </div>
            </div>
        </div>


        <!--Main Content-->
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4>Documentation</h4>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="block mb-4">
                            <div class="block-heading">
                                <h5>Inroduction</h5>
                            </div>

                            <div>
                                <p> This is a premium admin dashboard template with Material design. It is fully responsive admin dashboard template built with Bootstrap 4 Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins. It can be used for all type of Web applications like custom admin panel, app backend, CMS or CRM.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="block text-center mb-4">
                            <div class="block-heading">
                                <h6>How to change colors?</h6>
                                <p class="mt-2">We have made Color Variables in main.css File which you can find in assets/css/main.css</p>
                            </div>
                            <ul class="doc-li">
                                <li class="bg-primary text-white p-1 mb-1">--primary-color</li>
                                <li class="bg-secondary text-white p-1 mb-1">--secondary-color</li>
                                <li class="bg-dark text-white p-1 mb-1">--dark-color</li>
                                <li class="bg-light text-dark p-1 mb-1">--light-color</li>
                            </ul>

                            <p class="mt-1">just by changing the primary variable color you can change whole theme color.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="block text-center mb-4">
                            <div class="block-heading">
                                <h6>Use below classes for Background Colors</h6>
                            </div>
                            <ul class="doc-li">
                                <li class="bg-primary text-white p-2 mb-1">bg-primary</li>
                                <li class="bg-secondary text-white p-2 mb-1">bg-secondary</li>
                                <li class="bg-dark text-white p-2 mb-1">bg-dark</li>
                                <li class="bg-light text-dark p-2 mb-1">bg-light</li>
                                <li class="bg-success text-white p-2 mb-1">bg-success</li>
                                <li class="bg-danger text-white p-2 mb-1">bg-danger</li>
                                <li class="bg-warning text-white p-2 mb-1">bg-warning</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="block text-center mb-4">
                            <div class="block-heading">
                                <h6>Use below classes for Text Colors</h6>
                            </div>
                            <ul class="doc-li">
                                <li class="text-primary p-2 mb-1">text-primary</li>
                                <li class="text-secondary p-2 mb-1">text-secondary</li>
                                <li class="text-dark p-2 mb-1">text-dark</li>
                                <li class="text-light p-2 mb-1">text-light</li>
                                <li class="text-success p-2 mb-1">text-success</li>
                                <li class="text-danger p-2 mb-1">text-danger</li>
                                <li class="text-warning p-2 mb-1">text-warning</li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="block mb-4">
                            <div class="block-heading">
                                <h6>How to edit all the files ?</h6>
                            </div>
                            <p>All index files represent that how can you use all the widgets,tables,charts etc. Other html files are created using there original names like forms_uploads.html, charts_bar.html etc. You can easily edit them.</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="block mb-4">
                            <div class="block-heading">
                                <h6>How to change Navigation Color?</h6>
                            </div>
                            <p>Your can use three Color Combinations for Navigation Sidebar: 1. With white background 2. With primary background 3. With dark background</p>
                            <p class="mt-2">Add <span class="text-primary">.bg-primary</span> class to 'nav' tag to get navigation with primary background.</p>
                            <p class="mt-2">Add <span class="text-dark">.bg-dark</span> class to 'nav' tag to get navigation with primary background.</p>
                            <p class="mt-2">Add .bg-white class to 'nav' tag to get navigation with primary background.</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="section-title">
                            <h4>Credits</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="block credits-block mb-4">
                            <div class="block-heading">
                                <h6>Framework</h6>
                            </div>

                            <ul class="doc-li">
                                <li><a href="http://getbootstrap.com/">Bootstrap-4</a></li>
                                <li><a href="https://jquery.com/">jQuery</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="block credits-block mb-4">
                            <div class="block-heading">
                                <h6>Icons</h6>
                            </div>
                            <ul class="doc-li">
                                <li><a href="https://github.com/FortAwesome/Font-Awesome">Font-Awesome</a></li>
                                <li><a href="https://themify.me/themify-icons">Themify</a></li>
                                <li><a href="https://github.com/thesabbir/simple-line-icons/">Simple Line</a></li>
                                <li><a href="https://github.com/amitjakhu/dripicons">Dripicons</a></li>
                                <li><a href="https://dribbble.com/shots/928458-80-Shades-of-White-Icons">Eightyshades</a></li>
                                <li><a href="http://zurb.com/playground/foundation-icon-fonts-3">Foundation</a></li>
                                <li><a href="http://www.alessioatzeni.com/metrize-icons/">Metrize Icons</a></li>
                                <li><a href="http://www.typicons.com/">Typicons</a></li>
                                <li><a href="https://github.com/erikflowers/weather-icons">Weather Icons</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="block credits-block mb-4">
                            <div class="block-heading">
                                <h6>Plugins</h6>
                            </div>
                            <ul class="doc-li">
                                <li><a href="http://www.chartjs.org/">Charts Js</a></li>
                                <li><a href="https://omnipotent.net/jquery.sparkline/#s-about">Sparkline</a></li>
                                <li><a href="https://github.com/thesabbir/simple-line-icons/">Simple Line</a></li>
                                <li><a href="http://manos.malihu.gr/jquery-custom-content-scroller/">M Custom Scroll</a></li>
                                <li><a href="https://rubaxa.github.io/Sortable/">Sortable 2</a></li>
                                <li><a href="http://www.dropzonejs.com/">Dropzone Js</a></li>
                                <li><a href="http://www.daterangepicker.com/">Date-Range Picker</a></li>
                                <li><a href="https://ckeditor.com/">ckEditor</a></li>
                                <li><a href="https://datatables.net/">Data-Tables</a></li>
                                <li><a href="https://mindmup.github.io/editable-table/">Edit-Tables</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="block mb-4">
                            <div class="block-heading">
                                <h6>Support</h6>
                            </div>
                            <p>If you have any questions that aren’t covered in this article, please mail us at <a href="javascript:;" class="btn-link">designgurus64@gmail.com</a></p>
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/documentation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:54 GMT -->
</html>