<?php
class Users extends CI_Controller{
    public function index(){
        $data['title']='Utilisateurs';
        $data['users']=$this->user_model->get_users();

        $this->load->view('templates/header');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }
    public function create(){

        //Validation de formulaire
        $this->form_validation->set_rules('username','Nom d\utilisateur','required');
        $this->form_validation->set_rules('role_user','Role utilisateur','required');

        if($this->form_validation->run()===FALSE){
            redirect('users');
        }else{
            $result=$this->user_model->check_username();
            if($result){
                $this->session->set_flashdata('username_exist', "Le nom d'utilisateur que vous venez de saisir est déjà porté, veuillez changer par un autre!");
                redirect('users');
            }
            else{
                $this->user_model->create_user();
                //Set_messages
                $this->session->set_flashdata('user_created', 'Utilisateur crée avec succès !');
                redirect('users');
            }
        }
    }
    public function edit($id){
        $data['user']=$this->user_model->get_user_id($id);

        if(empty($data['user'])){
            redirect('users');
        }
        $data['title'] = 'Editer les informartions de base';

        $this->load->view('templates/header');
        $this->load->view('users/edit', $data);
        $this->load->view('templates/footer');
    }
    public function edit_compte($id){
        $data['user']=$this->user_model->get_user_id($id);

        if(empty($data['user'])){
            redirect('pages/dashboard');
        }
        $data['title'] = 'Editer les informations de l\'utilisateur';

        $this->load->view('templates/header');
        $this->load->view('users/edit_account', $data);
        $this->load->view('templates/footer');
    }
    public function update_compte(){

        $this->user_model->update_user_compte();
        //Set Message
        $this->session->set_flashdata('user_updated', 'L\'utilisateur a été modifiée avec succès !');
        redirect('users');

    }
    public function update(){
        //Upload Image
        $config['upload_path'] = './assets/img/users';
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']='10000';
        $config['max_width']='7500';
        $config['max_heigth']='7500';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()){
            $errors = array('error'=>$this->upload->display_errors());
            $id = $this->input->post('id');
            $data['user']=$this->user_model->get_user_id($id);
            $user_image = $data['user']['user_image'];
        }else{
            $data = array('upload_data' => $this->upload->data());
            $user_image = $_FILES['userfile']['name'];
        }
        $this->user_model->update_user($user_image);

        $session_data= $this->session->userdata('logged_in');
        $data['role_utilisateur'] = $session_data['role_utilisateur'];
        if ($data['role_utilisateur']=='admin'){
            //Set Message
            $this->session->set_flashdata('user_updated', 'Vos informations ont été modifiées !');
            redirect('users');
        }
        elseif ($data['role_utilisateur']=='gestionnaire'){
            $this->session->set_flashdata('user_updated', 'Vos informations ont été modifiées !');
            redirect('pages/dashboard');
        }

    }
    public function myaccount(){

        $data['title']='Mon compte';

        $data['user']=$this->user_model->get_user_by_sessions();

        $this->load->view('templates/header');
        $this->load->view('users/edit_account', $data);
        $this->load->view('templates/footer');
    }
    public function delete($id){
        $this->user_model->delete_user($id);
        $this->session->set_flashdata('user_deleted', 'L\'utilisateur a été supprimé avec succès !');
        redirect('users');
    }

}
