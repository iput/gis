<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 *
 */
 class M_macet extends CI_Model
 {

 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function getAllMacet()
 	{
 		$this->db->select('jalan.nama_jalan,kemacetan.id_kemacetan,kemacetan.titik_kemacetan, kemacetan.tingkat_kemacetan, kemacetan.jam_kemacetan,kemacetan.lat, kemacetan.lng');
 		$this->db->from('jalan');
 		$this->db->join('kemacetan','jalan.id_jalan=kemacetan.id_jalan');
 		$dataIn = $this->db->get();
 		if ($dataIn->num_rows()>0) {
 			return $dataIn->result_array();
 		}else{
 			return array();
 		}
 	}
 	public function insertMacet($data)
 	{
 		$dataIn = $this->db->insert('kemacetan', $data);
 		return $dataIn;
 	}
  public function deleteMacet($id)
  {
    $this->db->where('id_kemacetan', $id);
    $this->db->delete('kemacetan');
    if ($this->db->affected_rows()>0) {
      return true;
    }else{
      return false;
    }
  }
 } ?>
