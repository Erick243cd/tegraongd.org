<main>

	<div class="slider-area">
		<div class="slider-height2 slider-bg5 hero-overly d-flex align-items-center" style="background-image:url(<?= base_url() ?>assets/img/hero/h1_hero1.jpg);">
			<div class="container">
				<div class="col-xl-5 col-lg-6 col-md-6">
					<div class="hero-caption hero-caption2">
						<h3 class="text-white font-bold">Nouvelles activités </h3>
						<p>
						</p>
					</div>
				</div>
			</div>
		</div>


		<section class="blog_area section-padding">
			<div class="container">
				<div class="row">
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
							<aside class="single_sidebar_widget popular_post_widget">
								<h3 class="widget_title" style="color: #2d2d2d;">Activités récentes</h3>
								<?php foreach ($latest as $row) : ?>
									<div class="media post_item">
										<img src="<?= base_url() ?>assets/img/blog/<?= $row->post_image ?>" alt="Tegra Ongd" style="height: 50px; width: 55px;">
										<div class="media-body">
											<a href="<?= base_url() ?>activities/view/<?= $row->slug ?>" title="Détails de l'activité.">
												<h3 style="color: #2d2d2d;"><?= word_limiter($row->body, 5) ?></h3>
											</a>
											<p><?= date('M,d Y', strtotime($row->created_at)) ?></p>
										</div>
									</div>
								<?php endforeach ?>

							</aside>
						</div>
					</div>



					<div class="col-lg-8 mb-5 mb-lg-0">
						<div class="blog_left_sidebar">
							<?php if (!empty($activities)) : ?>
								<?php foreach ($activities as $row) : ?>
									<article class="blog_item">
										<div class="blog_item_img">
											<img class="card-img rounded-0" src="<?= base_url() ?>assets/img/blog/<?= $row->post_image ?>" alt="Tegra Ongd">
											<a href="<?= base_url() ?>activities/view/<?= $row->slug ?>" class="blog_item_date bg-primary" title="Voir le détail de l'activité">
												<h3><?= date('d', strtotime($row->created_at)) ?></h3>
												<p><?= date('M', strtotime($row->created_at)) ?></p>
											</a>
										</div>
										<div class="blog_details">
											<a class="d-inline-block" href="<?= base_url() ?>activities/view/<?= $row->slug ?>">
												<h2 class="blog-head" style="color: #2d2d2d;"><?= ucfirst($row->title) ?></h2>
											</a>
											<p><?= character_limiter($row->body, 250) ?></p>
											<ul class="blog-info-link">
												<li><a href="<?= base_url() ?>activities/view/<?= $row->slug ?>"><i class="fa fa-user"></i> <?= ucfirst($row->name) ?></a></li>
											</ul>
										</div>

									</article>
								<?php endforeach; ?>

							<?php else : ?>
								<div class="justify-content-center">
									<h2 class="text-center text-danger">
										<?= ($this->input->post('requestKey') !== null) ? "Aucun élément correspondant à <b>  " . $this->input->post('requestKey') . "</b> n'a été trouvé " : "Aucun élément n'a été trouvé." ?>
									</h2><br>

									<a href="<?= site_url('activities/index') ?>" class="btn btn-primary float-right">Actualiser</a>
								</div>
							<?php endif; ?>

							<!-- <nav class="blog-pagination justify-content-center d-flex">
								<ul class="pagination">
									<li class="page-item">
										<a href="#" class="page-link" aria-label="Previous">
											<i class="ti-angle-left"></i>
										</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">1</a>
									</li>
									<li class="page-item active">
										<a href="#" class="page-link">2</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link" aria-label="Next">
											<i class="ti-angle-right"></i>
										</a>
									</li>
								</ul>
							</nav> -->
						</div>
					</div>


				</div>
			</div>
		</section>

</main>
