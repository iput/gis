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
 		$data = $this->m_jalan->getAllJalan();
 		$this->load->view('attribute/adm_header');
 		$this->load->view('admin/v_jalan', array('data_jalan'=>$data));
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
 			$filename ="webgis_".time();
 			$config['upload_path'] ='./upload_file/';
 			$config['allowed_types'] ='jpg|bmp|png';
 			$config['max_size'] ='2000';
 			$config['max_width'] ='2000';
 			$config['max_height'] ='2000';
 			$config['file_name'] = $filename;

 			$this->load->library('upload',$config);

 			if (!$this->upload->do_upload('userfile')) {
 				$dataerror = $this->upload->display_errors();
 				$this->session->set_flashdata('pesan_gagal', 'terjadi kesalahan pada'.$dataerror);
 			}else{
 				$image = $this->upload->data();
 				$datain = array(
 					"nama_jalan"=>$this->input->post('txtNamaJalan'),
 					"longitude"=>$this->input->post('txtLong'),
 					"latitude"=> $this->input->post('txtLat'),
 					"foto_jalan"=> $image['file_name']);
 				
 				$this->m_jalan->insertJalan('jalan', $datain);

 				$this->session->set_flashdata('pesan_sukses','data berhasil ditambahkan');
 				
 				redirect('admin/c_jalan/index');
 			}
 		}
 	}
 } ?>