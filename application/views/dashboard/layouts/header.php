<!DOCTYPE html> 
<html lang="fr">
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name="description" content="Tegra Ongd"/>
<meta name="author" content="Erick Banze"/>
<title>Tegra Ongd Dashboard</title>
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css"/>
<!-- icons -->
<?= link_tag('assets/fonts/simple-line-icons/simple-line-icons.min.css') ?>
<?= link_tag('assets/dashboard/fonts/font-awesome/css/font-awesome.min.css') ?>
<?= link_tag('assets/dashboard/fonts/material-design-icons/material-icon.css') ?>
<!--bootstrap -->
<?= link_tag('assets/dashboard/plugins/bootstrap/css/bootstrap.min.css') ?>
<?= link_tag('assets/dashboard/plugins/summernote/summernote.css') ?>
<!-- Material Design Lite CSS -->
<?= link_tag('assets/dashboard/plugins/material/material.min.css') ?>
<?= link_tag('assets/dashboard/css/material_style.css') ?>
<!-- inbox style -->
<?= link_tag('assets/dashboard/css/pages/inbox.min.css') ?>
<!-- Theme Styles -->
<?= link_tag('assets/dashboard/css/theme/light/theme_style.css') ?>
<?= link_tag('assets/dashboard/css/plugins.min.css') ?>
<?= link_tag('assets/dashboard/css/theme/light/style.css') ?>
<?= link_tag('assets/dashboard/css/responsive.css') ?>
<?= link_tag('assets/dashboard/css/theme/light/theme-color.css') ?>

<!-- favicon -->
<link rel="shortcut icon" href="<?= base_url() ?>assets/img/icon/faveicon.ico">

</head>
<!-- END HEAD -->

<body
		class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
	<!-- start header -->
	<div class="page-header navbar navbar-fixed-top">
		<div class="page-header-inner ">
			<!-- logo start -->
			<div class="page-logo">
				<a href="index.html">
					<span class="logo-icon material-icons fa-rotate-45">tegra</span>
					<span class="logo-default"></span> </a>
			</div>
			<!-- logo end -->
			<ul class="nav navbar-nav navbar-left in">
				<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
			</ul>
			<form class="search-form-opened" action="#" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
				</div>
			</form>
			<!-- start mobile menu -->
			<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
				<span></span>
			</a>
			<!-- end mobile menu -->
			<!-- start header menu -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- start manage user dropdown -->
					<li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
						   data-close-others="true">
						   <?= img('assets/img/users/'.$session_data['user_image'], '', 'class="img-circle"')?>
							<span class="username username-hide-on-mobile"> <?= $session_data['user_name'] ?? "User name" ?> </span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="user_profile.html">
									<i class="icon-user"></i> Profile </a>
							</li>
							<li>
								<a href="#">
									<i class="icon-settings"></i> Settings
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-directions"></i> Help
								</a>
							</li>
							<li class="divider"></li>
							
							<li>
								<a href="<?= site_url('pages/logout')?>">
									<i class="icon-logout"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- end manage user dropdown -->
				</ul>
			</div>
		</div>
	</div>
	<!-- end header -->

