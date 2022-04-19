<main>
	<div class="slider-area">
		<div class="slider-height2 slider-bg5 hero-overly d-flex align-items-center" style="background-image:url(<?= base_url() ?>assets/img/hero/details.jpg);">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-6 col-md-6">
						<div class="hero-caption hero-caption2">
							<h3 class="text-white font-bold"><?= $title; ?> </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="blog_area single-post-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post">
						<div class="feature-img">
							<img class="img-fluid" src="<?= base_url() ?>assets/img/blog/<?= $activity['post_image'] ?>" alt="Tegra Ongd activité">
						</div>
						<div class="blog_details">
							<h2 style="color: #2d2d2d;"><?= $title; ?>
							</h2>
							<ul class="blog-info-link mt-3 mb-4">
								<li><a href="#" title="Catégorie"><i class="fa fa-user"></i> <?= $activity['name'] ?></a></li>
							</ul>
							<p class="excert">
								<?= $activity['body'] ?>
							</p>
						</div>
						<div class="blog-author">
							<div class="media align-items-center">
								<img src="<?= base_url() ?>assets/img/logo/logo.png" alt="">
								<div class="media-body">
									<a href="<?= base_url() ?>about">
										<h4>Tegra Ongd</h4>
									</a>
									<p>Asbl de droit Congolais à caractère social, Communautaire et de développement, crée le 20 Mai 2009 à Lubumbashi dans la Province du Haut-Katanga</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<aside class="single_sidebar_widget search_widget">
							<?= form_open('activities/index') ?>
							<div class="form-group m-0">
								<div class="input-group">
									<input type="text" name="requestKey" class="form-control" placeholder="Tapper quelque chose" value="<?= set_value('requestKey') ?>" required>
									<div class="input-group-append d-flex">
										<button class="boxed-btn2 bg-primary" type="submit">Rechercher</button>
									</div>
								</div>
							</div>
							</form>
						</aside>
						<aside class="single_sidebar_widget post_category_widget">
							<h4 class="widget_title" style="color: #2d2d2d;">Catégories</h4>
							<ul class="list cat-list">
								<?php foreach ($categories as $row) : ?>
									<li>
										<a href="<?= site_url() ?>activities/index/<?= 0 . '/' . $row->id_category ?>" class="d-flex" title="Voir tous les éléménts de la catégorie <?= $row->name ?>">
											<p><?= $row->name ?></p>
											<p>()</p>
										</a>
									</li>
								<?php endforeach ?>
							</ul>
						</aside>
					</div>
				</div>
			</div>
	</section>
</main>
