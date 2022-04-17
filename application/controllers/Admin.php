<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}
	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'user' => $this->m_admin->user(),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function user()
	{
		$data = array(
			'title' => 'Data Pengelola',
			'user' => $this->m_admin->user(),
			'isi' => 'layout/backend/user/v_user'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level')
		);
		$this->m_admin->add($data);
		$this->session->set_flashdata('pesan', 'Data Pengelola telah ditambahkan');
		redirect('admin/user');
	}
	public function update($id_user = NULL)
	{
		$data = array(
			'id_user' => $id_user,
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level')
		);
		$this->m_admin->update($data);
		$this->session->set_flashdata('pesan', 'Data Pengelola telah Diupdate');
		redirect('admin/user');
	}
	public function delete($id_user = NULL)
	{
		$data = array(
			'id_user' => $id_user,
		);
		$this->m_admin->delete($data);
		$this->session->set_flashdata('pesan', 'Data Pengelola telah Dihaous');
		redirect('admin/user');
	}
}
