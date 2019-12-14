<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_newsletter extends CI_Model {

	public $table = 'newsletter';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_newsletter($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

}

/* End of file Model_newsletter.php */
/* Location: ./application/models/Model_newsletter.php */