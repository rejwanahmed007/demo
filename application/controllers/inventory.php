<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model("item_db");

	}
	
	public function index()
	{

		$this->load->view('welcome_page');
	}
	public function get_item_list()
	{
		$get_item_list = $this->item_db->get_item_list();

		echo json_encode($get_item_list);


	}
}
