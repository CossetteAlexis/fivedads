<?php

class New_shop_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_countries()
	{
		$query = $this->db->get('countries');
		return $query->result_array();
	}

	public function get_cities()
	{
		$query = $this->db->get('cities');
		return $query->result_array();
	}

	public function get_codareas()
	{
		$query = $this->db->get('cod_areas');
		return $query->result_array();
	}
}
