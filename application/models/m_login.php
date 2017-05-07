<?php defined('BASEPATH')OR exit('akses ditolak');
/**
 *
 */
class M_login extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function loginP($username,$password)
  {
    $query = $this->db->query("SELECT * from tabel_user where username='".$username."' or email='".$username."'or password ='".$password."'");
    return $query->result_array();
  }
}

 ?>
