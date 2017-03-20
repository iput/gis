<?php defined('BASEPATH')OR exit('akses ditolak oleh user');
/**
 * 
 */
 class Landing extends CI_controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header');
 		$this->load->view('user/landing');
 		$this->load->view('attribute/footer');
 	}
 } ?>