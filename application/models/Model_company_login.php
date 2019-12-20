<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_company_login extends CI_Model {

	public $table ='company_login';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
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