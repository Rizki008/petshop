<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Diskon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_diskon');
		$this->load->model('m_produk');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Produk Diskon',
			'diskon' => $this->m_diskon->diskon(),
			'isi' => 'layout/backend/diskon/v_diskon'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('id_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('diskon', 'Jumlah Diskon', 'required', array('required' => '%s Mohon Untuk Diisi'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah Diskon',
				'produk' => $this->m_produk->produk(),
				'isi' => 'layout/backend/diskon/v_add'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_produk' => $this->input->post('id_produk'),
				'nama_diskon' => $this->input->post('nama_diskon'),
				'diskon' => $this->input->post('diskon'),
			);
			$this->m_diskon->add($data);
			$this->session->set_flashdata('pesan', 'Diskon Berhasil Ditambahkan');
			redirect('diskon');
		}
		$data = array(
			'title' => 'Tambah Diskon',
			'produk' => $this->m_produk->produk(),
			'isi' => 'layout/backend/diskon/v_add'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_diskon = NULL)
	{
		$data = array(
			'id_diskon' => $id_diskon,
		);
		$this->m_diskon->delete($data);
		$this->session->set_flashdata('pesan', 'Diskon Berhasil Dihapus');
		redirect('diskon');
	}
}

/* End of file Controllername.php */
