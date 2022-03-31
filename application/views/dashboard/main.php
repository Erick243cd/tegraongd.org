<?php
$session_data= $this->session->userdata('logged_in');
$data['id'] = $session_data['id'];
$data['user_name'] = $session_data['user_name'];
$data['role_utilisateur'] = $session_data['role_utilisateur'];
$data['user_image'] = $session_data['user_image'];
if(empty($data['id'])){
    redirect(base_url('pages/connexion'));
}
?>
<main>
	<div class="container-fluid m-5 p-5">
		<div class="row">
			<div class="col-3">
				<div class="">
					<ul class="list-group">
						<li class="list-item"><a class="genric-btn primary btn-lg default" href="<?= base_url()?>pages/dashboard">Dashboard</a></li>
						<div class="ml-2">
						<li class="list-item"><a class="genric-btn default btn-lg" href="<?= base_url()?>activities/liste">Activités</a></li>
						<li class="list-item"><a class="genric-btn default btn-lg" href="<?= base_url()?>pages/dashboard">Publier</a></li>
						<li class="list-item"><a onclick="return confirm('Etes-vous sûr de vous déconnecter');" class="genric-btn default btn-lg" href="<?= base_url()?>pages/logout">Logout</a></li>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-8">
				<form class="form-contact contact_form" action="<?= base_url()?>activities/create" method="post" enctype="multipart/form-data">
			<div class="row">
			
			<div class="col-sm-12">
				<div class="form-group">
				<input class="form-control valid" name="title" id="title" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Titre de la publication'" placeholder="Titre de la publication" required="required">
				</div>
			</div>
			<div class="col-12">
			<div class="form-group">
			<textarea class="form-control w-100" name="body" id="" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer le Conteny'" placeholder=" Entrer le contenu" required="required"></textarea>
			</div>
			</div>

			<div class="col-sm-6">
			<div class="form-group">
				<select class="form-control" name="id_category" required>
					<option disabled selected>Séléctionner la catégorie</option>
					<?php foreach($categories as $row):?>
						<option value="<?= $row->id_category?>"><?= $row->name?></option>
					<?php endforeach;?>
				</select>
			</div>		
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<input  type="file" name="post_image" class="form-control valid" accept=".jpg; .png; .webp"required>
			</div>		
			</div>
		</div>
			<div class="form-group mt-3">
			<button type="submit" class="genric-btn primary btn-fixed">Publier</button>
			</div>
			</form>
			</div>
		</div>
	</div>
</main>