<?php defined('BASEPATH')OR exit('no direct access script allowed');
/**
 *
 */
 class Admin extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
    $this->load->model('m_jalan', 'jalan');
 	}

  public function login()
  {
    $this->load->view('login');
  }
 	public function index()
 	{
    $data['map']=$this->jalan->get_coordinte();
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/blank', $data);
 		$this->load->view('attribute/adm_footer');
 	}
 } ?>
