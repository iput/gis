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
  public function get_coordinate()
  {
    $this->db->select('jalan.nama_jalan, jalan.latitude, jalan.longitude, kemacetan.jam_kemacetan,kemacetan.tingkat_kemacetan, kemacetan.titik_kemacetan');
    $this->db->from('jalan');
    $this->db->join('kemacetan','jalan.id_jalan=kemacetan.id_jalan');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function deleteJalan($id)
  {
    $this->db->where('id_jalan', $id);
    $this->db->delete('jalan');
    if ($this->db->affected_rows()>0) {
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function add_alter($data)
  {
    $query = $this->db->insert('alternatif',$data);
    if ($query) {
      return $query;
    }
    unset($query);
  }
  public function getAlter()
  {
    $this->db->select('jalan.nama_jalan,alternatif.lokasi_jalan,alternatif.alter_tempuh, alternatif.lat, alternatif.long,alternatif.id_alter');
    $this->db->from('jalan');
    $this->db->join('alternatif','jalan.id_jalan=alternatif.id_jalan');

    $query = $this->db->get();
    return $query->result_array();
    unset($query);
  }

  public function deleteAlter($id)
  {
    $this->db->where('id_alter', $id);
    $this->db->delete('alternatif');
    if ($this->db->affected_rows()>0) {
      return TRUE;
    }else{
      return FALSE;
    }
  }
  public function setalter($id)
  {
    $data = $this->db->query("select * from alternatif where id_alter",$id);
    return $data->result_array();
  }

  public function updatealter($data, $id)
  {
    $data =$this->db->update('alternatif', $data, $id);
    if ($data) {
      return $data;
    }else{
      return false;
    }
    unset($data);
  }
 } ?>
