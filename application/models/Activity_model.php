<?php
class Activity_model extends  CI_Model
{

	public function get_posts($slug = false, $limit = FALSE, $offset = FALSE, $categoryID=null)
	{
		$this->db->join('tgr_categories', 'tgr_categories.id_category = tgr_activities.id_category');

		if( $this->input->post('requestKey') !== null){

			$keyWorlds = htmlentities($this->input->post('requestKey'));

			$this->db->like('title', $keyWorlds);
			$this->db->or_like('body', $keyWorlds);

			$query = $this->db->get('tgr_activities');
			return $query->result();

		}else{
			if (!empty($limit)) {
				$this->db->limit($limit, $offset);
			}
	
			if ($slug === false) {
				$this->db->order_by('tgr_activities.id_activity', 'DESC');
	
				if (!empty($categoryID)) {
					$this->db->where('tgr_activities.id_category', $categoryID);
				}
	
				$query = $this->db->get('tgr_activities');
				return $query->result();
			}
	
			$query = $this->db->get_where('tgr_activities', array('slug' => $slug));
			return $query->row_array();
		}
		
	}

	//Function qui sélectionne les catégories
	public function get_categories()
	{
		$this->db->order_by('name');
		$query = $this->db->get('tgr_categories');
		return $query->result();
	}


	public function create_activity($postData)
	{
		return $this->db->insert('tgr_activities', $postData);
	}


	public function delete_activity($id)
	{
		$image_file_name = $this->db->select('post_image')->get_where('tgr_activities', array('id_activity' => $id))->row()->post_image;
		$cwd = getcwd(); //Save the current working directory
		$image_file_path = $cwd . "\\assets\\img\\blog\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); //Restore the preview working directory
		$this->db->where('id_activity', $id);
		$this->db->delete('tgr_activities');
		return true;
	}
	public function update_activity($data, $slug)
	{
		$this->db->where('slug', $slug);
		return $this->db->update('tgr_activities', $data);
	}
}
