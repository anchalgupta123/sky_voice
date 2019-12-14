<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_citizen_location extends CI_Model {

	public $table = 'citizen_location';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_data_location($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

}

/* End of file Model_citizen_location.php */
/* Location: ./application/models/Model_citizen_location.php */