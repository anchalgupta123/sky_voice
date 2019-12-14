<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$dates = array();
          $dates[0] = date('Y-m');
          for ($i = 1; $i < 12; $i++) {
            $dates[$i] =  date('Y-m', strtotime("-$i month"));
        }
		$this->load->model(array('Model_citizen_master' => 'mcm'));
		$this->load->model('Model_citizen_master');
		$data['total_users'] = $this->Model_citizen_master->get_count_all_citizen();
		$data['total_unverified'] = $this->Model_citizen_master->get_count_status_citizen(0);
		$data['total_verified'] = $this->Model_citizen_master->get_count_status_citizen(1);
		$data['total_male'] = $this->Model_citizen_master->get_count_gender_citizen('male');
		$data['total_female'] = $this->Model_citizen_master->get_count_gender_citizen('female');
		$data['today_user'] = $this->Model_citizen_master->get_count_today_citizen();
        $data['today_payment_completed'] = $this->Model_citizen_master->get_count_payment_citizen();

        $start_date = date('Y-m-d');
        $stort_date = strtotime($start_date);
        $week_date = date("Y-m-d", strtotime("-7 day", $stort_date));
        $day_month = date('d') -1;
        $month_date = date("Y-m-d", strtotime("-".$day_month." day", $stort_date));
        $year_date = date("Y-m-d", strtotime("-1 year", $stort_date));
        $year_started = date('Y')."-04-01";
        $current_year = date('Y')+1;
        $year_ended = $current_year."-03-31";


 		$data['today']['total'] = $this->Model_citizen_master->get_total_user_by_date($start_date,$start_date);
        $data['today']['verified'] = $this->Model_citizen_master->get_status_user_by_date($start_date,$start_date,1);
        $data['today']['unverified'] = $this->Model_citizen_master->get_status_user_by_date($start_date,$start_date,0);
        $data['today']['payment'] = $this->Model_citizen_master->get_payment_user_by_date($start_date,$start_date);
        $data['today']['male'] = $this->Model_citizen_master->get_gender_user_by_date($start_date,$start_date,'male');
        $data['today']['female'] = $this->Model_citizen_master->get_gender_user_by_date($start_date,$start_date,'female');


        $data['week']['total'] = $this->Model_citizen_master->get_total_user_by_date($start_date,$week_date);
        $data['week']['verified'] = $this->Model_citizen_master->get_status_user_by_date($start_date,$week_date,1);
        $data['week']['unverified'] = $this->Model_citizen_master->get_status_user_by_date($start_date,$week_date,0);
        $data['week']['payment'] = $this->Model_citizen_master->get_payment_user_by_date($start_date,$week_date);
        $data['week']['male'] = $this->Model_citizen_master->get_gender_user_by_date($start_date,$week_date,'male');
        $data['week']['female'] = $this->Model_citizen_master->get_gender_user_by_date($start_date,$week_date,'female');


        $data['month']['total'] = $this->Model_citizen_master->get_total_user_by_date($start_date,$month_date);
        $data['month']['verified'] = $this->Model_citizen_master->get_status_user_by_date($start_date,$month_date,1);
        $data['month']['unverified'] = $this->Model_citizen_master->get_status_user_by_date($start_date,$month_date,0);
        $data['month']['payment'] = $this->Model_citizen_master->get_payment_user_by_date($start_date,$month_date);
        $data['month']['male'] = $this->Model_citizen_master->get_gender_user_by_date($start_date,$month_date,'male');
        $data['month']['female'] = $this->Model_citizen_master->get_gender_user_by_date($start_date,$month_date,'female');


        $data['year']['total'] = $this->Model_citizen_master->get_total_user_by_date($year_ended,$year_started);
        $data['year']['verified'] = $this->Model_citizen_master->get_status_user_by_date($year_ended,$year_started,1);
        $data['year']['unverified'] = $this->Model_citizen_master->get_status_user_by_date($year_ended,$year_started,0);
        $data['year']['payment'] = $this->Model_citizen_master->get_payment_user_by_date($year_ended,$year_started);
        $data['year']['male'] = $this->Model_citizen_master->get_gender_user_by_date($year_ended,$year_started,'male');
        $data['year']['female'] = $this->Model_citizen_master->get_gender_user_by_date($year_ended,$year_started,'female');

		$members_count = array();

   		 for ($i=0; $i <count($dates) ; $i++) { 
			$members_count[$i] = $this->mcm->get_count_users_by_date(date("Y", strtotime($dates[$i])),date("m", strtotime($dates[$i])));
		}

		$data['members_count'] = $members_count;



		$this->load->view('dashboard',$data);
	}

	

	


}
