<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_citizen_payment extends CI_Model {

	public $table = 'citizen_payment';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_citizen_payment($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	

}

/* End of file Model_citizen_payment.php */
/* Location: ./application/models/Model_citizen_payment.php */