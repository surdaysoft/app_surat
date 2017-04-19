<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->helper(array('url','form'));
		// $this->load->model('model_admin');
	}

	function index(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}

		$a['jenis']	= $this->model_admin->tampil_jenis()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_jenis
		$a['surat_keluar']	= $this->model_admin->tampil_surat_keluar()->num_rows();
		$a['page']	= "home";
		
		$this->load->view('admin/index', $a);
	}	

	/* Fungsi Jenis Surat */
	function jenis_surat(){
		$a['data']	= $this->model_admin->tampil_jenis()->result_object();
		$a['page']	= "jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_jenis(){
		$a['page']	= "tambah_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function insert_jenis(){
		
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_surat' => $jenis
			);
		$this->db->insert('tb_jenis_surat', $object);

		redirect('admin/jenis_surat','refresh');
	}

	function edit_jenis($id){
		$a['editdata']	= $this->db->get_where('tb_jenis_surat',array('jenis_id'=>$id))->result_object();		
		$a['page']	= "edit_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function update_jenis(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_surat' => $jenis
			);
		$this->db->where('jenis_id', $id);
		$this->db->update('tb_jenis_surat', $object); 

		redirect('admin/jenis_surat','refresh');
	}

	function hapus_jenis($id){
		
		$this->model_admin->hapus_jenis($id);
		redirect('admin/jenis_surat','refresh');
	}


	/* Fungsi Surat Keluar */
	function surat_keluar(){
		$a['data']	= $this->model_admin->tampil_surat_keluar()->result_object();
		$a['page']	= "surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_surat_keluar(){
		$a['page']	= "tambah_surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function insert_surat_keluar(){
		
		$jenis = $this->input->post('jenis');
		$no = $this->input->post('no');
		$tgl = $this->input->post('tgl');
		$untuk = $this->input->post('untuk');
		$perihal = $this->input->post('perihal');
		$ket = $this->input->post('ket');
		$object = array(
				'jenis_id' => $jenis,
				'no_surat' => $no,
				'tgl_surat' => $tgl,
				'untuk' => $untuk,
				'perihal' => $perihal,
				'ket' => $ket
			);
		$this->db->insert('tb_surat_keluar', $object);

		redirect('admin/surat_keluar','refresh');
	}

	function edit_surat_keluar($id){
		$a['editdata']	= $this->db->get_where('tb_surat_keluar',array('surat_id'=>$id))->result_object();		
		$a['page']	= "edit_surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function update_surat_keluar(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$no = $this->input->post('no');
		$tgl = $this->input->post('tgl');
		$untuk = $this->input->post('untuk');
		$perihal = $this->input->post('perihal');
		$ket = $this->input->post('ket');
		$object = array(
				'jenis_id' => $jenis,
				'no_surat' => $no,
				'tgl_surat' => $tgl,
				'untuk' => $untuk,
				'perihal' => $perihal,
				'ket' => $ket
			);
		$this->db->where('surat_id', $id);
		$this->db->update('tb_surat_keluar', $object); 

		redirect('admin/surat_keluar','refresh');
	}


	function hapus_surat_keluar($id){
		
		$this->model_admin->hapus_surat_keluar($id);
		redirect('admin/surat_keluar','refresh');
	}


}

