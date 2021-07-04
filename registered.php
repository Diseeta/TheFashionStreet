<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>DEALHUB</title>
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
		<?php include('header.php'); ?>
		<!--header-->
		<!--banner-->
		
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="signup_process.php" method="post">
						<div class="key">
							<i  aria-hidden="true"></i>
							<input  type="text" value="Full Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i  aria-hidden="true"></i>
							<input  type="text" value="Enter Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i  aria-hidden="true"></i>
							<input  type="password" value="Enter Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i  aria-hidden="true"></i>
							<input  type="number" value="Mobile Number" placeholder="Mobile Number" name="number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'number';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i  aria-hidden="true"></i>
							<input  type="text" value="Enter Address" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'address';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i  aria-hidden="true"></i>
							<input  type="text" value="Enter City" name="city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'city';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i aria-hidden="true"></i>
							<input  type="text" value="Enter State" name="state" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'state';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i aria-hidden="true"></i>
							<select name="question">
								<option value="select question">Select Question</option>
								<option>what is your home town?</option>
								<option>what is your birth place?</option>
								<option>who is your best friend?</option>
								</select>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i aria-hidden="true"></i>
							<input  type="text" value="Enter answer" name="answer" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'answer';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
		<!---footer--->
					<?php include('footer.php'); ?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
				

</body>
</html>