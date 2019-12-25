<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public $current_date_time;
	public $login_std_id;

	public function __construct()
	{
		parent::__construct();
		$this->login_std_id = $this->session->userdata('login_std_id');
		if(function_exists('date_default_timezone_set')) {
		    date_default_timezone_set("Asia/Kolkata");
		}
		/*if (!$this->login_id) {
			redirect('Login');
		}*/
		$this->current_date_time = date('Y-m-d H:i:s');
	}

	public function index()
	{
		$this->load->view('public/home');
	}
	public function about()
	{
		$this->load->view('public/about');
	}

	public function collaboration()
	{
		$this->load->view('public/collaboration');
	}

	public function team()
	{
		$this->load->view('public/team');
	}
	public function resume()
	{
		if (!$this->login_std_id) {
			redirect('Home/studentLogIn');
		}
		else{
		$this->load->view('public/resume');
		}
	}

	public function services()
	{
		$this->load->view('public/services');
	}

	public function contact()
	{
		$this->load->view('public/contact');
	}
	public function check_email_already_exist()
	{
		$email=$_POST['email'];
		$this->load->model('Model_student_login');
		$login_data = $this->Model_student_login->check_email_alredy_exist($email);
		if ($login_data) {
			echo "Valid";
		}
	}
	public function check_email_already_exist_for_company()
	{
		$email=$_POST['email'];
		$this->load->model('Model_company_master');
		$login_data = $this->Model_company_master->check_email_alredy_exist_for_company($email);
		if ($login_data) {
			echo "Valid";
		}
	}
	public function terms_conditions()
	{
		$this->load->view('public/terms_conditions');
	}
	public function studentLogIn()
	{
		$this->load->view('public/student_login');
	}
	public function studentRegistratoin()
	{
		$this->load->view('public/student_registration');
	}
	public function companyLogIn()
	{
		$this->load->view('public/company_login');
	}
	public function companyRegistratoin()
	{
		$this->load->view('public/company_registration');
	}
	public function company_register_form()
	{
        $user_name = $_POST['user_name'];
        $mobile_no = $_POST['mobile_no'];
        $e_mail = $_POST['e_mail'];
        $real_password = $_POST['password'];

        $this->load->model('Model_company_master');
        $data_category = array(
        	'company_name'=>$user_name,
        	'mobile_no'=>$mobile_no,
        	'email'=>$e_mail,
        	'real_password'=>$real_password,
        	'password'=>md5($real_password),
        	'role'=>'Company',
        	'created_date_time'=>$this->current_date_time
           );

        $data_id = $this->Model_company_master->insert_company_registeration($data_category);
        if ($data_id) {
        	echo "Valid";

	}
    }
	public function student_register_form()
	{
        $user_name = $_POST['user_name'];
        $mobile_no = $_POST['mobile_no'];
        $e_mail = $_POST['e_mail'];
        $real_password = $_POST['password'];

        $this->load->model('Model_student_login');
        $data_category = array(
        	'user_name'=>$user_name,
        	'mobile_no'=>$mobile_no,
        	'e_mail'=>$e_mail,
        	'real_password'=>$real_password,
        	'password'=>md5($real_password),
        	'created_date_time'=>$this->current_date_time
           );

        $data_id = $this->Model_student_login->insert_student_registeration($data_category);
        if ($data_id) {
        	echo "Valid";

	}
    }
	public function send_mail_contact()
	{
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$send_message = "User name :- ".$name . " <br>Mobile :- ".$mobile ." <br>Email:- ".$email." <br>Subject:- ".$subject. " <br>Message :- ".$message;
		echo sendEmail('svaenquiry@gmail.com',$name,$subject,$send_message,$email);

	}

	function send_mail_contact2()
	{
		$req_name = $_POST['req_name'];
		$req_mobile = $_POST['req_mobile'];
		$req_email = $_POST['req_email'];
		$req_subject = $_POST['req_subject'];

		$send_message = "User name :- ".$req_name . " <br>Mobile :- ".$req_mobile ." <br>Email:- ".$req_email." <br>Subject:- ".$req_subject;
		echo sendEmail('svaenquiry@gmail.com',$req_name,'Call Back',$send_message,$req_email);
	}

	public function save_news_letter()
	{
		$this->load->model('Model_newsletter');
		$data_newsletter = array(
			'email'=>$_POST['newsletter'],
		);
		$data_id = $this->Model_newsletter->insert_newsletter($data_newsletter);
		if ($data_id) {
			echo "Valid";
		}
	}

	public function send_mail_contact3()
	{
		$name = $_POST['name'];
		$last_name = $_POST['last_name'];
		$mail = $_POST['mail'];
		$mobile = $_POST['mobile'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$send_message = "User name :- ".$name. " " .$last_name. " <br>Mobile :- ".$mobile ." <br>Email:- ".$mail." <br>Subject:- ".$subject. " <br>Message :- ".$message;
		echo sendEmail('svaenquiry@gmail.com',$name,$subject,$send_message,$mail);
	}
	public function format()
	{
		$this->load->view('resume/format1_form');
	}
	public function preview_format1_modal()
	{
		$this->load->view('resume/model_format1');	
	}
	public function add_contact_form()
	{
        $first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$phone  = $_POST['phone'];
		$email  = $_POST['email'];
		$address  = $_POST['address'];
		$city  = $_POST['city'];
		$state   = $_POST['state'];
		$pincode   = $_POST['pincode'];
		$country   = $_POST['country'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'first_name'=>$first_name,
        	'last_name'=>$last_name,
        	'phone'=>$phone,
        	'email'=>$email,
        	'address'=>$address,
        	'city' =>$city,
        	'state' =>$state,
        	'pincode' =>$pincode,
        	'country' =>$country,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_contact($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_objective_form()
	{
        $objective = $_POST['objective'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'objective'=>$objective,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_objective($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_eductaion_form()
	{
        $degree_name = $_POST['degree_name'];
        $school_name = $_POST['school_name'];
        $qualification = $_POST['qualification'];
        $c_location = $_POST['c_location'];
        $e_month = $_POST['e_month'];
        $e_year = $_POST['e_year'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'degree_name'=>$degree_name,
        	'school_name'=>$school_name,
        	'qualification'=>$qualification,
        	'c_location'=>$c_location,
        	'e_month'=>$e_month,
        	'e_year'=>$e_year,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_eduation($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_employment_form()
	{
        $job_title = $_POST['job_title'];
        $company_name = $_POST['company_name'];
        $job_location = $_POST['job_location'];
        $emp_from_month = $_POST['emp_from_month'];
        $emp_from_year = $_POST['emp_from_year'];
        $emp_to_month = $_POST['emp_to_month'];
        $emp_to_year = $_POST['emp_to_year'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'job_title'=>$job_title,
        	'company_name'=>$company_name,
        	'job_location'=>$job_location,
        	'emp_from_month'=>$emp_from_month,
        	'emp_from_year'=>$emp_from_year,
        	'emp_to_month'=>$emp_to_month,
        	'emp_to_year'=>$emp_to_year,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_emplyoment($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_hobbie_form()
	{
        $hobbie = $_POST['hobbie'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'hobbie'=>$hobbie,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_hobbie($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_skills_form()
	{
        $skills = $_POST['skills'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'skills'=>$skills,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_skills($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_language_form()
	{
        $language = $_POST['language'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'language'=>$language,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_language($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_reference_form()
	{
        $ref_name = $_POST['ref_name'];
        $relationship = $_POST['relationship'];
        $ref_company_name = $_POST['ref_company_name'];
        $ref_company_email = $_POST['ref_company_email'];
        $ref_company_phone = $_POST['ref_company_phone'];
        $ref_company_address = $_POST['ref_company_address'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'ref_name'=>$ref_name,
        	'relationship'=>$relationship,
        	'ref_company_name'=>$ref_company_name,
        	'ref_company_email'=>$ref_company_email,
        	'ref_company_phone'=>$ref_company_phone,
        	'ref_company_address'=>$ref_company_address,	
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_reference($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function add_awards_form()
	{
        $awards = $_POST['awards'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'awards'=>$awards,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_awards($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */