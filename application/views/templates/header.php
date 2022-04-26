<?php
$session_data = $this->session->userdata('logged_in');
if (isset($session_data)) {
	$data['id'] = $session_data['id'];
} else {
	$data['id'] = null;
}
?>
<!doctype html>
<html class="no-js" lang="fr-FR">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Tegra ONGD | <?= $title ?? "Bienvenu sur notre site web" ?></title>
	<meta name="description" content="Tegra Ongd est une Asbl de droit Congolais à caractère social, Communautaire et de développement, crée le 20 Mai 2009 à Lubumbashi dans la Province du Haut Katanga">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Tegra Ongd République Démocratique du Congo" />
	<meta name="keywords" content="Tegra ONGD, Tegra Ongd Lubumbashi, Ongd Tegra RDC, Tegra Ongd Haut Katanga Lubumbashi" />

	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/icon/faveicon.ico">

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/slicknav.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/progressbar_barfiller.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<link rel="manifest" href="<?= base_url()?>manifest.webmanifest">

	<style>
		.actives {
			font-size: bold;
			text-decoration: line-through;
			color: #D2691E!important;
		}
	</style>
</head>

<body>
	<header>
		<div class="header-area">
			<div class="main-header ">
				<div class="header-top d-none d-sm-block bg-dark">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xl-12">
								<div class="d-flex justify-content-between flex-wrap align-items-center">
									<div class="header-info-left">
										<ul>
											<li><i class="fas fa-phone-alt"></i> +(243) 900 009 992</li>
											<li><a href="mailto:contact@tegraond.org" class="__cf_email__" data-cfemail="adc4c3cbc283949dedcec5ccdfc4d9c8df83cec2c0">[contact@tegraond.org]</a>
											</li>
										</ul>
									</div>
									<div class="header-info-right">
										<ul class="header-social">
											<li>
												<a href="https://www.facebook.com/Tegra_Ongd-100251342178573/">
													<i class="fab fa-facebook"></i>
												</a>
											</li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li>
												<a href="https://www.youtube.com/channel/UCrIAudmIn7iWN2GcuD9BOhQ">
													<i class="fab fa-youtube"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom  header-sticky">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-2" style="margin-top: 0em !important; padding-bottom:-1em">
								<div class="logo">
									<img src="<?= base_url() ?>assets/img/logo/logo.png" alt="Logo Tegra ONGD" class="rounded" style="width:50px; heigth: 50px; margin-top: -2px!important;">
									<!---<b><a class="navbar-brand text-muted font-bold" href="<?= base_url() ?>">Tegra ONGD</a></b>--->
								</div>
							</div>
							<div class="col-xl-10 col-lg-10">

								<div class="main-menu f-right d-none d-lg-block">
									<nav>
										<ul id="navigation">
											<li><a href="<?= base_url() ?>" class="<?= ($title === 'Home' ? 'actives' : '') ?>">Accueil</a></li>
											<li><a href="<?= base_url() ?>about" class="<?= ($title === 'About' ? 'actives' : '') ?>">Apropos</a></li>
											<li><a href="#" class="<?= ($title === 'Education' || $title === 'Sante' || $title === 'Agropastoral'  ? 'actives' : '') ?>">Projets</a>
												<ul class="submenu">
													<li><a href="<?= base_url() ?>education" class="<?= ($title === 'Education' ? 'actives' : '') ?>">Educatif</a></li>
													<li><a href="<?= base_url() ?>sante" class="<?= ($title === 'Sante' ? 'actives' : '') ?>">Sanitaire</a></li>
													<li><a href="<?= base_url() ?>agropastoral" class="<?= ($title === 'Agropastoral' ? 'actives' : '') ?>">Agropastoral</a></li>
												</ul>
											</li>
											<li><a href="<?= base_url() ?>activities/index" class="<?= ($title === 'Actualites' || $title==='Details' ? 'actives' : '') ?>">Actualités</a></li>
											<li><a href="<?= base_url() ?>contact" class="<?= ($title === 'Contact' ? 'actives' : '') ?>">Contact</a></li>
											<li>
												<div class="header-right-btn f-right  ml-15">
													<?php if (isset($data['id'])) : ?>
														<a href="<?= base_url() ?>pages/dashboard" class="genric-btn">Acceder</a>
													<?php else : ?>
														<a href="<?= base_url() ?>login" class="genric-btn">Connexion</a>
													<?php endif; ?>
												</div>
											</li>
										</ul>
									</nav>
								</div>
							</div>

							<div class="col-12" style="margin-top: -2em !important;">
								<div class="mobile_menu d-block d-lg-none"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
