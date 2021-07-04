<?php 
include('conn.php'); ?>

<div class="header">
			<div class="header-top">
				<div class="container">
					
					<div class="top-right">
					<ul>
						<!--<li><a href="checkout.php">Checkout</a></li>-->
						<?php
						
										if(isSet($_SESSION['uid']))
										{
									?>
									
									<li><a href="checkout.php">Checkout</a></li>
									<?php
										}
									?>
									
						
						<?php
							//session_start();
							if(isSet($_SESSION['uid']))
							{
						?>
								<li><a href="#"><?php echo $_SESSION['name']; ?></a></li>
								<li><a href="logout.php"> Logout </a></li>
						<?php
							}
							else
							{ 
						?>
							<li><a href="login.php">Login</a></li>
							<li><a href="registered.php"> Create Account </a></li>
							
						<?php
							}
						?>
						
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="index.php">FASHION STREET<span>online shopping for women</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="products.php" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-12  multi-gd-img">
												<ul class="multi-column-dropdown">
												<h6>New Product</h6>
																					
												<?php 
									
													$result = mysql_query("select * from category");
													$row = mysql_fetch_row($result);
								
													while($row)
													{
				
													?>
														<li><a href="products.php?id=<?php echo $row[0]; ?>"><?php echo $row[1]; ?></a></li>
														
													<?php 
			
														$row = mysql_fetch_row($result);
													}
												?>
														
													</ul>
												</div>
												
												
												<!--<div class="col-sm-3  multi-gd-img">
														<a href="products.html"><img src="images/woo.jpg" alt=" "/></a>
												</div> 
												<div class="col-sm-3  multi-gd-img">
														<a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
												</div>-->
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<!--<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-6  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Old Product</h6>
														<li><a href="products.php">Clothing</a></li>
														<li><a href="products.php">Wallets</a></li>
														<li><a href="products.php">Shoes</a></li>
														<li><a href="products.php">Watches</a></li>
														<li><a href="products.php">Accessories</a></li>
													</ul>
												</div>
												<div class="col-sm-6  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Old Product</h6>
														<li><a href="products.php">Sunglasses</a></li>
														<li><a href="products.php">Wallets,Bags</a></li>
														<li><a href="products.php">Footwear</a></li>
														<li><a href="products.php">Watches</a></li>
														<li><a href="products.php">Jewellery</a></li>
													</ul>
												</div>-->
												<!--<div class="col-sm-3  multi-gd-img">
														<a href="products1.html"><img src="images/woo3.jpg" alt=" "/></a>
												</div> 
												<div class="col-sm-3  multi-gd-img">
														<a href="products1.html"><img src="images/woo4.jpg" alt=" "/></a>
												</div>-->
												<!--<div class="clearfix"></div>
											</div>
										</ul>
									</li>-->
									<li><a href="mail.php">About Us</a></li>
									<li><a href="contact.php">Contact Us</a></li>
									
									
								</ul>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search">
								<form action="product_search.php" method="post">
									<input name="search" type="search" placeholder="Search...">
								</form>
							</div>	
						</div>
						<div class="header-right2">
							<div class="cart box_1">
								<a href="checkout.php">
									<h3> <div class="total">
										<!--<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)-->
										</div>
										<img src="images/bag.png" alt="" />
									</h3>
								</a>
								<p><a href="checkout.php" class="simpleCart_empty">Cart</a></p>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>