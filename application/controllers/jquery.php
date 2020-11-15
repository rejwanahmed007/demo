<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->model("item_db");
	}

		public function index()
		{
			// $this->load->view('jquery/ajaxComplete');
			// $this->load->view('jquery/serialize');
			// $this->load->view('jquery/serializeArray');
			// $this->load->view('jquery/jquery_get');
			$this->load->view('jquery/checked_Selector');

		}

	}
