<?php
class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_users(){
        $this->db->order_by('user_name');
        $query = $this->db->get('scl_users');
        return $query->result();
    }

    public function get_user_id($id){
        $query=$this->db->get_where('scl_users', array('id'=>$id));
        return $query->row_array();
    }


    public function check_username(){
        $username=$this->input->post('username');

        $query=$this->db->get_where('scl_users', array('user_name'=>$username));
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }


    public function create_user(){
        $data=array(
            'user_name'=>$this->input->post('username'),
            'role_utilisateur'=>$this->input->post('role_user'),
            'password'=>password_hash('123456789', PASSWORD_BCRYPT),
            'user_image'=>'user_avatar.png'
        );
        return $this->db->insert('scl_users', $data);
    }

    public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('scl_users');
        return true;
    }

    public function get_user_by_sessions(){
        $session_data= $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        if(empty($data['id'])){
            return false;
        }else{
            $query=$this->db->get_where('scl_users',array('id'=>$data['id']));
            return $query->row_array();
        }
    }

    public function update_user($user_image){
        $password=$this->input->post('password');
        if(empty($password)){
            $data = array(
                'user_name'=>$this->input->post('username'),
                'user_image'=>$user_image
            );
        }else{
            $data = array(
                'user_name'=>$this->input->post('username'),
                'password'=>password_hash($password, PASSWORD_BCRYPT),
                'user_image'=>$user_image
            );
        }
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('scl_users', $data);
    }
    public function update_user_compte(){
        $data = array(
            'statut'=>$this->input->post('statut'),
            'role_utilisateur'=>$this->input->post('role_user')
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('scl_users', $data);
    }
}

