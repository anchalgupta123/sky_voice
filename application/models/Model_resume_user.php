<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_resume_user extends CI_Model {

	public $table = 'resume_user';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_multiple_resume_to_company($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function get_company_resume_user()
	{
		$sql = "SELECT count(company_id) as resume_count FROM  resume_user,company_master where resume_user.company_id=company_master.id ";
		$res = $this->db->query($sql);
		return $res->row()->resume_count;
	}
}

/* End of file Model_company_master.php */
/* Location: ./application/models/Model_company_master.php */