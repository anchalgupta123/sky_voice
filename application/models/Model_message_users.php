<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_message_users extends CI_Model {

	public $table ='message_users';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_message_user($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_message_users($id)
	{
		$sql = "SELECT CM.* FROM $this->table MU , citizen_master CM WHERE MU.message_id = '$id' and CM.user_id = MU.user_id";
		$res = $this->db->query($sql);
		return $res->result();
	}

}

/* End of file Model_message_users.php */
/* Location: ./application/models/Model_message_users.php */