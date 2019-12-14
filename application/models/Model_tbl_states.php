<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_tbl_states extends CI_Model {

	public $table ='tbl_states';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_states()
	{
		$sql = "SELECT * FROM $this->table";
		$res = $this->db->query($sql);
		return $res->result();
	}

}
