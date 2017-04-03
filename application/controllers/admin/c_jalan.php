<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class C_jalan extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/v_jalan');
 		$this->load->view('attribute/adm_footer');
 	}

 	public function add_jalan()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/add_jalan');
 		$this->load->view('attribute/adm_footer');
 	}
 } ?>