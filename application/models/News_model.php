<?php

class News_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_news()
	{
		/* $this->db->select('id, title'); */
		$query = $this->db->get('news', 10);
		return $query->result();
	}
}
