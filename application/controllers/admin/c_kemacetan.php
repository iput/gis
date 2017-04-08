<?php defined('BASEPATH')OR exit('tidak ada akses terhadap jalan ini');
/**
 * 
 */
 class C_kemacetan extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_jalan','jalan');
 		$this->load->model('m_macet','macet');
 	}

 	public function index()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/v_kemacetan');
 		$this->load->view('attribute/adm_footer');
 	}

 	public function add_kemacetan()
 	{
 		$dataJalan = $this->jalan->getAlljalan();
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/add_kemacetan', array('jalan'=>$dataJalan));
 		$this->load->view('attribute/adm_footer');	
 	}

 	public function tambahKemacetan()
 	{
 		$this->form_validation->set_rules('cb_jalan','nama jalan masih kosong', 'required');
 		$this->form_validation->set_rules('txtJam','waktu kemacetan','required');
 		$this->form_validation->set_rules('cb_level','tingkat kemacetan', 'required');
 		if ($this->form_validation->run()==FALSE) {
 			$this->session->set_flashdata('error','Terjadi kesalahan ketika menyimpan'.validation_errors());
 			return false;
 		}else{
 			$dataK= array(
 				"jam_kemacetan"=>$this->input->post('txtJam'),
 				"tingkat_kemacetan"=>$this->input->post('cb_level'),
 				"titik_kemacetan"=>$this->input->post('txtTitikMacet'),
 				"lng"=>$this->input->post('txtLng'),
 				"lat"=>$this->input->post('txLat'),
 				"id_jalan"=>$this->input->post('cb_jalan'));

 			$hasil = $this->macet->insertMacet($dataK);
 			if ($hasil) {
 				$this->session->set_flashdata('sukses','data berhasil disimpan');
 				redirect('admin/C_kemacetan');
 			}
 		}

 	}
 } ?>