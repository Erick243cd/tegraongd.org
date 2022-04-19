<?php

class Videos extends CI_Controller
{
	public function index()
	{
		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {

			$sess_data = [
				'title' => 'Vidéos',
				'subtitle' => 'Liste de vidéos',
				'session_data' => $sess_data
			];

			$data = [
				'videos' => $this->videoModel->getVideos(),
				'session_data' => $sess_data
			];

			$this->load->view('dashboard/layouts/header', $sess_data);
			$this->load->view('dashboard/videos/index', $data);
			$this->load->view('dashboard/layouts/footer');
		} else {
			redirect('/login');
		}
	}

	public function create()
	{
		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {

			$header_data  = [
				'title' => 'Vidéos',
				'subtitle' => 'Nouvelle vidéo',
				'session_data' => $sess_data
			];

			$data = [
				'session_data' => $header_data,
			];

			$this->form_validation->set_rules('videoTitle', 'Titre de la vidéo', 'required');
			$this->form_validation->set_rules(
				'youtubeLink',
				'Lien Youtube',
				'required|valid_url'
			);

			if ($this->form_validation->run() == FALSE) {

				$this->load->view('dashboard/layouts/header', $header_data);
				$this->load->view('dashboard/videos/create', $data);
				$this->load->view('dashboard/layouts/footer');
			} else {

				if (isset($_FILES["coverImage"]["name"])) {

					$config['upload_path'] = './assets/img/covers/';
					$config['allowed_types'] = 'jpg|png|webp|jpeg';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('coverImage')) {
						$file = 'no_file.';
					} else {
						$string = $_FILES["coverImage"]["name"];
						$pattern = '# #';
						$replacement = "_";
						$data = $this->upload->data();
						$file = preg_replace($pattern, $replacement, $string);
					}

					$videoData = array(

						'video_title' => htmlentities($this->input->post('videoTitle')),
						'video_slug' => url_title(str_to_noaccent($this->input->post('videoTitle'))) . '-' . date('Y-d-m'),
						'video_link' => htmlentities($this->input->post('youtubeLink')),
						'cover_image' => $file
					);
				
					$this->videoModel->createVideo($videoData);
					//Set_messages
					$this->session->set_flashdata('success', 'La vidéos a été créée avec succès !');
					redirect('videos/index');
				}
			}
		} else {
			redirect('/login');
		}
	}

	public function edit($slug)
	{
		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {
			$data['video'] = $this->videoModel->getVideo($slug);

			if (!empty($data['video'])) {

				$header_data  = [
					'title' => 'Videos',
					'subtitle' => 'Editer video',
					'session_data' => $sess_data
				];

				$data = [
					'session_data' => $header_data,
					'video' => $data['video']
				];
				
				$this->load->view('dashboard/layouts/header', $header_data);
				$this->load->view('dashboard/videos/edit', $data);
				$this->load->view('dashboard/layouts/footer');
			} else return false;
		} else {
			redirect('/login');
		}
	}

	public function update($slug)
	{
		$data = array(
			'video_title' => htmlentities($this->input->post('videoTitle')),
			'video_slug' => url_title(str_to_noaccent($this->input->post('videoTitle'))) . '-' . date('Y-d-m'),
			'video_link' => htmlentities($this->input->post('youtubeLink'))
		);

		
		$this->videoModel->updateVideo($data, $slug);
		//Set_messages
		$this->session->set_flashdata('success', 'Le contenu de la vidéo a été modifié avec succès !');
		redirect('videos/index');
	}

	public function delete($id)
	{
		$this->videoModel->deleteVideo($id);
		//Set_messages
		$this->session->set_flashdata('success', 'La video a été suprimée avec succès !');
		redirect('videos/index');
	}
}
