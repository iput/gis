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

 } ?>
