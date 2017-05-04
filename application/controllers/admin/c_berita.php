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
 		$data = $this->m_berita->getAllBerita();
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/v_berita', array('berita'=>$data));
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

 		$this->form_validation->set_rules('txtJudulBerita','Judul Berita', 'required');
 		$this->form_validation->set_rules('txtKonten','Konten Berita', 'required');
 		$this->form_validation->set_rules('txtSumber','Judul Berita', 'required');

 		if ($this->form_validation->run()==FALSE) {
 			$this->session->set_flashdata('pesan_gagal', 'Ada kesalahan pada '.validation_errors());
 			return false;
 		}else{
 			$dataBerita = array(
 				"judul_berita"=>$this->input->post('txtJudulBerita'),
 				"isi_berita"=>$this->input->post('txtKonten'),
 				"foto_berita"=>$this->input->post('txtSumber'),
 				"waktu_input"=> date('Y:m:d'),
 				"waktu_update"=>date('h:m:s'),
 				"id_user"=>'1');
 			$result = $this->m_berita->insertBerita($dataBerita);
 			if ($result) {
 				$this->session->set_flashdata('sukses','Data Berita Berhasil ditambahkan');
 				redirect('admin/c_berita');
 			}
 		}
 	}

 	public function editBerita()
 	{
 		$id = $this->input->post('id_berita');
    $data = $this->m_berita->setBerita($id);
    $dataEdit = array(
      "id_berita"=>$data[0]['id_berita'],
      "judul_berita"=>$data[0]['judul_berita'],
      "foto_berita"=>$data[0]['foto_berita'],
      "isi_berita"=>$data[0]['isi_berita'],
      "id_user"=>$data[0]['id_user']);
      $this->load->view('attribute/adm_header');
      $this->load->view('admin/editBerita', $dataEdit);
      $this->load->view('attribute/adm_footer');
 	}

  public function updateBerita()
  {
    $id_berita = $this->input->post('id_berita');
    $dataUdate =array(
      "judul_berita"=>$this->input->post("txtJudulBerita"),
      "isi_berita"=>$this->input->post("txtKonten"),
      "foto_berita"=>$this->input->post("txtSumber"),
      "waktu_update"=>date('Y:m:d'),
      "id_user"=>'1');
      $update = $this->m_berita->updateBerita($dataUdate, $id_berita);
      if ($update>=0) {
        redirect('admin/c_berita');
      }
  }
 } ?>
