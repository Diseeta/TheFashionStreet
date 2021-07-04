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
			<!--typography-page -->
				<div class="typo-w3">
					<div class="container">
						<h2 class="tittle">Order Details</h2>
						

						
						<div class="bs-docs-example">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Quantity</th>
										<th>price</th>
									</tr>
								</thead>
								<tbody>

                                <?php
								$total=0;
                                    $uid = $_SESSION['uid'];
                                    $result = mysql_query("select * from cart where uid=$uid");
                                    $no = 1;
                                    $row = mysql_fetch_row($result);
												
								while($row)	
								{
										$result2 = mysql_query("select * from product where pid=$row[1]");
										$row2 = mysql_fetch_row($result2);

										$temp = $row2[4] * $row[3];
										$total = $total + $temp; 
					 ?>

									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $row2[3]; ?></td>
										<td><?php echo $row[3]; ?></td>
										<td><?php echo $row2[4] * $row[3]; ?></td>
										</tr>

                                    <?php
                                    $no++;
									$row = mysql_fetch_row($result);
								}
								$discount = $total * 0.1;
						?>

									<tr>
										<td colspan="2" align="center"><h3>Total</h3></td>
										
										<td>Discount = <?php echo $discount; ?></td>
										<td ><h1> <?php echo $total-$discount; ?> </h1></td>
									</tr>

									
								</tbody>
							</table>
						</div>
						<hr class="bs-docs-separator">
						
						
					</div>
				</div>
			<!-- //typography-page -->

		</div>
		
					<!---footer--->
					<?php include('footer.php'); ?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
				
</body>
</html>


<?php
	
		
		$uid = $_SESSION['uid'];
		$result = mysql_query("select * from cart where uid=$uid");
		
		$row = mysql_fetch_row($result);
		$products = "";
		$total = 0;
							
		while($row)	
		{
			$result2 = mysql_query("select * from product where pid=$row[1]");
			$row2 = mysql_fetch_row($result2);
			$temp = $row2[4] * $row[3];
			$total = $total + $temp; 
			$products = $products."".$row[1]."*".$row[3]."|";

			$new_q = $row2[9] - $row[3];
		
			mysql_query("update product set quantity='$new_q' where pid=$row[1]");

			$row = mysql_fetch_row($result);
			
		}
		$result = mysql_query("delete from cart where uid=$uid");
		$discount = $total * 0.1;
		$final_total = $total - $discount;

		$dt = date("d/m/Y");	
		mysql_query("insert into user_order values(NULL,'$products',$uid,'$dt',$final_total)");
		

		
	
?>



<?php 

		}
else
{
	header("Location:login.php");
}
?>