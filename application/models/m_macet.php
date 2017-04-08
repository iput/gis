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

 	public function insertMacet($data)
 	{
 		$dataIn = $this->db->insert('kemacetan', $data);
 		return $dataIn;
 	}
 } ?>