<?php 
session_start(); 
if(!isSet($_SESSION['uid']))
{
	header("Location:login.php");
}
?>
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

 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
</head>
<body>
	<!--header-->
	<?php include('header.php'); 
	
		if(isSet($_SESSION['uid']))
		{
	?>
		<!--header-->
		<!--banner-->
		
	<!--banner-->

	<!--content-->
		<div class="content">
			<div class="cart-items">
				<div class="container">
					 <h2>My Shopping Bag</h2>

						

					   <?php
							$uid = $_SESSION['uid'];
							$result = mysql_query("select * from cart where uid=$uid");
							$no = mysql_num_rows($result);
							$tot = 0;
							if($no == 0)
								echo "<h2>your cart is empty</h2>";
							$row = mysql_fetch_row($result);
												
								while($row)	
								{
										$result2 = mysql_query("select * from product where pid=$row[1]");
										$row2 = mysql_fetch_row($result2);
										
										 
					 ?>
					<div class="cart-header3">
						 <a href="cart_remove.php?id=<?php echo $row[0] ?>"><div class="close3"> </div> </a>
							<div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/<?php echo $row2[6]; ?>" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="single.php?pid=<?php echo $row[1]; ?>"> <?php echo $row2[3]; ?> </a></h3>
								<br>
								<ul class="qty">
									<?php $temp = $row2[4] * $row[3]; ?>
									<li><h4>Quantity : <?php echo $row[3]; ?></h4></li>
									<li><h4>order value: <?php echo $temp ?></h4></li>
										
								</ul>
									 	
							   </div>
							   <div class="clearfix"></div>
							</div>
					</div>	

						<?php
									$row = mysql_fetch_row($result);
								}
						?>
							<h1>
								
								<a href="order.php"><p style="text-align:center"><span class="label label-success" >Place Order</span> </p></a>
								
							</h1>
				</div>
			</div>
	<!-- checkout -->	
		</div>
					<!---footer--->
					<?php include('footer.php'); ?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
				
</body>
</html>

<?php 

		}
else
{
	header("Location:login.php");
}
?>