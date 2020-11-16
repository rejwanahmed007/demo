<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->model("item_db");
	}

		public function index()
		{

			$this->load->view('modal_view');

		}

	}
