<?php defined('BASEPATH')OR exit('tidak ada akses terhadap jalan ini');
/**
 * 
 */
 class C_kemacetan extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/v_kemacetan');
 		$this->load->view('attribute/adm_footer');
 	}
 } ?>