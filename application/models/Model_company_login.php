<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_company_login extends CI_Model {

	public $table ='company_login';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    public function login_student($user_name,$password)
	{
		$sql = "SELECT * FROM `$this->table` WHERE (`e_mail` = '$user_name' or `mobile_no` = '$user_name') and `password` = '$password' ";
		$query = $this->db->query($sql);

		return $query->row();
	}
	public function check_email_alredy_exist($email)
	{
		$sql = "SELECT * FROM `$this->table` WHERE `e_mail` = '$email'";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function insert_company_registeration($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}

}