<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

	public $table = 'login';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login_user($email,$password)
	{
		$sql = "SELECT * FROM `$this->table` WHERE `email` = '$email' and `password` = '$password' ";
		$query = $this->db->query($sql);

		return $query->row();
	}
    public function login_user_otp($email,$password,$otp)
    {
        $sql = "SELECT * FROM `$this->table` WHERE `email` = '$email' and `password` = '$password' and login_otp ='$otp'";
        $query = $this->db->query($sql);

        return $query->row();
    }

	public function insert_login($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update_login($data,$id)
    {
    	$this->db->where('id', $id);
    	$this->db->update($this->table, $data);
    	return $id;
    }

    public function delete_login($id)
    {
    	$this->db->where('id', $id);
    	$this->db->delete($this->table);
    	return $id;
    }

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */
