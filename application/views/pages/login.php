
<!DOCTYPE html>
<html>
<!--Login Page TegraOngd-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="TegraOngd Login, Ongd Tegra Login" />
	<meta name="author" content="TegraOngd" />
	<title>Tegra Ongd | Login </title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		  type="text/css" />
	<!-- icons -->
	<?= link_tag('assets/dashboard/fonts/font-awesome/css/font-awesome.min.css')?>
	<?= link_tag('assets/dashboard/plugins/iconic/css/material-design-iconic-font.min.css')?>
	<!-- bootstrap -->
	<?= link_tag('assets/dashboard/plugins/bootstrap/css/bootstrap.min.css')?>
	<!-- style -->
	<?= link_tag('assets/dashboard/css/pages/extra_pages.css')?>
	<!-- favicon -->

	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/icon/faveicon.ico">
</head>

<body>
<div class="limiter">
	<div class="container-login100 page-background">
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="<?= base_url()?>login/index" method="post">
					<span class="login100-form-logo">
						<?= img('assets/img/logo/logo_petit_pour_site.png')?>
					</span>
				<span class="login100-form-title p-b-34 p-t-27">
						Log in
				</span>
				<?php if ($this->session->flashdata('connexion_failed')):?>
					<div class="alert alert-warning">
						<span class="text-danger"><?= $this->session->flashdata('connexion_failed');?></span>
					</div>
				<?php endif;?>
				<div class="wrap-input100 validate-input" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>
<!--				<div class="contact100-form-checkbox">-->
<!--					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">-->
<!--					<label class="label-checkbox100" for="ckb1">-->
<!--						Remember me-->
<!--					</label>-->
<!--				</div>-->
				<div class="text-center p-t-30">
					<a class="txt1" href="#!">
						Forgot Password?
					</a>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Login
					</button>
				</div>

			</form>
		</div>
	</div>
</div>
<!-- start js include path -->
<script src="<?= base_url()?>assets/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- bootstrap -->
<script src="<?= base_url()?>assets/dashboard/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/dashboard/js/pages/extra-pages/pages.js"></script>
<!-- end js include path -->
</body>
</html>
