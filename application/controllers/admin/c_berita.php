<?php defined('BASEPATH')OR exit('tidak ada akses yang diizinkan untuk halaman ini');
/**
 * 
 */
 class C_berita extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_berita');
 		$this->load->library('upload');
 	}

 	public function index()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/v_berita');
 		$this->load->view('attribute/adm_footer');
 	}

 	public function beritaBaru()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/beritaBaru');
 		$this->load->view('attribute/adm_footer');
 	}

 	public function TambahBerita()
 	{
 		$config['upload_path']='./uploads/';
 		$config['allowed_types']='jpeg|jpg|bmp|png';
 		$config['max_size']='1000';
 		$config['max_width']='2000';
 		$config['max_height']='2000';
 		$this->upload->initialize($config);
 		$this->load->library('upload',$config);

 		if (!$this->upload->do_upload('userfile')) {
 			echo "terjadi kesalahan";
 			return false;
 		}else{
 			$img = $this->upload->data();
 			$dataBerita = array(
 				"judul_berita"=>$this->input->post('txtJudulBerita'),
 				"isi_berita"=>$this->input->post('txtKonten'),
 				"foto_berita"=>$img,
 				"waktu_input"=> time(),
 				"id_user"=>'1');
 			$result = $this->m_berita->insertBerita($dataBerita);
 			if ($result) {
 				redirect('admin/c_berita');
 			}
 		}
 	}
 } ?>
