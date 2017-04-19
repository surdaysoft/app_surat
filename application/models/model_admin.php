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

	public function cek_login($user, $pass)
	{
		$array = array('username' => $user, 'password' => $pass);

		$query = $this->db->where($array);

		$query = $this->db->get('login');

		return $query;
	}

	public function tampil_user()
	{
		return $this->db->get('login');
	}

	public function insert_user($object)
	{
		$this->db->insert('login', $object);
	}

	public function edit_user($id)
	{
		return $this->db->get_where('login',array('id_user'=>$id));
	}

	public function update_user($id, $object)
	{
		$this->db->where('id_user', $id);
		$this->db->update('login', $object); 
	}

	public function hapus_user($id)
	{
		return $this->db->delete('login', array('id_user' => $id));
	}
}
