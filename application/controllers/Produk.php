<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_diskon');
		$this->load->model('m_kategori');
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Produk',
			'produk' => $this->m_produk->produk(),
			'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'layout/backend/produk/v_produk'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('berat', 'Berat Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('stock', 'stock Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));

		if ($this->form_validation->run() == TRUE) {

			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
			$config['max_size']  = '5000';
			$this->upload->initialize($config);
			$field_name = "gambar";

			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Tambah Produk',
					'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
					'grafik' => $this->m_transaksi->grafik(),
					'kategori' => $this->m_kategori->kategori(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'layout/backend/produk/v_add'
				);
				$this->load->view('layout/backend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'harga' => $this->input->post('harga'),
					'berat' => $this->input->post('berat'),
					'stock' => $this->input->post('stock'),
					'deskripsi' => $this->input->post('deskripsi'),
					'images' => $upload_data['uploads']['file_name'],
				);
				$this->m_produk->add($data);

				//menambahkan otomatis diskon 0
				$id = $this->m_produk->id_produk();
				$i = $id->id;
				$diskon = array(
					'id_produk' => $i,
					'nama_diskon' => '0',
					'diskon' => '0',
				);
				$this->m_diskon->add($diskon);
				$this->session->set_flashdata('pesan', 'Produk Berhasil Ditambah');
				redirect('produk');
			}
		}
		$data = array(
			'title' => 'Tambah Produk',
			'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
			'grafik' => $this->m_transaksi->grafik(),
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'layout/backend/produk/v_add'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function update($id_produk = NULL)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('berat', 'Berat Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('stock', 'Stock Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));

		if ($this->form_validation->run() == TRUE) {

			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
			$config['max_size']  = '5000';
			$this->upload->initialize($config);
			$field_name = "gambar";

			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Edit Produk',
					'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
					'grafik' => $this->m_transaksi->grafik(),
					'kategori' => $this->m_kategori->kategori(),
					'produk' => $this->m_produk->detail($id_produk),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'layout/backend/produk/v_edit'
				);
				$this->load->view('layout/backend/v_wrapper', $data, FALSE);
			} else {
				//hapus gambar dari folder
				$produk = $this->m_produk->detail($id_produk);
				if ($produk->images !== "") {
					unlink('./assets/gambar/' . $produk->images);
				}
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_produk' => $id_produk,
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'harga' => $this->input->post('harga'),
					'berat' => $this->input->post('berat'),
					'stock' => $this->input->post('stock'),
					'deskripsi' => $this->input->post('deskripsi'),
					'images' => $upload_data['uploads']['file_name'],
				);
				$this->m_produk->update($data);
				$this->session->set_flashdata('pesan', 'Produk Berhasil Ditambah');
				redirect('produk');
			}
			//tanpa ganti gambar
			$data = array(
				'id_produk' => $id_produk,
				'nama_produk' => $this->input->post('nama_produk'),
				'id_kategori' => $this->input->post('id_kategori'),
				'harga' => $this->input->post('harga'),
				'berat' => $this->input->post('berat'),
				'stock' => $this->input->post('stock'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
			$this->m_produk->update($data);
			$this->session->set_flashdata('pesan', 'Produk Berhasil Ditambah');
			redirect('produk');
		}
		$data = array(
			'title' => 'Tambah Produk',
			'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
			'grafik' => $this->m_transaksi->grafik(),
			'kategori' => $this->m_kategori->kategori(),
			'produk' => $this->m_produk->detail($id_produk),
			'isi' => 'layout/backend/produk/v_edit'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function delete($id = NULL)
	{
		//hapus gambar
		$produk = $this->m_produk->detail_delete($id);
		if ($produk->images !== "") {
			unlink('./assets/gambar/' . $produk->images);
		}
		$this->m_produk->delete($id);
		$this->m_diskon->delete($id);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('produk');
	}
}
