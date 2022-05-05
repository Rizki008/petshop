<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_diskon extends CI_Model
{

	public function diskon()
	{
		$this->db->select('*');
		$this->db->from('diskon');
		$this->db->join('produk', 'diskon.id_produk = produk.id_produk', 'left');
		$this->db->order_by('id_diskon', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('diskon', $data);
	}

	public function update($data)
	{
		$this->db->where('id_diskon', $data['id_diskon']);
		$this->db->update('diskon', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_diskon', $id);
		$this->db->delete('diskon');
	}
}
