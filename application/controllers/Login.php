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

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

}
