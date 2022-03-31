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
				<div class="table-responsive">
					<table class="table table-stripped table-sm">
						<thead>
							<tr>
								<th>Titre</th>
								<th>Contenu</th>
								<th>Image</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($posts as $row): ?>
							<tr>
								<td><?= $row->title ?></td>
								<td><img src="<?= base_url()?>assets/img/blog/<?= $row->post_image?>" style="width: 50px; height: 50px; border-radius: 5px;"></td>
								<td><a href="<?= base_url()?>activities/edit/<?=$row->slug?>" class="genric-btn fa fa-edit primary"></a></td>
								<td><a onclick="return confirm('Etes-vous sûr de supprimer cet artcle ?');" href="<?= base_url()?>activities/delete/<?=$row->id_activity?>" class="genric-btn fa fa-trash-alt danger"></a></td>
							</tr>
							<?php endforeach;?>
						</tbody>
						</table>
				</div>
			</div>
			</div>
		</div>
	</div>
</main>