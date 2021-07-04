<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/forms_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Design_Gurus" name="author">
    <meta content="WOW Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>DEAHUB | ADMIN</title>

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
<!--<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h1 class="ip-logo text-center"><img class="img-fluid" src="assets/images/logo-c.png" alt="" class="ip-logo text-center"/></h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
</div>-->
<!---Preloader Ends Here--->


<!--Navigation-->

<!-- HEADER -->

<?php
	include("header.php");
?>

<!-- END HEADER -->

<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">
        <!--Header Fixed-->
        <div class="header fixed-header">
            <div class="container-fluid" style="padding: 10px 25px">
                <div class="row">
                    <div class="col-9 col-md-6 d-lg-none">
                        <a id="toggle-navigation" href="javascript:void(0);" class="icon-btn mr-3"><i class="fa fa-bars"></i></a>
                        <span class="logo">Admin</span>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item">Admin Panel</li>

                        </ol>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="block form-block mb-4">
                            <div class="block-heading">
                                <h5>Add Products</h5>
                            </div>

							<?php

								include("conn.php");

								$id=$_GET["id"];
								$result = mysql_query("select * from product where pid=$id");
								$row = mysql_fetch_row($result);
							?>
                            <form action="edit_product_proc.php" class="horizontal-form" method="post" enctype="multipart/form-data">
							<input type="hidden" value="<?php echo $id; ?>" name="id" />
                                <div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Select Category</label>
                                        <div class="col-md-9">
										
										<select name="cat_id" class="form-control">
							
												<?php 
									
													$result2 = mysql_query("select * from category");
													$row2 = mysql_fetch_row($result2);
								
													while($row2)
													{
														if($row2[0] == $row[1])
														{
												?>
														<option selected value="<?php echo $row2[0]; ?>"> <?php echo $row2[1]; ?></option>
														
													<?php
													}
													else{
														
													
				
													?>
														<option value="<?php echo $row2[0]; ?>"> <?php echo $row2[1]; ?></option>
													
													<?php 
													}
			
														$row2 = mysql_fetch_row($result2);
													}
												?>
							 </select>
                             
											
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Select Sub Category</label>
                                        <div class="col-md-9">
                                           <select name="sub_id" class="form-control">
							
												<?php 
									
													$result2 = mysql_query("select * from sub_category");
													$row2 = mysql_fetch_row($result2);
								
													while($row2)
													{
				
													?>
														<option value="<?php echo $row2[0]; ?>"> <?php echo $row2[2]; ?></option>
													
													<?php 
			
														$row2 = mysql_fetch_row($result2);
													}
												?>
											</select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Enter Product Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Enter product name" type="text" name="pname" value="<?php echo $row[3]; ?>">
                                        </div>
                                    </div>
                                </div>
                       
                                <div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Enter Price</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Enter price" type="number" name="price" value="<?php echo $row[4]; ?>"> 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Enter Size</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Enter Size" type="text" name="price" value="<?php echo $row[10]; ?>"> 
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Enter Description</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Enter Description" type="text" name="des" value="<?php echo $row[5]; ?>"> 
                                        </div>
                                    </div>
                                </div>
                               		<div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Image1</label>
                                        <div class="col-md-9">
                                            <img alt="" src="../images/<?php echo $row[6]; ?>" width="100px">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Enter Image1</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Enter price" type="file" name="image1"> 
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Image2</label>
                                        <div class="col-md-9">
                                            <img alt="" src="../images/<?php echo $row[7]; ?>" width="100px" />
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Enter Image2</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Enter price" type="file" name="image2"> 
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Image3</label>
                                        <div class="col-md-9">
                                            <img alt="" src="../images/<?php echo $row[8]; ?>" width="100px">
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <div class="form-row">
                                        <label class="col-md-3">Enter Image3</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="Enter price" type="file" name="image3"> 
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary mr-3" type="submit">Update</button>
                                
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!---Right Tray--->
<div class="right-sidebar px-3">
    <!--<button class="right-side-toggle"><i class="fa fa-cog fa-spin"></i></button>-->
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

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/blue/forms_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2017 08:07:50 GMT -->
</html>