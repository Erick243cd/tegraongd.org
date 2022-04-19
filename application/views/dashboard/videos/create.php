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
			<!-- Quick Mail start -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="inbox">
					<div class="card">
						<div class="card-body no-padding height-9">
							<div class="inbox-body">
								<div class="mail-list">
									<div class="compose-mail">
										
										<?= form_open_multipart('videos/create') ?>

										<div class="email-form">
											<label for="subject" class="text-primary">Titre :</label>
											<input type="text" tabindex="1" id="subject" name="videoTitle" class="form-control itemField" value="<?= set_value('videoTitle'); ?>">
										</div>
										<span class="text-danger"><?= form_error('videoTitle'); ?>

										<div class="email-form">
											<label for="linkto" class="text-primary">Lien :</label>
											<input type="text" tabindex="1" id="linkto" name="youtubeLink" class="text-primary form-control itemField" value="<?= set_value('youtubeLink'); ?>">
										</div>
										<span class="text-danger"><?= form_error('youtubeLink'); ?>
										

										<div class="mt-4">
											<label for="subject" class="text-primary">Selectionner la Photo de couverture :</label><br>
											<input type="file" name="coverImage"  class="default" accept=".jpeg, .jpg, .png, .webp" required>
										</div>
										<div class="box-footer clearfix">
											<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">
												Soumettre <i class="fa fa-paper-plane-o"></i>
											</button>
										</div>
												</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Quick Mail end -->
		</div>
	</div>
</div>
<!-- end page content -->
