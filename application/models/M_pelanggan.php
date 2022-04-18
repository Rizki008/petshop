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
}
