<?php
class Modjadwal extends CI_Model
{
	public function getjadwal()
	{
		return $this->db->get('jadwal');
	}

	public function jadwalWhere($where)
	{
		return $this->db->get_where('jadwal', $where);
	}

	public function tambahjadwal($data = null)
	{
		$this->db->insert('buku', $data);
	}



	public function hapus($kd_jadwal)
	{
		$this->db->where('kd_jadwal', $kd_jadwal);
		$this->db->delete('tbl_jadwal');
	}
}
