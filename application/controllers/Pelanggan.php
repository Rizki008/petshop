<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('m_home');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('no_tlpn', 'No telpon', 'required', array('required' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() ==  FALSE) {
			$data = array(
				'title' => 'Register Pelanggan Petshop',
				'isi'  => 'layout/frontend/register/v_register'
			);
			$this->load->view('layout/frontend/register/v_register', $data, FALSE);
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'no_tlpn' => $this->input->post('no_tlpn'),
			);
			$this->m_pelanggan->register($data);
			$this->session->set_flashdata('pesan', 'Register Berhasi, Silahkan Untuk Login');
			redirect('pelanggan/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->pelanggan_login->login($email, $password);
		}
		$data = array(
			'title' => 'Login pelanggan',
			'isi'  => 'layout/frontend/login/v_login'
		);
		$this->load->view('layout/frontend/login/v_login', $data, FALSE);
	}

	public function logout()
	{
		$this->pelanggan_login->logout();
	}
}
