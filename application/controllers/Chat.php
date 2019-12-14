<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends CI_Controller {

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

	public function one_to_one()
	{
		$this->load->model('Model_chating_master');
		$data['users'] = $this->Model_chating_master->get_all_user_chating();
		$this->load->view('chat/view_one_to_one',$data);
	}

	public function one_to_many()
	{
		$this->load->model('Model_message_master');
		$data['messages'] = $this->Model_message_master->get_all_message_details();
		$this->load->view('chat/view_one_to_many',$data);
	}

	public function user_message($id)
	{
		$this->load->model('Model_message_users');
		$data['users'] = $this->Model_message_users->get_message_users($id);
		$this->load->view('chat/message_users',$data);
	}

	public function get_user_chats()
	{
		$data['id'] = $_POST['id'];
		$this->load->model('Model_chating_master');
		$data_status['status'] = 1;
		$data_status_id = $this->Model_chating_master->update_chating_up_admin($data_status,$data['id']);
		$data['chat'] = $this->Model_chating_master->get_user_chating($data['id']);
		$this->load->view('chat/table_user_chat', $data);
	}

	public function send_message_user()
	{
		$data_chating['user_id'] = $_POST['id'];
        $data_chating['sender_id'] = 'Admin';
        $data_chating['reciver_id'] = $_POST['id'];
        $data_chating['type'] = '0';
        $data_chating['message'] = $_POST['message'];
        $data_chating['created_date_time'] = $this->current_date_time;

        $this->load->model('Model_chating_master');
        $data_chating_id = $this->Model_chating_master->insert_chating($data_chating);

        $this->load->model('Model_citizen_master');
        $data_citizen = $this->Model_citizen_master->get_citizen_details_id($data_chating['user_id']);
        $response = sendPushNotificationToFCMSever('Skyvoice',$data_chating['message'],$data_citizen->fire_base_id);

        if ($data_chating_id) {
         	echo "Valid";
        }
	}

	public function get_user_only_chating()
	{
		$data['id'] = $_POST['id'];
		$this->load->model('Model_chating_master');
		$data['chat'] = $this->Model_chating_master->get_user_chating($data['id']);
		$this->load->view('chat/table_user_chat_message', $data);
	}

}

/* End of file Chat.php */
/* Location: ./application/controllers/Chat.php */