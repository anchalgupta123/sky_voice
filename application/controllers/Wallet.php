<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wallet extends CI_Controller {

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

    public function view_wallet()
    {
    	$this->load->model('Model_wallet');
    	$data['wallet']=$this->Model_wallet->get_all_wallet_details(); 
    	$this->load->view('wallet/view_wallet',$data);
    }

}

/* End of file Company.php */
/* Location: ./application/controllers/Company.php */