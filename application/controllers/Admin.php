<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_transaksi');
		$this->load->model('m_pesanan_masuk');
	}
	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'total_produk' => $this->m_admin->total_produk(),
			'total_pesanan' => $this->m_admin->total_pesanan(),
			'total_pelanggan' => $this->m_admin->total_pelanggan(),
			'total_transaksi' => $this->m_admin->total_transaksi(),
			'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
			'grafik' => $this->m_transaksi->grafik(),
			'grafik_kelamin' => $this->m_transaksi->grafik_kelamin(),
			'user' => $this->m_admin->user(),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function user()
	{
		$data = array(
			'title' => 'Data Pengelola',
			'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
			'grafik' => $this->m_transaksi->grafik(),
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
				'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
				'grafik' => $this->m_transaksi->grafik(),
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
	}

	public function proses($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'status_order' => 1
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di proses');
		redirect('pesanan_masuk');
	}

	public function kirim($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'no_resi' => $this->input->post('no_resi'),
			'status_order' => 2
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di kirim');
		redirect('pesanan_masuk');
	}

	public function detail($no_order)
	{
		$data = array(
			'title' => 'Pesanan',
			'pesanan' => $this->m_transaksi->pesanan($no_order),
			'pesanan_detail' => $this->m_transaksi->pesanan_detail($no_order),
			'diproses_pesanan' => $this->m_pesanan_masuk->diproses_pesanan(),
			'proses_kirim' => $this->m_pesanan_masuk->proses_kirim(),
			'isi' =>  'layout/backend/transaksi/v_detail'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
}
