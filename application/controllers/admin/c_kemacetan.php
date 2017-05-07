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
 		if ($this->session->userdata('username')&&$this->session->userdata('email')) {
      $datain = $this->macet->getAllMacet();
   		$this->load->view('attribute/adm_header');
   		$this->load->view('admin/v_kemacetan',array('macet'=>$datain));
   		$this->load->view('attribute/adm_footer');
 		}
 	}

 	public function add_kemacetan()
 	{
 		if ($this->session->userdata('username')&& $this->session->userdata('email')) {
      $dataJalan = $this->jalan->getAlljalan();
   		$this->load->view('attribute/adm_header');
   		$this->load->view('admin/add_kemacetan', array('jalan'=>$dataJalan));
   		$this->load->view('attribute/adm_footer');
 		}
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
 				"lat"=>$this->input->post('txtLat'),
 				"lng"=>$this->input->post('txtLong'),
 				"id_jalan"=>$this->input->post('cb_jalan'));

 			$result = $this->macet->insertMacet($dataK);

 			if ($result) {
 				$this->session->set_flashdata('sukses','Data Berhasil Disimpan');
 				redirect('admin/c_kemacetan');
 			}else{
 				redirect('admin/c_kemacetan/add_kemacetan');
 			}
 		}

 	}
 } ?>
