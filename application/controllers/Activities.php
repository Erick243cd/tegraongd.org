<?php

/**
 * Classe pour les activités du blog
 */
class Activities extends CI_Controller
{

	public function index($offset = 0, $categoryID = null)
	{
		//Pagination Config
		$config['base_url'] = base_url() . 'activities/index/';
		$config['total_rows'] = $this->db->count_all('tgr_activities');
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-links');

		//Init Pagination
		$this->pagination->initialize($config);

		$slug = false;

		$data = [
			'title' => 'Activités récentes',
			'activities' => $this->activity_model->get_posts($slug, $config['per_page'], $offset, $categoryID),
			'categories' => $this->activity_model->get_categories(),
			'latest' => $this->activity_model->get_posts($slug, 3, $offset),
		];
		$this->load->view('templates/header');
		$this->load->view('activities/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = null)
	{
		$dt['activity'] = $this->activity_model->get_posts($slug);

		if (empty($dt['activity'])) {
			show_404();
		} else {
			$data = [
				'title' => $dt['activity']['title'],
				'activity' => $this->activity_model->get_posts($slug),
				'categories' => $this->activity_model->get_categories(),
			];

			$this->load->view('templates/header');
			$this->load->view('activities/view', $data);
			$this->load->view('templates/footer');
		}
	}

	public function create()
	{
		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {

			$header_data  = [
				'title' => 'Activités',
				'subtitle' => 'Nouvelle activité',
				'session_data' => $sess_data
			];

			$data = [
				'categories' => $this->activity_model->get_categories(),
				'session_data' => $header_data,
				'validation' => null
			];


			$this->form_validation->set_rules('post_title', 'Titre', 'required');
			$this->form_validation->set_rules(
				'post_description',
				'Contenu',
				'required'
			);

			$this->form_validation->set_rules('category', 'Catégorie', 'required');

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('dashboard/layouts/header', $header_data);
				$this->load->view('dashboard/activities/create', $data);
				$this->load->view('dashboard/layouts/footer');
			} else {

				if (isset($_FILES["post_image"]["name"])) {

					$config['upload_path'] = './assets/img/blog/';
					$config['allowed_types'] = 'jpg|png|webp|jpeg';

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

					$postData = array(

						'title' => htmlentities($this->input->post('post_title')),
						'slug' => url_title(str_to_noaccent($this->input->post('post_title'))),
						'body' => $this->input->post('post_description'),
						'id_category' => $this->input->post('category'),
						'post_image' => $file
					);


					$this->activity_model->create_activity($postData);
					//Set_messages
					$this->session->set_flashdata('success', 'Votre publication a été créée avec succès !');
					redirect('activities/liste');
				}
			}
		} else {
			redirect('/login');
		}
	}



	/* Activités récentes*/
	public function liste()
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

	public function edit($slug)
	{

		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {
			$data['activity'] = $this->activity_model->get_posts($slug);

			if (!empty($data['activity'])) {

				$header_data  = [
					'title' => 'Activités',
					'subtitle' => 'Nouvelle activité',
					'session_data' => $sess_data
				];

				$data = [
					'categories' => $this->activity_model->get_categories(),
					'session_data' => $header_data,
					'activity' => $data['activity']
				];

				$this->load->view('dashboard/layouts/header', $header_data);
				$this->load->view('dashboard/activities/edit', $data);
				$this->load->view('dashboard/layouts/footer');
			} else return false;
		} else {
			redirect('/login');
		}
	}

	public function update($slug)
	{
		$data = array(
			'title' => htmlentities($this->input->post('post_title')),
			'slug' => url_title(str_to_noaccent($this->input->post('post_title'))),
			'body' => $this->input->post('post_description'),
			'updated_at' => date('Y-m-d'),
			'id_category' => $this->input->post('category')
		);

		$this->activity_model->update_activity($data, $slug);
		//Set_messages
		$this->session->set_flashdata('success', 'Votre article a été modifié avec succès !');
		redirect('activities/liste');
	}

	public function delete($id)
	{
		$this->activity_model->delete_activity($id);
		//Set_messages
		$this->session->set_flashdata('success', 'Votre article a été suprimé avec succès !');
		redirect('activities/liste');
	}
}
