<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_message_master extends CI_Model {

	public $table = 'message_master';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_message_details($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_all_message_details()
	{
		$sql = "SELECT * FROM $this->table order by id desc";
		$res = $this->db->query($sql);
		return $res->result();
	}

}

/* End of file Model_message_master.php */
/* Location: ./application/models/Model_message_master.php */