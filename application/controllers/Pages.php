<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pages extends CI_Controller{
        public function view($page='home')
        {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
        }
        $data['title']=ucfirst($page); //Ceci recupere le nom de la page et l'affiche dans title en majusle sur la première lettre
        $data['posts']=$this->activity_model->get_posts($slug= false, $offest=0, $limit=6);

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
        }

        public function dashboard(){
        $data['categories']= $this->activity_model->get_categories();
        $this->load->view('templates/header');
        $this->load->view('dashboard/main', $data);
        $this->load->view('templates/footer');
        }

        function connexion(){
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer'); 
        }
        function logout(){

        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(base_url('pages/connexion'));
        }
}