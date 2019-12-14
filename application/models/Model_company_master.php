<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_company_master extends CI_Model {

	public $table = 'company_master';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_company($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_all_company()
	{
		$sql = "SELECT * FROM $this->table";
		$res = $this->db->query($sql);
		return $res->result();
	}

	public function get_company_details($id)
	{
		$sql = "SELECT * FROM $this->table WHERE id ='$id'";
		$res = $this->db->query($sql);
		return $res->row();
	}

	public function update_company($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
		return $id;
	}

}

/* End of file Model_company_master.php */
/* Location: ./application/models/Model_company_master.php */