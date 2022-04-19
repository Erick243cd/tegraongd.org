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

										<?= form_open('videos/update/' . $video['video_slug']) ?>
										<div class="email-form">
											<label for="subject" class="text-primary">Titre :</label>
											<input type="text" tabindex="1" id="subject" name="videoTitle" class="form-control itemField" value="<?= $video['video_title'] ?>" required>
										</div>
										<div class="email-form">
											<label for="linkto" class="text-primary">Lien :</label>
											<input type="text" tabindex="1" id="linkto" name="youtubeLink" class="text-primary form-control itemField" value="<?= $video['video_link'] ?>" required>
										</div>

										<div class="box-footer clearfix">
											<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-warning pull-right">
												Mettre à jour <i class="fa fa-paper-plane-o"></i>
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

<!-- end page content -->
