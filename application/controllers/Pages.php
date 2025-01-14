<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pages extends CI_Controller
{
	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}
		if ($page === 'login' || $page === 'connexion') {
			$sess_data = $this->session->userdata('logged_in');
			if (!empty($sess_data)) {

				return $this->dashboard();
			} else {
				$this->load->view('pages/login');
			}
		} else {
			$data = [
				'title' => ucfirst($page),
				'posts'	=> $this->activity_model->get_posts($slug = false, $offest = 0, $limit = 6),
				'videos'	=> $this->videoModel->getHomeVideos($offest = 0, $limit = 3)
			];

			$this->load->view('templates/header', ['title' => ucfirst($page)]);
			$this->load->view('pages/' . $page, $data);
			$this->load->view('templates/footer');
		}
	}

	public function dashboard()
	{
		$sess_data = $this->session->userdata('logged_in');
		if (!empty($sess_data)) {

			$data = ['session_data' => $sess_data];

			$this->load->view('dashboard/layouts/header', $data);
			$this->load->view('dashboard/main');
			$this->load->view('dashboard/layouts/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		return redirect(site_url('/login'));
	}
}
