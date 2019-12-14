<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_feedback extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_feedback($data)
	{
		$this->db->insert('citizen_feedback', $data);
	    //echo $this->db->last_query(); die();
		return $this->db->insert_id();
	}

	public function get_all_feedback($user_id)
    {
        $sql = "SELECT * FROM citizen_feedback where `user_id` = '$user_id'";
        log_message('error',$sql);
        $res = $this->db->query($sql);
        return $res->result();
    }

}

/* End of file Model_feedback.php */
/* Location: ./application/models/Model_feedback.php */