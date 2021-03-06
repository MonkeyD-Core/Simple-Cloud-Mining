<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$activeUrl = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administration Dasboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">
	<meta name="author" content="Script by SmartyScripts.com">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="<?php echo adminAssets('vendor/bootstrap/css/bootstrap.min.css');?>">
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="<?php echo adminAssets('vendor/font-awesome/css/font-awesome.min.css');?>">
	<!-- Fontastic Custom icon font-->
	<link rel="stylesheet" href="<?php echo adminAssets('css/fontastic.css');?>">
	<!-- Google fonts - Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<!-- jQuery Circle-->
	<link rel="stylesheet" href="<?php echo adminAssets('css/grasp_mobile_progress_circle-1.0.0.min.css');?>">
	<!-- Custom Scrollbar-->
	<link rel="stylesheet" href="<?php echo adminAssets('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css');?>">
	<!-- theme stylesheet-->
	<link rel="stylesheet" href="<?php echo adminAssets('css/style.red.css');?>" id="theme-stylesheet">
	<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="<?php echo adminAssets('css/custom.css');?>">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo adminAssets('img/favicon.ico');?>">
	<!-- Tweaks for older IEs--><!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
	<div class="side-navbar-wrapper">
		<!-- Sidebar Header  -->
		<div class="sidenav-header d-flex align-items-center justify-content-center">
			<!-- User Info-->
			<div class="sidenav-header-inner text-center"><img src="<?php echo adminAssets('img/avatar-1.jpg')?>" alt="person" class="img-fluid rounded-circle">
				<h2 class="h5"><?php echo $this->auth_user->username; ?></h2><span>Administrator</span>
			</div>
			<!-- Small Brand information, appears on minimized sidebar-->
			<div class="sidenav-header-logo"><a href="<?php echo adminRoute();?>" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">D</strong></a></div>
		</div>
		<!-- Sidebar Navigation Menus-->
		<div class="main-menu">
			<h5 class="sidenav-heading">Main</h5>
			<ul id="side-main-menu" class="side-menu list-unstyled">
				<li class="<?php echo ($activeUrl=='' || $activeUrl==='home')?'active':'';?>">
					<a href="<?php echo adminRoute();?>"><i class="fa fa-dashboard"></i> Dashboard</a>
				</li>
				<li class="<?php echo $activeUrl==='plans'?'active':'';?>">
					<a href="<?php echo adminRoute('plans');?>"><i class="fa fa-cubes"></i>Plan Management</a>
				</li>
				<li class="<?php echo $activeUrl==='users'?'active':'';?>">
					<a href="<?php echo adminRoute('users');?>"><i class="fa fa-users"></i>User Management</a>
				</li>
				<li class="<?php echo $activeUrl==='withdrawals'?'active':'';?>">
					<a href="<?php echo adminRoute('withdrawals');?>"><i class="fa fa-money"></i>Withdrawal Requests</a>
				</li>
				<li class="<?php echo $activeUrl==='transactions'?'active':'';?>">
					<a href="<?php echo adminRoute('transactions');?>"><i class="fa fa-bar-chart"></i>Transactions History</a>
				</li>
				<li class="<?php echo $activeUrl==='contact'?'active':'';?>">
					<a href="<?php echo adminRoute('contact');?>"><i class="fa fa-envelope"></i>Support Messages</a>
				</li>
			</ul>
		</div>
		<div class="admin-menu">
			<h5 class="sidenav-heading">System</h5>
			<ul id="side-admin-menu" class="side-menu list-unstyled">
				<li class="<?php echo $activeUrl==='admins'?'active':'';?>">
					<a href="<?php echo adminRoute('admins');?>"><i class="fa fa-user-secret"></i>Admins</a>
				</li>
				<li class="<?php echo $activeUrl==='settings'?'active':'';?>">
					<a href="<?php echo adminRoute('settings');?>"><i class="fa fa-cogs"></i>Settings</a>
				</li>
				<li class="<?php echo $activeUrl==='urlchains'?'active':'';?>">
					<a href="<?php echo adminRoute('urlchains');?>"><i class="fa fa-link"></i>Blockchain URL's</a>
				</li>
				<li class="<?php echo $activeUrl==='ipnlogs'?'active':'';?>">
					<a href="<?php echo adminRoute('ipnlogs');?>"><i class="fa fa-exclamation-circle"></i>IPN Logs</a>
				</li>
				<li class="<?php echo $activeUrl==='settings'?'active':'';?>">
					<a href="<?php echo adminRoute();?>/coinpayments"><i class="fa fa-cogs"></i>coinpayments</a>
				</li>
			</ul>
		</div>
		<div class="admin-menu">
			<h5 class="sidenav-heading">Addons</h5>
			<ul id="side-admin-menu" class="side-menu list-unstyled">
				<?php plugins_menu(); ?>
			</ul>
		</div>
	</div>
</nav>
<div class="page">
	<!-- navbar-->
	<header class="header">
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-holder d-flex align-items-center justify-content-between">
					<div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo adminRoute();?>" class="navbar-brand">
							<div class="brand-text d-none d-md-inline-block"><span>Administration</span> <strong class="text-primary">Dashboard</strong></div></a></div>
					<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
						<li class="nav-item"><a href="<?php echo base_url();?>" class="nav-link"><i class="fa fa-eye"></i> View Site</a></li>
						<li class="nav-item"><a href="<?php echo adminRoute('logout');?>" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- /header -->
