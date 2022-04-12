<?php

/**
 * Classe pour les activités du blog
 */
class Activities extends CI_Controller
{

	public function index($offset = 0)
	{
		//Pagination Config
		$config['base_url'] = base_url() . 'activities/index/';
		$config['total_rows'] = $this->db->count_all('tgr_activities');
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-links');

		//Init Pagination
		$this->pagination->initialize($config);
		$data['title'] = 'Activités récentes';
		$slug = false;
		$data['activities'] = $this->activity_model->get_posts($slug, $config['per_page'], $offset);

		$limit = 3;
		$data['latest'] = $this->activity_model->get_posts($slug, $limit, $offset);

		$this->load->view('templates/header');
		$this->load->view('activities/index', $data);
		$this->load->view('templates/footer');
	}



	public function view($slug = null)
	{

		$data['activity'] = $this->activity_model->get_posts($slug);

		//-----Pour le commentaire----//
		//$post_id = $data['post']['id'];
		//$data['comments']=$this->comment_model->get_comments($post_id);
		//-----Fin Pour le commentaire----//
		if (empty($data['activity'])) {
			show_404();
		}
		$data['title'] = $data['activity']['title'];

		$this->load->view('templates/header');
		$this->load->view('activities/view', $data);
		$this->load->view('templates/footer');
	}
	//Fonction de création d'une nouvelle publication posts
	public function create()
	{
		$data['title'] = 'Nouvelle activité';

		$data['categories'] = $this->activity_model->get_categories();


		if (isset($_FILES["post_image"]["name"])) {

			$config['upload_path'] = './assets/img/blog/';
			$config['allowed_types'] = 'jpg|png|webp';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('post_image')) {
				$file = 'no_file';
			} else {
				$string = $_FILES["post_image"]["name"];
				$pattern = '# #';
				$replacement = "_";
				$data = $this->upload->data();
				$file = preg_replace($pattern, $replacement, $string);
			}
		}

		$this->activity_model->create_activity($file);

		//Set_messages
		$this->session->set_flashdata('post_created', 'Votre publication a été créée avec succès !');
		redirect('activities/liste');
	}


	/* Activités récentes*/
	function liste()
	{
		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {

			$sess_data = [
				'title' => 'Activités',
				'subtitle' => 'Liste d\'activités',
				'session_data' => $sess_data
			];

			$data = [
				'posts' => $this->activity_model->get_posts(),
				'session_data' => $sess_data
			];

			$this->load->view('dashboard/layouts/header', $sess_data);
			$this->load->view('dashboard/activities/index', $data);
			$this->load->view('dashboard/layouts/footer');

		} else {
			redirect('/login');
		}
	}

	/*Editer les articles*/

	function edit($slug)
	{
		$data['activity'] = $this->activity_model->get_posts($slug);
		$data['title'] = $data['activity']['title'];
		$data['categories'] = $this->activity_model->get_categories();

		$this->load->view('templates/header');
		$this->load->view('dashboard/activities/edit', $data);
		$this->load->view('templates/footer');
	}

	function update()
	{
		$this->activity_model->update_activity();
		//Set_messages
		$this->session->set_flashdata('post_created', 'Votre article a été modifié avec succès !');
		redirect('activities/liste');
	}

	function delete($id)
	{
		$this->activity_model->delete_activity($id);
		//Set_messages
		$this->session->set_flashdata('post_created', 'Votre article a été suprimé avec succès !');
		redirect('activities/liste');
	}
}
