<?php
class Modbank extends CI_Model
{
	public function gettbl_bank()
	{
		return $this->db->get('tbl_bank');
	}

	public function bankWhere($where)
	{
		return $this->db->get_where('bank', $where);
	}

	public function tambahbank($data = null)
	{
		$this->db->insert('tbl_bank', $data);
	}



	public function hapusbank($id)
	{
		$this->db->delete('tbl_bank', ['kd_bank' => $id]);
	}
}
