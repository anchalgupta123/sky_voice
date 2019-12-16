<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('public/resume');
	}

	public function services()
	{
		$this->load->view('public/services');
	}

	public function contact()
	{
		$this->load->view('public/contact');
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
	public function check_student_login()
	{
		$user_name = $_POST['user_name'];
		$password = md5($_POST['password']);

		$this->load->model('Model_login');
		$login_data = $this->Model_login->login_user($user_name,$password);

		if ($login_data) 
		{
			$this->session->set_userdata('login_id',$login_data->id);
			$this->session->set_userdata('login_email',$login_data->email);
			$this->session->set_userdata('login_role',$login_data->role);
			echo "Valid";
		}
		else
		{
			echo "Invalid";
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
		$this->load->view('resume/build_format1');
	}
	public function format1_form()
	{
		$this->load->view('resume/format1_form');
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
        $location = $_POST['location'];
        $e_month = $_POST['e_month'];
        $e_year = $_POST['e_year'];

        $this->load->model('Model_resume_format1');
        $data_category = array(
        	'degree_name'=>$degree_name,
        	'school_name'=>$school_name,
        	'qualification'=>$qualification,
        	'location'=>$location,
        	'e_month'=>$e_month,
        	'e_year'=>$e_year,
           );

        $data_id = $this->Model_resume_format1->insert_resume_format1_eduation($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */