<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_wallet extends CI_Model {

	public $table ='wallet';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_wallet_details()
    {
        $sql = "SELECT wm.*, cm.user_id FROM wallet wm,citizen_master cm WHERE wm.user_id=cm.id";
        $res = $this->db->query($sql);
        return $res->result();
    }
}