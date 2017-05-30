<?php defined('BASEPATH')OR exit('akses ditolak oleh user');
/**
 *
 */
 class Landing extends CI_controller
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_berita');
 	}

 	public function index()
 	{
 		$data['berita'] = $this->m_berita->GetAllBerita();
 		$this->load->view('landing', $data);
 	}

 	public function laporanBaru()
 	{
 		$data = array(
 			"judul_berita"=>$this->input->post('txtJudul'),
 			"isi_berita"=>$this->input->post('kritik'),
 			"penulis"=>$this->input->post('txtNama'),
 			"email"=>$this->input->post('txtEmail'),
 			"lokasi"=>$this->input->post('txtLokasi'),
 			"waktu_input" => date('Y:m:d'),
 			"lat" =>$this->input->post('txtLat'),
 			"lng"=>$this->input->post('txtLong'));

 		$this->m_berita->insertBerita($data);
 		redirect('landing');
 	}
 } ?>
