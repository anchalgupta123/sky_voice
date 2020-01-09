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
	// public function get_company_resume_user()
	// {
	// 	$sql = "SELECT count(company_id) as resume_count FROM  resume_user,company_master where resume_user.company_id=company_master.id ";
	// 	$res = $this->db->query($sql);
	// 	return $res->row()->resume_count;
	// }
	public function get_perticuler_company_resume($id)
	{
		$sql = "SELECT ru.id,ru.user_id,ru.job_post_id,ru.applying_status,ru.created_date_time,cm.name,cm.mobile,cm.email_id, cpj.job_profile, cpj.qualification FROM  resume_user ru,citizen_master cm,company_posted_job cpj where ru.company_id=$id AND ru.iss_placed_status='0' AND ru.user_id=cm.id AND ru.job_post_id=cpj.id";
		$res = $this->db->query($sql);
		return $res->result();
	}
	public function set_user_placement_resume($id)
	{
		$sql = "SELECT ru.id,ru.user_id,cm.name,cm.mobile,cm.email_id FROM  resume_user ru,citizen_master cm where ru.id=$id AND ru.user_id=cm.id";
		$res = $this->db->query($sql);
		return $res->row();
	}
	public function get_user_free_jobs($id)
	{
		$sql = "SELECT ru.*,cm.company_name,cpj.job_profile,cpj.premium_normal_status,cpj.salary FROM  resume_user ru,company_master cm,company_posted_job cpj where ru.user_id='$id' AND ru.company_id=cm.id ANd ru.job_post_id=cpj.id AND cpj.premium_normal_status='0'";
		$res = $this->db->query($sql);
		return $res->result();
	}
	public function get_user_premium_jobs($id)
	{
		$sql = "SELECT ru.*,cm.company_name,cpj.job_profile,cpj.premium_normal_status,cpj.salary FROM  resume_user ru,company_master cm,company_posted_job cpj where ru.user_id='$id' AND ru.company_id=cm.id ANd ru.job_post_id=cpj.id AND cpj.premium_normal_status='1'";
		$res = $this->db->query($sql);
		return $res->result();
	}
	public function get_free_user_jobs($id)
	{
		$sql = "SELECT ru.*,cm.company_name,cpj.job_profile,cpj.premium_normal_status,cpj.salary FROM  resume_user ru,company_master cm,company_posted_job cpj where ru.user_id='$id' AND ru.company_id=cm.id ANd ru.job_post_id=cpj.id AND cpj.premium_normal_status='0'";
		$res = $this->db->query($sql);
		return $res->result();
	}
	public function get_free_user_premium_jobs($id)
	{
		$sql = "SELECT ru.*,cm.company_name,cpj.job_profile,cpj.premium_normal_status,cpj.salary FROM  resume_user ru,company_master cm,company_posted_job cpj where ru.user_id='$id' AND ru.company_id=cm.id ANd ru.job_post_id=cpj.id AND cpj.premium_normal_status='1'";
		$res = $this->db->query($sql);
		return $res->result();
	}
	public function update_user_placement($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
		return $id;
	}
}

/* End of file Model_company_master.php */
/* Location: ./application/models/Model_company_master.php */