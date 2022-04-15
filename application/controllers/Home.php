<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	//Load Dependencies

	// }

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'PETSHOP',
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}

/* End of file Controllername.php */
