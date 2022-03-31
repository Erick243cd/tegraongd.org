<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        if (date('Y-m-d')>='2022-12-01'){
            redirect(base_url());
        }elseif (date('Y')!= 2022) {
            redirect(base_url());
            $this->session->set_flashdata('connexion_failed', 'Connexion impossible, erreur de manipulation !');
        }else{
            $this->form_validation->set_rules('username', 'Nom utilisateur', 'required');
            $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|callback_authentification');
            if($this->form_validation->run()===FALSE){
                redirect(base_url('pages/connexion'));
                $this->session->set_flashdata('connexion_failed', 'Nom d\'utilisateur ou Mot de passe incorrect !');
            }else{
                $this->session->set_flashdata('connexion_success', 'Vous êtes maintenant connecté pour utiliser l\'application !');
                redirect(base_url('pages/dashboard'));

            }
        }
    }
    function authentification($password){
        $username = $this->input->post('username');
        $result = $this->login_model->login($username, $password);
        if($result){
            $sess_array=array();
            foreach ($result as $row){
                $sess_array= $arrayName=array(
                    'id' => $row->id,
                    'user_name' => $row->user_name,
                    'role_utilisateur' => $row->role_utilisateur,
                    'user_image'=> $row->user_image
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return true;
        }else{
            $this->session->set_flashdata('connexion_failed', 'Nom d\'utilisateur ou Mot de passe incorrect !');
            redirect(base_url('pages/connexion'));
        }
    }
}