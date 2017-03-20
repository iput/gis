<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Alternatif extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header');
 		$this->load->view('user/Alternatif');
 		$this->load->view('attribute/footer');
 	}
 } ?>