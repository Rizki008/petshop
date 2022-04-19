<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
	public function produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('stock>=1');
		$this->db->order_by('id_produk', 'desc');
		$this->db->limit(8);
		return $this->db->get()->result();
	}

	public function kategori_poroduk()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get()->result();
	}

	public function detail_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = produk.id_kategori', 'left');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->row();
	}

	public function gambar_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->result();
	}

	public function kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id_kategori);
		return $this->db->get()->row();
	}

	public function produk_all($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('produk.id_kategori', $id_kategori);
		return $this->db->get()->result();
	}

	public function related_products($id_produk)
	{
		return $this->db->where(array('id_produk !=' => $id_produk))->limit(4)->get('produk')->result();
	}

	//diskon produk
	public function best_deal_product()
	{
		$this->db->from('produk');
		$this->db->where('is_available', 1);
		$this->db->order_by('diskon', 'desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}

	//diskon produk
	public function diskon()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->where('diskon>=1 and stock>=1');
		$this->db->order_by('id_produk', 'desc');
		return $this->db->get()->result();
	}

	//bagus produk
	public function best_deal_product_transaksi()
	{
		$this->db->select_sum('qty');
		$this->db->select('produk.gambar, produk.nama_produk, produk.harga, produk.diskon, produk.id_produk');
		$this->db->from('rinci_transaksi');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->group_by('rinci_transaksi.id_produk');
		$this->db->limit(4);
		return $this->db->get()->result();
	}
}
