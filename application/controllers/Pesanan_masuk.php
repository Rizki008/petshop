<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_masuk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan_masuk');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Pesanan Masuk',
			'pesanan' => $this->m_pesanan_masuk->pesanan(),
			'pesanan_diproses' => $this->m_pesanan_masuk->pesanan_diproses(),
			'pesanan_dikirim' => $this->m_pesanan_masuk->pesanan_dikirim(),
			'pesanan_selesai' => $this->m_pesanan_masuk->pesanan_selesai(),
			'proses_kirim' => $this->m_pesanan_masuk->proses_kirim(),
			'isi' => 'layout/backend/transaksi/v_pesanan'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	// public function add()
	// {
	// }

	// //Update one item
	// public function update($id = NULL)
	// {
	// }

	// //Delete one item
	// public function delete($id = NULL)
	// {
	// }
}

/* End of file Pesanan_masuk.php */
