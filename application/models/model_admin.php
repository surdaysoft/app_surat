<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	
	public function tampil_jenis()
	{
		return $this->db->get('tb_jenis_surat');
	}

	public function tampil_surat_keluar()
	{
		return $this->db->query("SELECT a.*, b.jenis_id, b.jenis_surat FROM tb_surat_keluar as a, tb_jenis_surat as b WHERE a.jenis_id=b.jenis_id");
	}
/*
	public function edit_jenis($id)
	{
		return $this->db->get_where('tb_jenis_surat',array('jenis_id'=>$id));
	}
*/
	public function hapus_jenis($id)
	{
		return $this->db->delete('tb_jenis_surat', array('jenis_id' => $id));
	}

	public function hapus_surat_keluar($id)
	{
		return $this->db->delete('tb_surat_keluar', array('surat_id' => $id));
	}
}
