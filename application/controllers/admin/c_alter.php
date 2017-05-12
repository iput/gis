<?php defined('BASEPATH')OR exit('tidak ada akses yang diizinkan untuk halaman ini');
/**
 *
 */
 class C_alter extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
    $this->load->model('M_jalan');
 	}

 	public function index()
 	{
 		if ($this->session->userdata('username')&&$this->session->userdata('email')) {
      $data['alternatif'] = $this->M_jalan->getAlter();
      $this->load->view('attribute/adm_header');
   		$this->load->view('admin/v_alter',$data);
   		$this->load->view('attribute/adm_footer');
 		}else{
      redirect('admin/admin/login');
    }
 	}

 	public function add_alter()
 	{
    if ($this->session->userdata('username')&&$this->session->userdata('email')) {
      $data['jalan'] = $this->M_jalan->getAllJalan();
      $this->load->view('attribute/adm_header');
      $this->load->view('admin/add_alter', $data);
      $this->load->view('attribute/adm_footer');
    }else{
      redirect('admin/admin/login');
    }
 	}

  public function insertAlter()
  {
  $data_in = array(
    "lokasi_jalan"=>$this->input->post('txtAlter'),
    "lat"=>$this->input->post('txtLat'),
    "long"=>$this->input->post('txtLong'),
    "alter_tempuh"=>$this->input->post('cb_metode'),
    "id_jalan"=>$this->input->post('cb_nama_jalan'));
    $result = $this->M_jalan->add_alter($data_in);
    if ($result) {
      $this->session->set_flashdata('sukses','data berhasil ditambahkan');
      redirect('admin/c_alter');
    }else{
      redirect('admin/c_alter/add_alter');
    }
  }
public function deleteAlter($id)
{
  $result = $this->M_jalan->deleteAlter($id);
  if ($result>=1) {
    $this->session->set_flashdata('sukses','data berhasil dihapus');
    redirect('admin/C_alter');
  }
}
public function editalter($id)
{
  $data = $this->M_jalan->setalter($id);
  $dataEdit = array(
    "id_alter"=>$data[0]['id_alter'],
    "lokasi_jalan"=>$data[0]['lokasi_jalan'],
    "lat"=>$data[0]['lat'],
    "long"=>$data[0]['long'],
    "alter_tempuh"=>$data[0]['alter_tempuh']);
    $this->load->view('attribute/adm_header');
    $this->load->view('admin/edit_alter', $dataEdit);
    $this->load->view('attribute/adm_footer');
}
public function updatealter()
{
  $id = $this->input->post('id_alter');
  $data_in = array(
    "lokasi_jalan"=>$this->input->post('txtAlter'),
    "lat"=>$this->input->post('txtLat'),
    "long"=>$this->input->post('txtLong'),
    "alter_tempuh"=>$this->input->post('cb_metode'),
    "id_jalan"=>$this->input->post('cb_nama_jalan'));
    $result = $this->M_jalan->updatealter($data_in, $id);
    if ($result) {
      $this->session->set_flashdata('sukses','data berhasil ditambahkan');
      redirect('admin/c_alter');
    }else{
      redirect('admin/c_alter/add_alter');
    }
}
} ?>
