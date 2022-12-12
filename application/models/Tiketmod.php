<?php
class Tiketmod extends CI_Model
{
	public function gettiket()
	{
		return $this->db->get('tbl_tiket');
	}

	public function tiketWhere($where)
	{
		return $this->db->get_where('tbl_tiket', $where);
	}

	public function tambahtiket($data = null)
	{
		$this->db->insert('tbl_tiket', $data);
	}



	public function hapus($kd_tiket)
	{
		$this->db->where('kd_tiket', $kd_tiket);
		$this->db->delete('tbl_tiket');
	}
}
