<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_pesanan_masuk extends CI_Model
{

	public function update_order($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('transaksi', $data);
	}
}

/* End of file M_pesanan_masuk.php */
