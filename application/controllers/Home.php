<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function formate()
	{
		$this->load->view('resume/format6');
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
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */