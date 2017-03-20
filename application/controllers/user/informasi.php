<?php defined('BASEPATH')OR exit('no direct sript access allowed');
/**
 * 
 */
 class Informasi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function index()
 	{
 		$this->load->view('attribute/header');
 		$this->load->view('user/info_macet');
 		$this->load->view('attribute/footer');
 	}
 } ?>