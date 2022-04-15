<?php

class VideoModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load('database');
	}

	public function getVideos()
	{
		$this->db->order_by('video_id');
		return $this->db->get('tgr_videos')->result();
	}
}
