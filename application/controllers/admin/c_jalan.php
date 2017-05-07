<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 *
 */
 class C_jalan extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_jalan');
 	}

 	public function index()
 	{
 		if ($this->session->userdata('username')&&$this->session->userdata('email')) {
      $data = $this->m_jalan->getAllJalan();
   		$this->load->view('attribute/adm_header');
   		$this->load->view('admin/v_jalan', array('data_jalan'=>$data));
   		$this->load->view('attribute/adm_footer');
 		}
 	}
  public function trackJalan()
  {
    $this->load->library('googlemaps');
    $sAdd = $this->input->post('asal');
    $dAddr = $this->input->post('tujuan');
    $config['center']='-7.952574, 112.596266';
    $config['zoom']='auto';
    $config['directions']=TRUE;
    $config['directionsStart']='$sAdd';
    $config['directionsEnd']='$dAddr';
    $config['directionsDivID']='directionDiv';
    $this->googlemaps->initialize($config);
    $data['map']=$this->googlemaps->create_map();
    $this->load->view('attribute/adm_header');
    $this->load->view('admin/track', $data);
    $this->load->view('attribute/adm_footer');
  }
 	public function add_jalan()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/add_jalan');
 		$this->load->view('attribute/adm_footer');
 	}

 	public function insert_jalan()
 	{
 		$this->form_validation->set_rules('txtNamaJalan','nama jalan', 'required');
 		$this->form_validation->set_rules('txtLong','koordinat 1', 'required');
 		$this->form_validation->set_rules('txtLat','koordinat 2', 'required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->session->set_flashdata('pesan_gagal', 'Ada kesalahan pada '.validation_errors());
 			return false;
 		}else{
 				$datain = array(
 					"nama_jalan"=>$this->input->post('txtNamaJalan'),
 					"longitude"=>$this->input->post('txtLong'),
 					"latitude"=> $this->input->post('txtLat'),
 					"foto_jalan"=> "demo");

 				$this->m_jalan->insertJalan('jalan', $datain);

 				$this->session->set_flashdata('pesan_sukses','data berhasil ditambahkan');

 				redirect('admin/c_jalan/index');
 			}
 		}

 } ?>
