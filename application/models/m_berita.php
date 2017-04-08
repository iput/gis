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

 	public function insertBerita($data)
 	{
 		$datain =  $this->db->insert("berita", $data);
 		return $datain;
 	}
 } ?>