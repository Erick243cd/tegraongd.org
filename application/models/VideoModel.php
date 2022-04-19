<?php
class VideoModel extends CI_Model
{
	protected $table;
	public function __construct()
	{
		parent::__construct();
		$this->table = 'tgr_videos';
	}

	public function getVideos()
	{
		$this->db->order_by('video_id', 'DESC');
		return $this->db->get($this->table)->result();
	}

	public function createVideo($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function getVideo($slug)
	{
		return $this->db->get_where($this->table, ['video_slug' => $slug])->row_array();
	}

	public function updateVideo($data, $slug)
	{
		$this->db->where('video_slug', $slug);
		return $this->db->update($this->table, $data);
	}

	public function deleteVideo($id){

		$image_file_name = $this->db->select('cover_image')->get_where($this->table, ['video_id' => $id])->row()->cover_image;
		$cwd = getcwd(); //Save the current working directory
		$image_file_path = $cwd . "\\assets\\img\\covers\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); //Restore the preview working directory

		$this->db->where('video_id', $id);
		return $this->db->delete($this->table);
	}
}
