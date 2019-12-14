<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_job_experience extends CI_Model {

	public $table = 'job_experience';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_job_experience($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_citizen_expericence_count($user_id)
	{
		$sql = "SELECT count(id) as count FROM $this->table WHERE user_id = '$user_id'";
		$res = $this->db->query($sql);
		return $res->row()->count;
	}
}

/* End of file Model_job_experience.php */
/* Location: ./application/models/Model_job_experience.php */