<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class F_and_Q extends CI_Controller {

	public $current_date_time;
	public $login_id;
	public $login_role;

	public function __construct()
	{
		parent::__construct();
		$this->login_id = $this->session->userdata('login_id');
		$this->login_role = $this->session->userdata('login_role');
		if(function_exists('date_default_timezone_set')) {
		    date_default_timezone_set("Asia/Kolkata");
		}
		if (!$this->login_id) {
			redirect('Login');
		}
		$this->current_date_time = date('Y-m-d H:i:s');
	}

	public function index()
	{
		$this->load->view('fq');
	}

}

/* End of file F_and_Q.php */
/* Location: ./application/controllers/F_and_Q.php */