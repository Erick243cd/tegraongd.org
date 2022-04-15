<?php

class Videos extends CI_Controller {
	public function index(){
		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {

			$sess_data = [
				'title' => 'Vidéos',
				'subtitle' => 'Liste d\'activités',
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
}
