<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_dashboard extends CI_Controller {

	public $current_date_time;
	public $login_com_id;
	public $login_role;
	public $login_com_email;

	public function __construct()
	{
		parent::__construct();
		$this->login_com_id = $this->session->userdata('login_com_id');
		$this->login_role = $this->session->userdata('login_role');
		$this->login_com_email = $this->session->userdata('login_com_email');
		if(function_exists('date_default_timezone_set')) {
		    date_default_timezone_set("Asia/Kolkata");
		}
		if (!$this->login_com_id) {
			redirect('Home/companyLogIn');
		}
		$this->current_date_time = date('Y-m-d H:i:s');
	}

	public function index()
	{
		$this->load->view('Company_dashboard');
	}
	public function view_profile()
	{
		$this->load->model('Model_company_master');
		$data['singel_company']=$this->Model_company_master->get_company_details($this->login_com_id);
		$this->load->view('Company/view_profile',$data);
	}
	public function update_company_profile()
	{
		$c_name = $_POST['c_name'];
		$hr_name  = $_POST['hr_name'];
		$hr_email  = $_POST['hr_email'];
		$email  = $_POST['email'];
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
        	'hr_name'=>$hr_name,
        	'hr_email'=>$hr_email,
        	'no_of_curr_emp'=>$no_of_emp,
        	'business_category'=>$buss_category,
        	'hr_contact_no'=>$update_hr_contact_no,
        	'address'=>$update_address,
        	'zip_code'=>$update_zip_code,
        	'city' =>$update_city,
           );

        $data_id = $this->Model_company_master->update_company($data_category,$this->login_com_id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	
	public function view_job_post()
	{
		$this->load->model('Model_company_posted_job');
		$data['company_job_post']=$this->Model_company_posted_job->get_company_job_post($this->login_com_id);
		$this->load->view('Company/view_job_post',$data);
	}

	public function add_post_a_job_modal()
	{
		$this->load->view('company/modal_post_job_modal');
	}
	
	public function save_job()
	{
		$job_profile = $_POST['job_profile'];
		$job_discription  = $_POST['job_discription'];
		$experience  = $_POST['experience'];
		$salary  = $_POST['salary'];
		$language  = $_POST['language'];
		$qualification   = $_POST['qualification'];
		$job_location   = $_POST['job_location'];
		$job_category   = $_POST['job_category'];
		
        $this->load->model('Model_company_posted_job');
        $data_category = array(
        	'company_id'=>$this->login_com_id,
        	'job_profile'=>$job_profile,
        	'job_description'=>$job_discription,
        	'experience'=>$experience,
        	'salary'=>$salary,
        	'language'=>$language,
        	'qualification'=>$qualification,
        	'job_location'=>$job_location,
        	'job_catgory'=>$job_category,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_company_posted_job->insert_post_job($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function change_actie_status()
	{
		$id = $_POST['id'];
		$status = $_POST['status'];
        
        if ($status==0) {
        	$data = array(
        	'status'=>'1'
           );
        }
        else {
        	$data = array(
        	'status'=>'0'
           );
        }
        
		$this->load->model('Model_company_posted_job');
        $data_id = $this->Model_company_posted_job->update_status($data,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	
}

/* End of file Company.php */
/* Location: ./application/controllers/Company.php */