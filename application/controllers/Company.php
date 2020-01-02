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
		// $this->load->model('Model_resume_user');
		// $data['resume_user_count_of_company'] = $this->Model_resume_user->get_company_resume_user();
		// echo "<pre>";
		// print_r($data);
		// return;

		$this->load->view('company/view_company',$data);
	}

	public function add_company_modal()
	{
		$this->load->view('company/modal_add_company');
	}
	public function viewCompanyPostJob()
	{
		$company_id=$_GET['company_id'];
		$this->load->model('Model_company_posted_job');
		$data['company_job_post']=$this->Model_company_posted_job->get_company_job_post($company_id);
		// echo "<pre>";
		// print_r($data);
		// return;
		$this->load->view('company/view_post_job',$data);
	}

	public function send_multiple_resume()
	{
		$job_post_id=$_GET['job_post_id'];
		$this->load->model('Model_company_posted_job');
		$this->load->model('Model_citizen_master');
		$data['company_job_post']=$this->Model_company_posted_job->get_only_job($job_post_id);
		$data['all_primium_user']=$this->Model_citizen_master->get_premium_user();
		// echo "<pre>";
		// print_r($data['all_primium_user']);
		// return;
		$this->load->view('company/send_multiple_resume',$data);
	}
	public function send_multiple_resume_of_perticuler_user()
	{
		$job_post_id = $_POST['job_post_id'];
		$company_id  = $_POST['company_id'];
		$user_ids  = $_POST['user_ids'];
		
		$user_ids = explode(',',$user_ids);

        $this->load->model('Model_resume_user');
        for ($i=0; $i<count($user_ids) ; $i++) { 
           $data_category = array(
        	'job_post_id'=>$job_post_id,
        	'company_id'=>$company_id,
        	'user_id'=>$user_ids[$i],
        	'applying_status'=>'1',
        	'created_date_time'=>$this->current_date_time,
           );

        
        $data_id = $this->Model_resume_user->insert_multiple_resume_to_company($data_category);
        }
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function insert_company_detail()
	{
		$c_name = $_POST['c_name'];
		$hr_name  = $_POST['hr_name'];
		$hr_email  = $_POST['hr_email'];
		$email  = $_POST['email'];
		$unique_id  = $_POST['unique_id'];
		$password  = $_POST['password'];
		$mobile_no  = $_POST['mobile_no'];
		$no_of_emp   = $_POST['no_of_emp'];
		$buss_category   = $_POST['buss_category'];
		$update_hr_contact_no   = $_POST['update_hr_contact_no'];
		$update_address   = $_POST['update_address'];
		$update_zip_code   = $_POST['update_zip_code'];
		$update_city   = $_POST['update_city'];

        $this->load->model('Model_company_master');
        $data_category = array(
        	'company_name'=>$c_name,
        	'mobile_no'=>$mobile_no,
        	'email'=>$email,
        	'password'=>md5($password),
        	'real_password'=>$password,
        	'unique_id'=>$unique_id,
        	'hr_name'=>$hr_name,
        	'hr_email'=>$hr_email,
        	'no_of_curr_emp'=>$no_of_emp,
        	'business_category'=>$buss_category,
        	'hr_contact_no'=>$update_hr_contact_no,
        	'address'=>$update_address,
        	'zip_code'=>$update_zip_code,
        	'city' =>$update_city,
           );

        $data_id = $this->Model_company_master->insert_company($data_category);
        if ($data_id) {
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
	public function update_company_detail()
	{
		$id = $_POST['company_id'];
		$company_name  = $_POST['name'];
		$city  = $_POST['company_location'];
		$hr_name  = $_POST['hr_name1'];
		$hr_email  = $_POST['hr_email1'];
		$hr_contact_no  = $_POST['hr_contact_no'];
		$unique_id   = $_POST['unique_id1'];
		$business_category   = $_POST['category'];
		
        $this->load->model('Model_company_master');
        $data_category = array(
        	'company_name'=>$company_name,
        	'city'=>$city,
        	'hr_name'=>$hr_name,
        	'hr_email'=>$hr_email,
        	'hr_contact_no'=>$hr_contact_no,
        	'business_category'=>$business_category,
           );

        $data_id = $this->Model_company_master->update_company($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}

	public function view_profile()
	{
		$this->load->view('company/view_profile');
	}
}

/* End of file Company.php */
/* Location: ./application/controllers/Company.php */