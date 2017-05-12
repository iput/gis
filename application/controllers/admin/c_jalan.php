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
 		if ($this->session->userdata('username')&&$this->session->userdata('email')) {
      $data = $this->m_jalan->getAllJalan();
   		$this->load->view('attribute/adm_header');
   		$this->load->view('admin/v_jalan', array('data_jalan'=>$data));
   		$this->load->view('attribute/adm_footer');
 		}
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
 				$datain = array(
 					"nama_jalan"=>$this->input->post('txtNamaJalan'),
 					"longitude"=>$this->input->post('txtLong'),
 					"latitude"=> $this->input->post('txtLat'),
 					"kondisi_jalan"=> "demo");

 				$this->m_jalan->insertJalan('jalan', $datain);

 				$this->session->set_flashdata('sukses','data berhasil ditambahkan');

 				redirect('admin/c_jalan/index');
 			}
 		}

    public function deleteJalan($id)
    {
      $data = $this->m_jalan->deleteJalan($id);
      if ($data>=1) {
        $this->session->set_flashdata('sukses','data berhasil dihapus');
        redirect('admin/C_jalan');
      }
    }

    public function editJalan()
    {
      $id = $this->input->post('idJalan');
      $datain = $this->m_jalan->setJalan($id);
      $edit = array(
        "id_jalan"=>$datain[0]['id_jalan'],
        "kondisi"=>$datain[0]['kondisi_jalan'],
        "nama_jalan"=>$datain[0]['nama_jalan'],
        "longitude"=>$datain[0]['longitude'],
        "latitude"=>$datain[0]['latitude']);
        $this->load->view('attribute/adm_header');
        $this->load->view('admin/edit_jalan', $edit);
        $this->load->view('attribute/adm_footer');
    }
    public function update_jalan()
    {
      $id = $this->input->post('idJalan');
      $dataUpdate = array(
        "nama_jalan"=>$this->input->post('edit_txtNamaJalan'),
        "longitude"=>$this->input->post('edit_txtLong'),
        "latitude"=>$this->input->post('edit_txtLat'),
        "kondisi_jalan"=>$this->input->post('kondisijalan'));
        $result = $this->m_jalan->update_jalan($dataUpdate, $id);
        if ($result) {
          $this->session->set_flashdata('sukses','data berhasil di update');
          redirect('admin/c_jalan');
        }
    }

 } ?>
