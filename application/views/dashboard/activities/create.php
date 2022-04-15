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
										
										<?= form_open_multipart('activities/create') ?>

										<!-- <div class="email-form">
													<label for="to" class="">To:</label> <input type="text"
																								tabindex="1" id="to" class="form-control itemField">
													<div class="compose-options">
														<a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();"
														   href="javascript:;">Cc</a> <a
															onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();"
															href="javascript:;">Bcc</a>
													</div>
												</div> -->
										<!-- <div class="email-form hidden">
											<label for="cc" class="">Cc:</label> <input type="text" tabindex="2" id="cc" class="form-control itemField">
										</div>
										<div class="email-form hidden">
											<label for="bcc" class="">Bcc:</label> <input type="text" tabindex="2" id="bcc" class="form-control itemField">
										</div> -->
										<div class="email-form">
											<label for="subject" class="">Titre :</label>
											<input type="text" tabindex="1" id="subject" name="post_title" class="form-control itemField" value="<?= set_value('post_title'); ?>">
										</div>
										<span class="text-danger"><?= form_error('post_title'); ?>

											<div class="form-group">
												
												<select class="form-select" name="category">
													<option value="">Selectionner la catégorie</option>
													<?php foreach ($categories as $row) : ?>
														<option value="<?= $row->id_category ?>" <?= set_select('category', $row->id_category, TRUE); ?> ><?= $row->name ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<span class="text-danger"><?= form_error('category'); ?>
												<div class="mt-4">
													<textarea name="post_description" id="formsummernote" cols="30" rows="5">
														<?= set_value('post_description'); ?>	
													</textarea>
													<span class="text-danger"><?= form_error('post_description'); ?></span>
												</div>
												<div class="mt-4">
													<input type="file" name="post_image" class="default" accept=".jpeg, .jpg, .png, .webp" required>
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
