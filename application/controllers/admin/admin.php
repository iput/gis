<?php defined('BASEPATH')OR exit('no direct access script allowed');
/**
 *
 */
 class Admin extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
    $this->load->model('m_jalan', 'jalan');
    $this->load->model('m_login');
 	}

  public function login()
  {
    $this->load->view('login');
  }
 	public function index()
 	{
    if ($this->session->userdata('username')&&$this->session->userdata('email')) {
      $data['map']=$this->jalan->get_coordinte();
   		$this->load->view('attribute/adm_header');
   		$this->load->view('admin/blank', $data);
   		$this->load->view('attribute/adm_footer');
    }
 	}
  public function prosesLogin()
  {
    $idUser = "";
    $huser = "";
    $hemail = "";
    $hpassword="";
    $user =$this->input->post('txtemail');
    $password =$this->input->post('txtpassword');
    $data = $this->m_login->loginP($user, $password);
    foreach ($data as $hasil) {
      $idUser = $hasil['id_user'];
      $huser = $hasil['username'];
      $hemail = $hasil['email'];
      $hpassword = $hasil['password'];
      if ($user==$huser && $password==$hpassword OR $user==$hemail && $password=$hpassword) {
        $this->session->set_userdata('username', $huser);
        $this->session->set_userdata('email', $hemail);
        $this->session->set_userdata('iduser', $idUser);
        redirect('admin/admin');
      }else if($user==$huser && $password!=$hpassword OR $user==$hemail && $password!=$hpassword){
      $this->session->set_flashdata('error','anda tidak terdaftar dalam sistem')  ;
      redirect('admin/admin/login');
      }
    }
  }
 } ?>
