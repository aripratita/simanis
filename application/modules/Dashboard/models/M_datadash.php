<?php

/**
 * 
 */
class M_datadash extends CI_Model{
	
	function tampil_data()
	{
		return $this->db->select('*')
				->from('')
				->get();


	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
