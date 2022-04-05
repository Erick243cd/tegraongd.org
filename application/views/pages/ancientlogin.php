
	<main>
	<div class="container m-5 p-5">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<div class="card card-primary">
				<div class="card-header text-center">
					<?php if ($this->session->flashdata('connexion_failed')):?>
				        <div class="alert alert-danger alert-dismissible" role="alert" id="connexion-failed">
				            <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="btn-close">
				                <span aria-hidden="true">&times;</span>
				            </button>
				            <span><?php echo $this->session->flashdata('connexion_failed');?></span>
				        </div>
					<?php endif;?>
					<h3 class="text-muted">Login</h3>
				</div>
			<div class="card-body">
				<form method="post" action="<?= base_url()?>login/index">
					<div class="form-group">
						<label>Nom utilisateur</label>
						<input type="text" name="username" required class="form-control">
					</div>
					<div class="form-group">
						<label>Mot de passe</label>
						<input type="password" name="password" required class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Connexion" class="genric-btn primary float-right">
					</div>
				</form>
			</div>
		</div>
			</div>
			<div class="col-3"></div>
		</div>
		
	</div>
	</main>