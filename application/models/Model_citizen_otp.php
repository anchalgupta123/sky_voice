<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_citizen_otp extends CI_Model {

	public $table = 'citizen_otp';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_citizen_otp($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function check_mobile_otp($mobile)
	{
		$sql = "SELECT * FROM $this->table WHERE mobile = '$mobile'";
		$res = $this->db->query($sql);
		return $res->row();
	}

	public function update_citizen_otp($data,$mobile)
	{
		$this->db->where('mobile',$mobile);
		$this->db->update($this->table, $data);
		return $mobile;
	}

	public function verify_user_otp_details($mobile,$otp)
	{
		$sql = "SELECT * FROM $this->table WHERE mobile = '$mobile' and otp = '$otp'";
		$res = $this->db->query($sql);
		return $res->row();
	}
}

/* End of file Model_citizen_otp.php */
/* Location: ./application/models/Model_citizen_otp.php */