<?php defined('BASEPATH')OR exit('tidak ada akses terhadap halaman ini');
/**
 * 
 */
 class M_jalan extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function getAllJalan()
 	{
 		$data = $this->db->query("SELECT * FROM jalan");
 		return $data->result_array();
 	}

 	public function insertJalan($tabel, $data)
 	{
 		$result = $this->db->insert($tabel, $data);
 		return $result;
 	}
 } ?>