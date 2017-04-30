<?php defined('BASEPATH')OR exit('tidak ada akses yang diizinkan untuk halaman ini');
/**
 *
 */
 class C_alter extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/v_alter');
 		$this->load->view('attribute/adm_footer');
 	}

 	public function add_alter()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/add_alter');
 		$this->load->view('attribute/adm_footer');
 	}

  public function getAlter()
  {

    $this->load-library('googlemaps');
    $sAdd = $this->input->post('asal');
    $dAddr = $this->input->post('tujuan');
    $config['center']='-7.952574, 112.596266';
    $config['zoom']='auto';
    $config['directions']=TRUE;
    $config['directionsStart']'$sAdd';
    $config['directionsEnd']='$dAddr';
    $config['directionsDivID']='directionDiv';
    $this->Googlemaps->initialize($config);
    $data['map']=$this->Googlemaps->create_map();
    $this->load->view('attribute/adm_header');
    $this->load->view('admin/track', $data);
    $this->load->view('attribute/adm_footer');
  }
 } ?>
