<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Placements extends CI_Controller {

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
		$this->load->model('Model_citizen_placed');
		$data['users'] = $this->Model_citizen_placed->get_all_placed_user();
		$this->load->view('users/view_placed_user', $data);
	}

}

/* End of file Placements.php */
/* Location: ./application/controllers/Placements.php */