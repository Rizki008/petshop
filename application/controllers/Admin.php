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

	public function lokasi()
	{
		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('kota', 'Kota', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('no_tlpn', 'No Telphon', 'required', array('required' => '%s Mohon Untuk Diisi'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Setting',
				'lokasi' => $this->m_admin->data_lokasi(),
				'isi' => 'layout/backend/lokasi/v_lokasi'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id' => 1,
				'lokasi' => $this->input->post('kota'),
				'nama_toko' => $this->input->post('nama_toko'),
				'alamat' => $this->input->post('alamat'),
				'no_tlpn' => $this->input->post('no_tlpn')
			);
			$this->m_admin->edit($data);
			$this->session->set_flashdata('pesan', 'Lokasi Toko berhasil di update');
			redirect('admin/lokasi');
		}
		// $data = array(
		// 	'title' => 'Setting',
		// 	'lokasi' => $this->m_admin->data_lokasi(),
		// 	'isi' => 'layout/backend/lokasi/v_lokasi'
		// );
		// $this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
}
