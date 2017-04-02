<?php defined('BASEPATH')OR exit('no direct access script allowed');
/**
 * 
 */
 class Admin extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/blank');
 		$this->load->view('attribute/adm_footer');
 	}
 } ?>