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
		$sql = "SELECT cm.*,(SELECT count(id)  FROM  resume_user where resume_user.company_id=cm.id) as resume_count  FROM company_master cm";
		$res = $this->db->query($sql);
		return $res->result();
	}
	public function get_all_company_from_select_query()
	{
		$sql = "SELECT * FROM company_master ";
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

	public function login_company($company_login,$password)
	{
		$sql = "SELECT * FROM `$this->table` WHERE (`email` = '$company_login' or `mobile_no` = '$company_login') and `password` = '$password' ";
		$query = $this->db->query($sql);

		return $query->row();
	}
	public function check_email_alredy_exist_for_company($email)
	{
		$sql = "SELECT * FROM `$this->table` WHERE `email` = '$email'";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function insert_company_registeration($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}

}

/* End of file Model_company_master.php */
/* Location: ./application/models/Model_company_master.php */