<?php
session_start();
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo FRONT_SITE_NAME?></title> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area">
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                            <div class="logo">
                                <a href="index.php">
                                    <b><h4>Questionnary</h4></b>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                            <div class="header-middle-right f-right">
                                <div class="header-login">
                                    <a href="login_register.php">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons"></i>
                                        </div>

                                    <?php
									    if(!isset($_SESSION['FOOD_USER_NAME'])){
									?>

                                        <div class="login-text-content">
                                            <p>Register <br> or <span>Sign in</span></p>
                                        </div>
                                    </a>
                                    <?php
										}else{ ?>
                                            <div class="login-text-content" style="margin:8px; font-size:20px">
                                                <strong><?php echo $_SESSION['FOOD_USER_NAME'];?></strong>
                                            </div>
                                    <?php   }
									?>
                                </div>
                                <div class="header-wishlist">
                                   &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="main-menu">
                                <nav>
                                <ul>
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <?php
									    if(isset($_SESSION['FOOD_USER_NAME'])){
									?>
                                        <li><a href="final_score.php">Score Card</a></li>
                                        <li><a href="logout.php">Logout</a></li>
									
									<?php
									    }
									?>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    
                                </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-start -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul class="menu-overflow" id="nav">
										<li><a href="dashboard.php">Dashboard</a></li>
                                        <?php
									        if(isset($_SESSION['FOOD_USER_NAME'])){
									    ?>
                                        <li><a href="final_score.php">Score Card</a></li>
                                        <li><a href="logout.php">Logout</a></li>
									
									    <?php
										    }
									    ?>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
        </header>