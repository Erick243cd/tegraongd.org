<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title"><?= $title ?></div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?= site_url('pages/dashboard') ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item" href="#"><?= $title ?></a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li class="active"><?= $subtitle ?></li>
				</ol>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-head">
						<header><?= $subtitle ?></header>
						<?php if ($this->session->flashdata('success')) : ?>
							<p class="text-success text-center"><?= $this->session->flashdata('success'); ?></p>
						<?php endif ?>
						

						<div class="tools">
							<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
							<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
							<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
						</div>
					</div>
					
					<div class="card-body ">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-6">
								<div class="btn-group">
									<a href="<?= site_url('activities/create') ?>" id="addRow1" class="btn btn-info">
										Ajouter <i class="fa fa-plus text-white"></i>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-6">
								<div class="btn-group pull-right">
									<button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-bs-toggle="dropdown">Tools
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
												<i class="fa fa-print"></i> Print </a>
										</li>
										<li>
											<a href="javascript:;">
												<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
										</li>
										<li>
											<a href="javascript:;">
												<i class="fa fa-file-excel-o"></i> Export to Excel </a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="table-scrollable">
							<table id="saveStage" class="display" style="width:100%;">
								<thead>
									<tr>
										<th>Titre</th>
										<th>Date</th>
										<th>Categorie</th>
										<th>Image</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($posts as $row) : ?>
										<tr>
											<td><?= character_limiter($row->title, 40) ?></td>
											<td><?= date('d, M Y', strtotime($row->created_at)) ?></td>
											<td><?= $row->name ?></td>
											<td><?= img('assets/img/blog/' . $row->post_image, '', 'class="img-thumbnail" style="width:40px; heigth:40px;"') ?></td>
											<td class="valigntop">
												<div class="btn-group">
													<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-bs-toggle="dropdown" aria-expanded="false">
														Actions
														<i class="fa fa-angle-down"></i>
													</button>
													<ul class="dropdown-menu pull-left" role="menu">
														<li>
															<a href="<?= site_url('activities/create') ?>">
																<i class="icon-user"></i> Nouvelle activité</a>
														</li>
														<li class="divider"> </li>
														<li>
															<a href="<?= base_url() ?>activities/delete/<?= $row->id_activity ?>">
																<i class="icon-remove_circle_outline"></i> Supprimer </a>
														</li>
														<li>
															<a href="<?= base_url() ?>activities/edit/<?= $row->slug ?>">
																<i class="icon-tag"></i> Editer </a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end page content -->
