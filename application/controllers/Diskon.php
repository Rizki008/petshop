<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Diskon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_diskon');
		$this->load->model('m_produk');
		$this->load->model('m_transaksi');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Produk Diskon',
			'diskon' => $this->m_diskon->diskon(),
			'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'layout/backend/diskon/v_diskon'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function update($id_diskon = NULL)
	{
		$data = array(
			'id_diskon' => $id_diskon,
			'nama_diskon' => $this->input->post('nama_diskon'),
			'diskon' => $this->input->post('diskon'),
		);
		$this->m_diskon->update($data);
		$this->session->set_flashdata('pesan', 'Diskon Berhasil Dihapus');
		redirect('diskon');
	}
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
