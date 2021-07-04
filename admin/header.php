<?php
	include("conn.php");
    session_start();
	$login = $_SESSION['login'];
	if($login=="yes")
	{
			
	
?>
<nav id="navigation" class="navigation-sidebar bg-primary">
    <div class="navigation-header">
        <a href="#"><span class="logo">Admin</span></a>
        <!--<img src="logo.png" alt="logo" class="brand" height="50">-->
    </div>

    <!--Navigation Profile area-->
   
   <div class="navigation-profile">
   <?php
	   $id=$_SESSION['user_name']; 
       $result = mysql_query("select * from admin where name='$id'");
	   $row = mysql_fetch_row($result);
	  
				
	 ?>
	 
	   <img class="profile-img rounded-circle" src="assets/images/<?php echo $row[4]; ?>" alt="profile image">
       
	       
	   <h4 class="name"><?php echo $_SESSION['user_name'];?></h4>
     
				
        <a id="show-user-menu" href="javascript:void(0);" class="circle-white-btn profile-setting"><i class="fa fa-cog"></i></a>

        <!--logged user hover menu-->
        <div class="logged-user-menu bg-white">
            <div class="avatar-info">
                <img class="profile-img rounded-circle" src="assets/images/1.jpg" alt="profile image">
                <h4 class="name"><?php echo $_SESSION['user_name'];?></h4>
                
            </div>

            <ul class="list-unstyled">
                <li>
                    <a href="logout.php">
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
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Slider</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="add_slider.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">ADD</span>
                        </a>
                    </li>
					<li>
                        <a href="update_slider.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">UPDATE/DELETE</span>
                        </a>
                    </li>
                    <li>
                        <a href="display_slider.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">DISPLAY</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Category</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="add_cat.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">ADD</span>
                        </a>
                    </li>
					<li>
                        <a href="update_cat.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">UPDATE/DELETE</span>
                        </a>
                    </li>
                    <li>
                        <a href="display_cat.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">DISPLAY</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--<li>
                <a href="apps_calendar.html">
                    <span class="icon-thumbnail"><i class="fa fa-calendar"></i></span>
                    <span class="title">Full Calendar</span>
                </a>
            </li>-->
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Sub Category</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    
                    <li>
                        <a href="add_subcat.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">ADD</span>
                        </a>
                    </li>
                    <li>
                        <a href="update_subcat.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">UPDATE/DELETE</span>
                        </a>
                    </li>
					<li>
                        <a href="display_subcat.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">DISPLAY</span>
                        </a>
                    </li>
                </ul>
            </li>
             <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Products</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    
                    <li>
                        <a href="add_products.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">ADD</span>
                        </a>
                    </li>
                    <li>
                        <a href="update_product.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">UPDATE/DELETE</span>
                        </a>
                    </li>
					<li>
                        <a href="display_product.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">DISPLAY</span>
                        </a>
                    </li>
                </ul>
            </li>
              
			
			<li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Registred User</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    
                    <li>
                        <a href="reg_view.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">VIEW</span>
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Feedbacks</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    
                    <li>
                        <a href="feedback_view.php">
                            <span class="icon-thumbnail"><i class="dripicons-exit"></i></span>
                            <span class="title">VIEW</span>
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li>
                <a href="user_orders.php" class="active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Orders</span>
                </a>
                <!--Submenu-->
                
            </li>
         
		 			
         
         
        </ul>
    </div>
</nav>

<?php
	}
	else
		header("Location:index.html");
?>
	
