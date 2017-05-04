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
  public function get_coordinte()
  {
    $this->db->select('jalan.nama_jalan, jalan.latitude, jalan.longitude, kemacetan.jam_kemacetan,kemacetan.tingkat_kemacetan, kemacetan.titik_kemacetan');
    $this->db->from('jalan');
    $this->db->join('kemacetan','jalan.id_jalan=kemacetan.id_jalan');
    $query = $this->db->get();
    return $query->result_array();

  }
 } ?>
