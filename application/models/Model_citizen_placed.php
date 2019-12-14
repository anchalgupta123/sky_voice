<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_citizen_placed extends CI_Model {

	public $table = 'citizen_placed';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_citizen_placed($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_all_placed_user()
	{
		$sql = "SELECT * , CM.name as user_name , CMM.name as company_name FROM $this->table CP , citizen_master CM , company_master CMM WHERE CMM.id = CP.company_id and CP.user_id = CM.id";
		$res = $this->db->query($sql);
		return $res->result();
	}

}

/* End of file Model_citizen_placed.php */
/* Location: ./application/models/Model_citizen_placed.php */