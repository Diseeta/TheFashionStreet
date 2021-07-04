<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>FASHION STREET</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->

 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  
</head>
<body>
	<!--header-->
		<?php include('header.php'); ?>
		<!--header-->
		<!--banner-->
		
	<!--banner-->
		<!--content-->
			<div class="content">
				<div class="products-agileinfo">
		 <h2 class="tittle"> 
		 <?php  
			$id=$_GET['id']; 
			$result = mysql_query("select * from category where cat_id=$id");
			$row = mysql_fetch_row($result);
			echo $row[1];
			?>
			</h2>
					<div class="container">
						<div class="product-agileinfo-grids w3l">
							<div class="col-md-3 product-agileinfo-grid">
								<?php
									$id=$_GET['id'];
									include('category.php'); 
								?>
						
							<!--	<div class="cat-img">
									<img class="img-responsive " src="images/45.jpg" alt="">
								</div>-->
							</div>
							<div class="col-md-9 product-agileinfon-grid1 w3l">
								
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									
									<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
										<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="images/menu1.png"></a></li>
									<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="images/menu.png"></a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
											<div class="product-tab">
											
											<?php 
					
												$result = mysql_query("select * from sub_category where cat_id=$id");
												$row = mysql_fetch_row($result);
												
												
												while($row)
												{
												
											?>
			
			
												<div class="col-md-6 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="productss.php?cid=<?php echo $row[1]; ?>&sid=<?php echo $row[0]; ?>" class="new-gri" >
																	<div class="grid-img">
																		<img  src="images/<?php echo $row[3]; ?>" class="img-responsive" alt="">
																	</div>
																				
																</a>		
															</figure>	
														</div>
														<div class="block">
															<div class="starbox small ghosting"> </div>
														</div>
														<div class="women">
															<h6><a href="productss.php?cid=<?php echo $row[1]; ?>&sid=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a></h6>

														</div>
													</div>
												</div>
												
												<?php 
			
														$row = mysql_fetch_row($result);
														}
												?>
												
												
												<div class="clearfix"></div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
										
											<?php
											
												 
					
												$result = mysql_query("select * from sub_category where cat_id=$id");
												$row = mysql_fetch_row($result);
												$i = 0;
												
												while($row)
												{
													
												$i++;
												if($i % 2 == 0)
												{ 
											?>
											<div class="product-tab1">
												<div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="productss.php?cid=<?php echo $row[1]; ?>&sid=<?php echo $row[0]; ?>" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="images/<?php echo $row[3]; ?>" class="img-responsive" alt="">
																	</div>
																				
																</a>		
															</figure>	
														</div>
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="productss.php?cid=<?php echo $row[1]; ?>&sid=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a></h6>
														
														<p><?php echo $row[5]; ?></p>
														
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											
											<?php
												}
												else
												{
											?>
											<div class="product-tab1 prod3">
												<div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="productss.php?cid=<?php echo $row[1]; ?>&sid=<?php echo $row[0]; ?>" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="images/<?php echo $row[3]; ?>" class="img-responsive" alt="">
																	</div>
																				
																</a>		
															</figure>	
														</div>
														
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="productss.php?cid=<?php echo $row[1]; ?>&sid=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a></h6>
														<p> <?php echo $row[5]	; ?> </p>
														
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											
												<?php } 
											
														$row = mysql_fetch_row($result);
														}
												?>
											
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		<!--content-->
		<!---footer--->
				<?php include('footer.php'); ?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
				

</body>
</html>