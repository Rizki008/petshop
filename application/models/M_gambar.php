<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class M_gambar extends CI_Model
{

	// List all your items
	public function gambar()
	{
		$this->db->select('produk.*,COUNT(gambar.id_gambar) as total_gambar');
		$this->db->select('gambar.img');
		$this->db->from('produk');
		$this->db->join('gambar', 'produk.id_produk = gambar.id_produk', 'left');
		$this->db->group_by('produk.id_produk');
		$this->db->order_by('produk.id_produk', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_gambar)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_gambar', $id_gambar);
		return $this->db->get()->row();
	}

	public function detail_gambar($id_produk)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('gambar', $data);
	}

	//Delete one item
	public function delete($data)
	{
		$this->db->where('id_gambar', $data['id_gambar']);
		$this->db->delete('gambar', $data);
	}
}

/* End of file M_gambar.php */
