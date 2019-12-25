<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_resume_format1 extends CI_Model {

	public $table ='resume_format1';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_resume_format1_contact($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	
	public function insert_resume_format1_objective($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function insert_resume_format1_eduation($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function insert_resume_format1_emplyoment($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function insert_resume_format1_hobbie($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function insert_resume_format1_skills($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function insert_resume_format1_language($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function insert_resume_format1_reference($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
	public function insert_resume_format1_awards($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}
}