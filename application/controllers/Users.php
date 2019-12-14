<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public $current_date_time;
	public $login_id;
	public $login_role;

	public function __construct()
	{
		parent::__construct();
		$this->login_id = $this->session->userdata('login_id');
		$this->login_role = $this->session->userdata('login_role');
        $this->load->model('Model_citizen_master');
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
		$data['view_type'] = 'All';
		// $data['users'] = $this->Model_citizen_master->get_all_citizen();
        $select_fields = 'citizen_master.*, md5(citizen_master.id) as user_id';
        $data['users'] = $this->Model_citizen_master->get_join_record('citizen_master', 'id', 'citizen_payment', 'user_id', $select_fields, '','','','','','citizen_master.id','desc','left');
        //print_r($data['users']);
		$this->load->view('users/view_users_all', $data);
	}

    public function feedback($user_id)
    {
        $this->load->model('Model_feedback');
        $data['users'] = $this->Model_citizen_master->get_citizen_details_md5($user_id);
        $data['feedback'] = $this->Model_feedback->get_all_feedback($user_id);
        // echo "<pre>";
        // print_r($data);
        // return;
        $this->load->view('users/users_feedback', $data);
    }
    
    public function view_data($user_id)
    {
        //echo $user_id;
        $this->load->model('Model_feedback');
        $data['users'] = $this->Model_citizen_master->get_citizen_details_md5($user_id);
        //print_r($data['users']) ;
        $data['user_detail'] = $this->Model_citizen_master->get_single_user_detail($user_id);
        $this->load->view('users/users_data', $data);
    }

	public function unverified()
	{
		$data['view_type'] = 'Unverified';

		// $data['users'] = $this->Model_citizen_master->get_all_citizen_type(0);
        $select_fields = 'citizen_master.*, md5(citizen_master.id) as user_id, citizen_payment.payment_status ';
        $data['users'] = $this->Model_citizen_master->get_join_record('citizen_master', 'id', 'citizen_payment', 'user_id', $select_fields, 'status','0','','','','citizen_master.id','desc','left');

        $this->load->view('users/view_users_unverfied', $data);
	}

	public function verified()
	{
		$data['view_type'] = 'Verified';
		// $data['users'] = $this->Model_citizen_master->get_all_citizen_type(1);
        $select_fields = 'citizen_master.*, md5(citizen_master.id) as user_id, citizen_payment.payment_status ';
        $data['users'] = $this->Model_citizen_master->get_join_record('citizen_master', 'id', 'citizen_payment', 'user_id', $select_fields, 'status','1','','','','citizen_master.id','desc','left');

        $this->load->view('users/view_users_verified', $data);
	}

	public function modal_view_status()
	{
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];

		$this->load->view('users/modal_user_verified', $data);
	}

	public function update_users()
	{
		$user_id = $_POST['user_id']; 
		$status = $_POST['status']; 
		$month = $_POST['month'];

		$date = date("Y-m-d");
		$date = strtotime(date("Y-m-d", strtotime($date)));
		$final = date("Y-m-d", strtotime("+$month year", $date));


		if ($status != 0) {
			$data_array = array(
				'status'=>$status,
				'end_date'=>$final,
			);
			$data_id = $this->Model_citizen_master->update_citizen($data_array,$user_id);
			if ($data_id) {
				$this->load->model('Model_citizen_payment');
				$data_payment = array(
					'user_id'=>'Admin',
					'payment'=>'0',
					'end_date'=>$final,
					'created_date_time'=>$this->current_date_time,
					'payment_status'=>'0',
				);

				$this->Model_citizen_payment->insert_citizen_payment($data_payment);

				echo "Valid";
			}
		}
		else
		{
			$data_array = array(
				'status'=>$status,
			);

			$data_id = $this->Model_citizen_master->update_citizen($data_array,$user_id);
		}

		
	}

	public function download_file($downloadFor) {

        $where_field = '';
        $where_field_value = '';

        if ($downloadFor === 'unverified') {
            $where_field = 'status';
            $where_field_value = '0';
        } else if ($downloadFor === 'verified') {
            $where_field = 'status';
            $where_field_value = '1';
        }

        $select_fields = 'citizen_master.*, md5(citizen_master.id) as user_id, citizen_payment.payment_status ';
        $data['users'] = $this->Model_citizen_master->get_join_record('citizen_master', 'id', 'citizen_payment', 'user_id', $select_fields, $where_field,$where_field_value,'','','','citizen_master.id','desc','left');

        //var_dump($data['users']);

        $this->load->library('Generate_xlsx');
        $this->generate_xlsx->newxlsx('record-'.$downloadFor.'-'.date('d-m-Y_H-i-s'), $data['users']);
    }


    public function search()
    {
        $this->load->model('Model_tbl_states');
        $data['states'] = $this->Model_tbl_states->get_all_states();
    	$this->load->view('users/user_search',$data);
    }

    public  function filter_users(){

        $data = $this->Model_citizen_master->filter_users();
        echo json_encode($data);
    }

    public function search_user_by_filter()
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $marital = $_POST['marital'];
        $referral = $_POST['referral'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $last_qualification = $_POST['last_qualification'];
        $subject = $_POST['subject'];
        $specializations = $_POST['specializations'];
        $jobs = $_POST['jobs'];
        $payment = $_POST['payment'];

        $where = " status = '1'";
        

        if ($fname != "") {
            $where .= "and name = '$fname'"; 
        }
        if ($email != "") {
            $where .= "and email_id = '$email'"; 
        }
        if ($mobile != "") {
            $where .= "and mobile = '$mobile'"; 
        }
        if ($gender != "") {
            $where .= "and gender = '$gender'"; 
        }
        if ($marital != "") {
            $where .= "and marital_status = '$marital'"; 
        }
        if ($referral  == 'Yes') {
            $where .= "and refer_by <> ''"; 
        }
        if ($referral  == 'No') {
            $where .= "and refer_by = ''"; 
        }
        if ($pincode != "") {
            $where .= "and p_address = '$pincode'"; 
        }
        if ($city != "") {
            $where .= "and city = '$city'"; 
        }
        if ($state != "") {
            $where .= "and state = '$state'"; 
        }
        if ($last_qualification != "") {
            $where .= "and qualification = '$last_qualification'"; 
        }
        if ($subject != "") {
            $where .= "and subject_stream = '$subject'"; 
        }
        if ($specializations != "") {
            $where .= "and specializations = '$specializations'"; 
        }
        if ($jobs != "") {
            $where .= "and type_of_job = '$jobs'"; 
        }
        if ($payment != "") {
            $where .= "and payment_status = '$payment'"; 
        }

        $this->load->model('Model_citizen_master');
        $data['users'] = $this->Model_citizen_master->get_search_result_user($where);
        $this->load->view('users/table_filter_user',$data);
    }



    public function modal_user_details()
    {
        $id = $_POST['id'];
        $this->load->model('Model_citizen_master');
        $data['user'] = $this->Model_citizen_master->get_citizen_details_md5(md5($id));
        $this->load->view('users/modal_user_details',$data);

    }

    public function modal_update_placement_user()
    {
        $data['id'] = $_POST['id'];
        $data['name'] = $_POST['name'];
        $this->load->model('Model_company_master');
        $data['company'] = $this->Model_company_master->get_all_company();
        $this->load->view('users/modal_update_placement_user',$data);
    }

    public function user_placed_info()
    {
        $user_id = $_POST['user_id'];
        $company_id = $_POST['company_id'];
        $ctc_user = $_POST['ctc_user'];
        $date_of_joining = $_POST['date_of_joining'];
        $designation = $_POST['designation'];

        $this->load->model('Model_citizen_placed');
        $data_array = array(
            'user_id'=>$user_id,
            'company_id'=>$company_id,
            'ctc'=>$ctc_user,
            'date_of_joining'=>change_date_format_ymd($date_of_joining),
            'designation'=>$designation,
            'created_date_time'=>$this->current_date_time,
        );
        $data_array_id = $this->Model_citizen_placed->insert_citizen_placed($data_array);

        $data_citizen = array(
            'iss_placed'=>1,
        );

        $this->load->model('Model_citizen_master');
        $data_citizen_id = $this->Model_citizen_master->update_citizen($data_citizen,md5($user_id));

        if ($data_array_id) {
            echo "Valid";
        }
    }

    public function get_message_for_chat_modal()
    {
        $this->load->view('users/modal_chating_message');
    }

    public function send_message_to_all()
    {
        $gender =$_POST['gender'];
        $marital =$_POST['marital'];
        $referral =$_POST['referral'];
        $state =$_POST['state'];
        $city =$_POST['city'];
        $pincode =$_POST['pincode'];
        $last_qualification =$_POST['last_qualification'];
        $subject =$_POST['subject'];
        $specializations =$_POST['specializations'];
        $jobs =$_POST['jobs'];
        $payment =$_POST['payment'];
        $message_for_all = $_POST['message_for_all'];
        $user_ids =$_POST['user_ids'];

        $this->load->model('Model_message_master');
        $this->load->model('Model_message_users');
        $this->load->model('Model_chating_master');
        $this->load->model('Model_citizen_master');


        $data_array = array(
            'gender'=>$gender,
            'marital'=>$marital,
            'referral'=>$referral,
            'state'=>$state,
            'city'=>$city,
            'pincode'=>$pincode,
            'last_qualification'=>$last_qualification,
            'subject'=>$subject,
            'specializations'=>$specializations,
            'jobs'=>$jobs,
            'payment'=>$payment,
            'message_for_all'=>$message_for_all,
        );

        $data_id = $this->Model_message_master->insert_message_details($data_array);

        $user_ids = explode(',',$user_ids);
        $response = array();

        for ($i=0; $i <count($user_ids) ; $i++) { 
            $data_user = array(
                'user_id'=>$user_ids[$i],
                'message_id'=>$data_id,
            );

            $this->Model_message_users->insert_message_user($data_user);

            $data_chating['user_id'] = $user_ids[$i];
            $data_chating['sender_id'] = 'Admin';
            $data_chating['reciver_id'] = $user_ids[$i];
            $data_chating['type'] = '0';
            $data_chating['message'] = $message_for_all;
            $data_chating['created_date_time'] = $this->current_date_time;

            $data_chating_id = $this->Model_chating_master->insert_chating($data_chating);


            $user_detail = $this->Model_citizen_master->get_citizen_details_id($user_ids[$i]);

            if ($user_detail) {
                $response[] = sendPushNotificationToFCMSever('Skyvoice',$message_for_all,$user_detail->fire_base_id);
            }
        }

        if ($data_id) {
            echo "Valid";
        }

    }

    public function change_state()
    {
        $state = $_POST['state'];
        $this->load->model('Model_tbl_cities');
        $data = $this->Model_tbl_cities->get_state_cities($state);
        echo json_encode($data);
    }

    public function custom_range()
    {
        $this->load->view('users/custom_range');
    }

    public function get_users_list_custom_range()
    {
        $start_date = change_date_format_ymd($_POST['start_date']);
        $end_date = change_date_format_ymd($_POST['end_date']); 
    
        $this->load->model('Model_citizen_master');

        $data['users'] = $this->Model_citizen_master->get_custom_users($start_date,$end_date);

        $this->load->view('users/table_range_user',$data);

    }

    public function free_search()
    {
        $this->load->view('users/free_user_search');
    }

    public function search_free_user_by_filter()
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $marital = $_POST['marital'];
        $referral = $_POST['referral'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $last_qualification = $_POST['last_qualification'];
        $subject = $_POST['subject'];
        $specializations = $_POST['specializations'];
        $jobs = $_POST['jobs'];
        $payment = $_POST['payment'];

        $where = " status = '0'";
        

        if ($fname != "") {
            $where .= "and name = '$fname'"; 
        }
        if ($email != "") {
            $where .= "and email_id = '$email'"; 
        }
        if ($mobile != "") {
            $where .= "and mobile = '$mobile'"; 
        }
        if ($gender != "") {
            $where .= "and gender = '$gender'"; 
        }
        if ($marital != "") {
            $where .= "and marital_status = '$marital'"; 
        }
        if ($referral  == 'Yes') {
            $where .= "and refer_by <> ''"; 
        }
        if ($referral  == 'No') {
            $where .= "and refer_by = ''"; 
        }
        if ($pincode != "") {
            $where .= "and p_address = '$pincode'"; 
        }
        if ($city != "") {
            $where .= "and city = '$city'"; 
        }
        if ($state != "") {
            $where .= "and state = '$state'"; 
        }
        if ($last_qualification != "") {
            $where .= "and qualification = '$last_qualification'"; 
        }
        if ($subject != "") {
            $where .= "and subject_stream = '$subject'"; 
        }
        if ($specializations != "") {
            $where .= "and specializations = '$specializations'"; 
        }
        if ($jobs != "") {
            $where .= "and type_of_job = '$jobs'"; 
        }
        if ($payment != "") {
            $where .= "and payment_status = '$payment'"; 
        }

        $this->load->model('Model_citizen_master');
        $data['users'] = $this->Model_citizen_master->get_search_result_user($where);
        $this->load->view('users/table_filter_user',$data);
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
