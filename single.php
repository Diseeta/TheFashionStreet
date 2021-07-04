<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>FASHION STREET</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
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
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/imagezoom.js"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

  <!--mycart-->
  <!--start-rate-->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>

</head>
<body>
	<!--header-->
	<?php include('header.php'); ?>
		<!--header-->
		
		<!--banner-->
		
	<!--banner-->

	<!--content-->	
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-12 single-grid">
							<div clas="single-top">
							
							<?php
											
											$pid=$_GET['pid'];	 
					
												$result = mysql_query("select * from product where pid=$pid");
												$row = mysql_fetch_row($result);
							?>
							
							
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="images/<?php echo $row[6]; ?>">
												<div class="thumb-image"> <img src="images/<?php echo $row[6]; ?>" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="images/<?php echo $row[7]; ?>">
												 <div class="thumb-image"> <img src="images/<?php echo $row[7]; ?>" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="images/<?php echo $row[8]; ?>">
											   <div class="thumb-image"> <img src="images/<?php echo $row[8]; ?>" data-imagezoom="true" class="img-responsive"> </div>
											</li> 
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<h4> <?php echo $row[3]; ?> </h4>
									
									<p class="price item_price">Rs. <?php echo $row[4]; ?></p>
									<div class="description">
										<p><span>Quick Overview : </span> <?php echo $row[5]; ?> </p>
									</div>
									<div class="color-quality">
										<h6>Size :  <?php echo $row[10]; ?> </h6>
									</div>
									<div class="color-quality">
										<h6>Available Quantity : <?php echo "<script> var qq=$row[9]; </script>";
																	$qa = $row[9];
																	echo $row[9]; ?></h6>
											<div class="quantity"> 
												<!--<div class="quantity-select">                           
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>100</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>-->
												<?php 

															if($row[9] > 0)
															{

															?>
												<form action="cart_proc.php" method="get" onsubmit="return aa();">
													<input type="number" placeholder="Enter Quantity" name="qty" id="q" required >
													<input type="hidden" value="<?php echo $pid; ?>" name="pid" />
													<br><br><br>
													<input type="submit" value="Add To Cart" class="label-success btn">
												</form>

												<?php }
												
												else
												{
													echo "<h1>Product out of stock</h1>";
												}
													?>
											</div>
												
									</div>
									<div class="women">
												
												
											
									</div>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<!--Product Description-->
						
					<!--Product Description-->
				</div>
			</div>
			<!--single-->
			
			<!--new-arrivals-->
		</div>
		<!--content-->
		<!---footer--->
					<?php include('footer.php'); ?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
				
</body>


</html>

<script>
	function aa() {
	
		var x = document.getElementById("q").value;
		if (x > qq) {
			alert("please Enter less quantity then avelable");
			return false;
		}
	}
</script>
