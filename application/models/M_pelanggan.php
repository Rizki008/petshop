<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{

	public function pelanggan_login($email, $password)
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where(array('email' => $email, 'password' => $password));
		return $this->db->get()->row();
	}
	public function register($data)
	{
		$this->db->insert('pelanggan', $data);
	}

	public function profil()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->order_by('id_pelanggan', 'desc');
		return $this->db->get()->result();
	}

	public function total_belanja()
	{
		// $this->db->where('status=0');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		return $this->db->get('transaksi')->num_rows();
	}

	public function total_transaksi()
	{
		// $this->db->where('status=3');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		return $this->db->get('transaksi')->num_rows();
	}
}
