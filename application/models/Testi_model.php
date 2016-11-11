<?php
class Testi_model extends CI_Model {

	public function getAsiakas() {
		$this->db->select('*');
		$this->db->from('testi');
		return $this->db->get()->result_array();
	}
}