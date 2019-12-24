<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_company_posted_job extends CI_Model {

	public $table = 'company_posted_job';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_post_job($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_company_job_post($id)
	{
		$sql = "SELECT * FROM $this->table WHERE company_id ='$id'";
		$res = $this->db->query($sql);
		return $res->result();
	}

	// public function get_all_company()
	// {
	// 	$sql = "SELECT * FROM $this->table";
	// 	$res = $this->db->query($sql);
	// 	return $res->result();
	// }

	

	// public function update_company($data,$id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->update($this->table, $data);
	// 	return $id;
	// }

}

/* End of file Model_company_master.php */
/* Location: ./application/models/Model_company_master.php */