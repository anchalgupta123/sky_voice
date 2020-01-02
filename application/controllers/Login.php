<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login_form2');
	}

	public function check_login()
	{
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$this->load->model('Model_login');
		$login_data = $this->Model_login->login_user($email,$password);
		if ($login_data) {
			$otp = mt_rand(100000, 999999);
			$data_otp = array(
				'login_otp'=>$otp,
			);
			$data_otp_id = $this->Model_login->update_login($data_otp,$login_data->id);
			$message = $otp." is your OTP for SkyVoice Admin Login";
// 			log_message('error',$message);
			send_otp_sms1($login_data->mobile,$message);
			echo "Valid";

		}

		// if ($login_data && ($login_data->role == 'Admin' || $login_data->role == 'Unit Managers') )
		// {
		// 	$this->session->set_userdata('login_id',$login_data->id);
		// 	$this->session->set_userdata('login_email',$login_data->email);
		// 	$this->session->set_userdata('login_role',$login_data->role);
		// 	echo 'Valid';
		// }
		// else
		// {
		// 	echo 'Invalid';
		// }
	}

	public function re_check_login()
	{
		$email = $_POST['email'];
		$otp = $_POST['otp'];
		$password = md5($_POST['password']);

		$this->load->model('Model_login');
		$login_data = $this->Model_login->login_user_otp($email,$password,$otp);

		if ($login_data && ($login_data->role == 'Admin'))
		{
			$this->session->set_userdata('login_id',$login_data->id);
			$this->session->set_userdata('login_email',$login_data->email);
			$this->session->set_userdata('login_role',$login_data->role);
			echo 'Valid';
		}
		else
		{
			echo 'Invalid';
		}
	}
	public function check_student_login()
	{
		$user_name = $_POST['user_name'];
		$password = md5($_POST['password']);

		$this->load->model('Model_citizen_master');
		$login_data = $this->Model_citizen_master->login_student($user_name,$password);

		if ($login_data) 
		{
			$this->session->set_userdata('login_std_id',$login_data->id);
			$this->session->set_userdata('login_std_email',$login_data->email_id);
			$this->session->set_userdata('login_std_user_name',$login_data->name);
			echo "Valid";
		}
		else
		{
			echo "Invalid";
		}
	}
	public function check_company_login()
	{
		$company_login = $_POST['company_login'];
		$password = md5($_POST['password']);

		$this->load->model('Model_company_master');
		$login_data = $this->Model_company_master->login_company($company_login,$password);

		if ($login_data) 
		{
			$this->session->set_userdata('login_com_id',$login_data->id);
			$this->session->set_userdata('login_com_email',$login_data->email);
			$this->session->set_userdata('login_company_name',$login_data->company_name);
			$this->session->set_userdata('login_role',$login_data->role);
			echo "Valid";
		}
		else
		{
			echo "Invalid";
		}
	} 
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}
	public function student_logout()
	{
		$this->session->sess_destroy();
		redirect('Home/studentLogIn','refresh');
	}
	public function company_logout()
	{
		$this->session->sess_destroy();
		redirect('Home/companyLogIn','refresh');
	}

}
