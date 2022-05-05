<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{

	public function produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->order_by('id_produk', 'desc');
		return $this->db->get()->result();
	}
	//menampilkan id tertinggi
	public function id_produk()
	{
		return $this->db->query('SELECT max(id_produk) as id FROM produk')->row();
	}

	public function add($data)
	{
		$this->db->insert('produk', $data);
	}

	public function detail($id_produk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->row();
	}
	public function detail_delete($id)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('id_produk', $id);
		return $this->db->get()->row();
	}
	public function update($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->update('produk', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
}
