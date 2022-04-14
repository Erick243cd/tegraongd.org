<?php
class Activity_model extends  CI_Model
{

	public function get_posts($slug = false, $limit = FALSE, $offset = FALSE)
	{

		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		$this->db->join('tgr_categories', 'tgr_categories.id_category = tgr_activities.id_category');


		if ($slug === false) {
			$this->db->order_by('tgr_activities.id_activity', 'DESC');

			$query = $this->db->get('tgr_activities');
			return $query->result();
		}
		$query = $this->db->get_where('tgr_activities', array('slug' => $slug));
		return $query->row_array();
	}

	//Function qui sélectionne les catégories
	public function get_categories()
	{
		$this->db->order_by('name');
		$query = $this->db->get('tgr_categories');
		return $query->result();
	}


	//Function qui enleve les accents et qui traduit les caractères spéciaux
	public function str_to_noaccent($str)
	{
		$url = $str;
		$url = preg_replace('#Ç#', 'C', $url);
		$url = preg_replace('#ç#', 'c', $url);
		$url = preg_replace('#è|é|ê|ë#', 'e', $url);
		$url = preg_replace('#È|É|Ê|Ë#', 'E', $url);
		$url = preg_replace('#à|á|â|ã|ä|å#', 'a', $url);
		$url = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $url);
		$url = preg_replace('#ì|í|î|ï#', 'i', $url);
		$url = preg_replace('#Ì|Í|Î|Ï#', 'I', $url);
		$url = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $url);
		$url = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $url);
		$url = preg_replace('#ù|ú|û|ü#', 'u', $url);
		$url = preg_replace('#Ù|Ú|Û|Ü#', 'U', $url);
		$url = preg_replace('#ý|ÿ#', 'y', $url);
		$url = preg_replace('#Ý#', 'Y', $url);
		return ($url);
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
