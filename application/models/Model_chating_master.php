<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_chating_master extends CI_Model {

	public $table='chating_master';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_chating($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update_chating_up_admin($data,$id)
	{
		$this->db->where('type', '1');
		$this->db->where('user_id', $id);
		$this->db->update($this->table, $data);
		return $id;
	}

	public function get_user_chating($user_id)
	{
		$sql = "SELECT * FROM $this->table WHERE user_id = '$user_id'";
		$res = $this->db->query($sql);
		return $res->result();
	}

	public function get_all_user_chating()
	{
		$sql  ="SELECT md5(CM.id) as user_id, CM.name,CM.mobile, (SELECT COUNT(*) FROM `chating_master` WHERE user_id = CM.user_id AND status = '0' AND type ='1') as message_count  FROM citizen_master CM WHERE name <> '' ORDER BY message_count DESC ";
		$res = $this->db->query($sql);
		return $res->result();

	}

}

/* End of file Model_chating_master.php */
/* Location: ./application/models/Model_chating_master.php */