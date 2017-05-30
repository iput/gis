<?php defined('BASEPATH')OR exit('tidak ada akses yang diizinkan untuk halaman ini');
/**
 *
 */
 class M_berita extends CI_model
 {

 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function GetAllBerita()
 	{
 		$result = $this->db->query("SELECT * FROM berita");
 		 return $result->result_array();
 	}

  public function setBerita($id)
  {
    $data = $this->db->query("SELECT * FROM berita WHERE id_berita ",$id);
    return $data->result_array();
  }

 	public function insertBerita($data)
 	{
 		$datain =  $this->db->insert("berita", $data);
 		return $datain;
 	}

  public function updateBerita($data, $id)
  {
    $this->db->where('id_berita', $id);
    $this->db->update('berita', $data);
    if ($this->db->affected_rows()>0) {
      return TRUE;
    }else {
      return false;
    }
  }
 } ?>
