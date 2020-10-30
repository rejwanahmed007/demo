<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_db extends CI_Model
{

	function __construct()
	{

		parent::__construct();

		$this->load->database();

	}
	public function get_item_list()
	{
		$this->db->select("*");
		$this->db->from("items");

		$result = $this->db->get()->result_array();

		// echo $result;

		if(count($result)>0)
		{
			return $result;
			
		}
	}

}