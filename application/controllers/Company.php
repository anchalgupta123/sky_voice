<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

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
		$this->load->model('Model_company_master');
		$data['companies'] = $this->Model_company_master->get_all_company();
		$this->load->view('company/view_company',$data);
	}

	public function add_company_modal()
	{
		$this->load->view('company/modal_add_company');
	}

	public function save_company()
	{
		$data_company['name'] = $_POST['name'];
		$data_company['company_location'] = $_POST['company_location'];
		$data_company['hr_name'] = $_POST['hr_name'];
		$data_company['hr_email'] = $_POST['hr_email'];
		$data_company['hr_contact_no'] = $_POST['hr_contact_no'];
		$data_company['unique_id'] = $_POST['unique_id'];
		$data_company['category'] = $_POST['category'];
		$data_company['created_date_time'] = $this->current_date_time;

		$this->load->model('Model_company_master');
		$data_company_id = $this->Model_company_master->insert_company($data_company);
		if ($data_company_id) {
			echo "Valid";
		}
	}

	public function edit_company_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_company_master');
		$data['company'] = $this->Model_company_master->get_company_details($id);
		$this->load->view('company/modal_edit_company',$data);
	}

	public function update_company()
	{
		$data_company['name'] = $_POST['name'];
		$data_company['company_location'] = $_POST['company_location'];
		$data_company['hr_name'] = $_POST['hr_name'];
		$data_company['hr_email'] = $_POST['hr_email'];
		$data_company['hr_contact_no'] = $_POST['hr_contact_no'];
		$data_company['unique_id'] = $_POST['unique_id'];
		$data_company['category'] = $_POST['category'];
		$data_company['created_date_time'] = $this->current_date_time;

		$this->load->model('Model_company_master');
		$data_company_id = $this->Model_company_master->update_company($data_company,$_POST['company_id']);
		if ($data_company_id) {
			echo "Valid";
		}
	}

}

/* End of file Company.php */
/* Location: ./application/controllers/Company.php */