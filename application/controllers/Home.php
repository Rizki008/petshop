<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_home');
		$this->load->model('m_kategori');
		// $this->load->model('m_transaksi');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'PETSHOP',
			'produk' => $this->m_home->produk(),
			'best_deal_product' => $this->m_home->best_deal_product(),
			'diskon' => $this->m_home->diskon(),
			'best_deal_product_transaksi' => $this->m_home->best_deal_product_transaksi(),
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_home->kategori($id_kategori);
		$data = array(
			'title' => $kategori->nama_kategori,
			'produk' => $this->m_home->produk_all($id_kategori),
			'best_deal_product_transaksi' => $this->m_home->best_deal_product_transaksi(),
			'isi' => 'layout/frontend/kategori/v_kategori_produk'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}



	public function detail_produk($id_produk)
	{
		$data = array(
			'title' => 'Detail Produk',
			'gambar' => $this->m_home->gambar_produk($id_produk),
			'produk' => $this->m_home->detail_produk($id_produk),
			'related_products' => $this->m_home->related_products($id_produk),
			// 'reviews' => $this->m_home->reviews($id_produk),
			'isi' => 'layout/frontend/detail/v_detail_produk'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}

/* End of file Controllername.php */
