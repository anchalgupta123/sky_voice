<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_tbl_cities extends CI_Model {

	public $table = 'tbl_cities';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_state_cities($state)
	{
		$sql = "SELECT TC.* FROM $this->table TC , tbl_states TS WHERE TS.stateName = '$state' and TS.stateID = TC.stateID";
		$res = $this->db->query($sql);
		return $res->result(); 
	}

}

/* End of file Model_tbl_cities.php */
/* Location: ./application/models/Model_tbl_cities.php */