<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller
{

    public $current_date_time;

    public function __construct()
    {
        parent::__construct();
        if (function_exists('date_default_timezone_set')) {
            date_default_timezone_set("Asia/Kolkata");
        }
        $this->current_date_time = date('Y-m-d H:i:s');
    }

    public function index()
    {
        send_otp_sms1(8982466909, 'message');
    }

    public function user_login()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (count($data) >= 2) {
            // Send Otp
            if ($data['mode'] == 0) {
                $mobile_no = $data['mobile'];
                $otp = mt_rand(1000, 9999);

                $data_otp = array(
                    'mobile' => $mobile_no,
                    'otp' => $otp,
                    'created_date_time' => $this->current_date_time,
                );
                $this->load->model('Model_citizen_otp');
                $check_mobile = $this->Model_citizen_otp->check_mobile_otp($mobile_no);

                if (count($check_mobile) == 0) {
                    $data_otp_id = $this->Model_citizen_otp->insert_citizen_otp($data_otp);
                } else {
                    $data_otp = array(
                        'otp' => $otp,
                        'status' => 0,
                        'created_date_time' => $this->current_date_time,
                    );
                    $data_otp_id = $this->Model_citizen_otp->update_citizen_otp($data_otp, $mobile_no);
                }
                if ($data_otp_id) {
                    $message = $otp . " is your One Time Password(OTP) to verify your phone number with SkyVoie.";
                    send_otp_sms1($mobile_no, $message);
                    $json["info"] = array("message" => "OTP has been sent to your mobile number!", "status" => 200);
                    $json["data"] = array("mobile" => $mobile_no);
                    json_output($json['info']['status'], $json);
                }
            }

            // Resend otp
            if ($data['mode'] == 1) {
                $mobile_no = $data['mobile'];
                $this->load->model('Model_citizen_otp');
                $check_mobile = $this->Model_citizen_otp->check_mobile_otp($mobile_no);

                if ($check_mobile) {
                    $message = $check_mobile->otp . " is your One Time Password(OTP) to verify your phone number with SkyVoie.";
                    send_otp_sms1($mobile_no, $message);
                    $json["info"] = array("message" => "OTP has been sent to your mobile number!", "status" => 200);
                    $json["data"] = array("mobile" => $mobile_no);
                    json_output($json['info']['status'], $json);
                } else {
                    $json["info"] = array("message" => "Mobile No Is incorrect!", "status" => 201);
                    $json["data"] = array("mobile" => $mobile_no);
                    json_output($json['info']['status'], $json);
                }
            }

            // Verify Otp
            if ($data['mode'] == 2) {
                $mobile_no = $data['mobile'];
                $otp = $data['otp'];
                $this->load->model('Model_citizen_otp');
                $otp_details = $this->Model_citizen_otp->verify_user_otp_details($mobile_no, $otp);
                $data_status = array(
                    'status' => 1,
                );
                $update_citizen_otp = $this->Model_citizen_otp->update_citizen_otp($data_status, $mobile_no);
                if ($otp_details) {

                    $this->load->model('Model_citizen_master');
                    $check_citizen = $this->Model_citizen_master->get_citizen_details($mobile_no);

                    if ($check_citizen) {
                        unset($check_citizen->id);
                        $this->load->model('Model_job_experience');
                        $job_count = $this->Model_job_experience->get_citizen_expericence_count($check_citizen->user_id);
                        $check_citizen->job_count = $job_count;
                        $check_citizen->created_date_time = change_date_format_dmy($check_citizen->created_date_time);

                        $check_citizen->created_date_time = strtotime($check_citizen->created_date_time);
                        $check_citizen->created_date_time = date("d-m-Y", strtotime("+7 day", $check_citizen->created_date_time));
                        $json["info"] = array("message" => "OTP verified!", "status" => 200);
                        $json["data"] = $check_citizen;
                        json_output($json['info']['status'], $json);
                    } else {
                        $data_citizen = array(
                            'mobile' => $mobile_no,
                            'refer_code' => random_num(6),
                            'fire_base_id' => $data['fire_base_id'],
                        );
                        $data_citizen_id = $this->Model_citizen_master->insert_citizen_master($data_citizen);
                        $check_citizen = $this->Model_citizen_master->get_citizen_details($mobile_no);
                        $check_citizen->created_date_time = change_date_format_dmy($check_citizen->created_date_time);

                        $check_citizen->created_date_time = strtotime($check_citizen->created_date_time);
                        $check_citizen->created_date_time = date("d-m-Y", strtotime("+7 day", $check_citizen->created_date_time));
                        $this->load->model('Model_job_experience');
                        $job_count = $this->Model_job_experience->get_citizen_expericence_count($check_citizen->user_id);
                        $check_citizen->job_count = $job_count;
                        unset($check_citizen->id);
                        $json["info"] = array("message" => "OTP verified!", "status" => 200);
                        $json["data"] = $check_citizen;
                        json_output($json['info']['status'], $json);
                    }
                } else {
                    $json["info"] = array("message" => "Otp is incorrect!", "status" => 201);
                    $json["data"] = array("mobile" => $mobile_no);
                    json_output($json['info']['status'], $json);
                }
            }
        }
    }

    public function user_login_with_id()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        
        $this->load->model('Model_citizen_master');
        $check_citizen = $this->Model_citizen_master->get_citizen_details_id($data['user_id']);
        $this->load->model('Model_job_experience');
        $job_count = $this->Model_job_experience->get_citizen_expericence_count($data['user_id']);
        $check_citizen->job_count = $job_count;
        $check_citizen->created_date_time = change_date_format_dmy($check_citizen->created_date_time);
        $check_citizen->created_date_time = strtotime($check_citizen->created_date_time);
        $check_citizen->created_date_time = date("d-m-Y", strtotime("+7 day", $check_citizen->created_date_time));

        if ($check_citizen) {
            // unset($check_citizen->id);
            $json["info"] = array("message" => "Data Found!", "status" => 200);
            $json["data"] = $check_citizen;
            json_output($json['info']['status'], $json);
        } else {
            $json["info"] = array("message" => "No Data Found!", "status" => 203);
            json_output($json['info']['status'], $json);
        }
    }

    public function user_profile()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (count($data) >= 2) {
            // Save Profile
            if ($data['mode'] == 0) {

                $data_citizen = array();
                if (isset($data['user_id'])) {
                    $data_citizen['user_id'] = $data['user_id'];
                }
                if (isset($data['name'])) {
                    $data_citizen['name'] = $data['name'];
                }
                if (isset($data['gender'])) {
                    $data_citizen['gender'] = $data['gender'];
                }
                if (isset($data['dob'])) {
                    $data_citizen['dob'] = $data['dob'];
                }
                if (isset($data['mobile'])) {
                    $data_citizen['mobile'] = $data['mobile'];
                }
                if (isset($data['marital_status'])) {
                    $data_citizen['marital_status'] = $data['marital_status'];
                }
                if (isset($data['email_id'])) {
                    $data_citizen['email_id'] = $data['email_id'];
                }
                if (isset($data['address'])) {
                    $data_citizen['address'] = $data['address'];
                }
                if (isset($data['father_name'])) {
                    $data_citizen['father_name'] = $data['father_name'];
                }
                if (isset($data['p_address'])) {
                    $data_citizen['p_address'] = $data['p_address'];
                }
                if (isset($data['city'])) {
                    $data_citizen['city'] = $data['city'];
                }
                if (isset($data['state'])) {
                    $data_citizen['state'] = $data['state'];
                }
                if (isset($data['current_status'])) {
                    $data_citizen['current_status'] = $data['current_status'];
                }
                if (isset($data['qualification'])) {
                    $data_citizen['qualification'] = $data['qualification'];
                }
                if (isset($data['subject_stream'])) {
                    $data_citizen['subject_stream'] = $data['subject_stream'];
                }
                if (isset($data['specializations'])) {
                    $data_citizen['specializations'] = $data['specializations'];
                }
                if (isset($data['graduation'])) {
                    $data_citizen['graduation'] = $data['graduation'];
                }
                if (isset($data['post_graduation'])) {
                    $data_citizen['post_graduation'] = $data['post_graduation'];
                }
                if (isset($data['other_degree'])) {
                    $data_citizen['other_degree'] = $data['other_degree'];
                }
                if (isset($data['refer_by'])) {
                    $data_citizen['refer_by'] = $data['refer_by'];
                }
                if (isset($data['identity'])) {
                    $data_citizen['identity'] = $data['identity'];
                }
                if (isset($data['id_number'])) {
                    $data_citizen['id_number'] = $data['id_number'];
                }
                if (isset($data['type_of_job'])) {
                    $data_citizen['type_of_job'] = rtrim($data['type_of_job'],',');
                }
                $this->load->model('Model_citizen_master');
                $data_citizen_id = $this->Model_citizen_master->update_citizen($data_citizen, $data['user_id']);
                $user_data = $this->Model_citizen_master->get_citizen_details_md5($data_citizen_id);

                $user_data->created_date_time = change_date_format_dmy($user_data->created_date_time);

                $user_data->created_date_time = strtotime($user_data->created_date_time);
                $user_data->created_date_time = date("d-m-Y", strtotime("+7 day", $user_data->created_date_time));

                $this->load->model('Model_job_experience');
                $job_count = $this->Model_job_experience->get_citizen_expericence_count($data['user_id']);
                $user_data->job_count = $job_count;

                if ($user_data) {
                    unset($user_data->id);
                    $json["info"] = array("message" => "Success!", "status" => 200);
                    $json["data"] = $user_data;
                    json_output($json['info']['status'], $json);
                }
            }
        }
    }

    public function job_experience()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['mode'] == 0) {
            $user_id = $data['user_id'];
            $job = $data['job'];
            $this->load->model('Model_job_experience');
            for ($i = 0; $i < count($job); $i++) {
                $data_job = array(
                    'user_id' => $user_id,
                    'company_name' => $job[$i]['company_name'],
                    'designation' => $job[$i]['designation'],
                    'state_date' => $job[$i]['state_date'],
                    'end_date' => $job[$i]['end_date'],
                    'ctc' => $job[$i]['ctc'],
                    'created_date_time' => $this->current_date_time,
                );

                $data_id = $this->Model_job_experience->insert_job_experience($data_job);
            }
            $json["info"] = array("message" => "Success!", "status" => 200);
            json_output($json['info']['status'], $json);
        }
    }
    
    public function feedback()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['mode'] == 0) {
           // print_r($data);

            $feedback_data = array(
                'name'=>$data['name'],
                'email'=>$data['email'],
                'user_id'=>$data['user_id'],
                'message'=>$data['message'],
            );

            $this->load->model('Model_feedback');
            $feedback_id = $this->Model_feedback->insert_feedback($feedback_data);

            if ($feedback_id) {
                $json["info"] = array("message" => "success", "status" => 200);
                json_output($json['info']['status'],$json);
            }
            else
            {
                $json["info"] = array("message" => "Failed", "status" => 201);
                json_output(200,$json);
            }
        }
    }
    
    public function payment_status()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['mode'] == 0) {
           //print_r($data);
            $currentDate = date("Y-m-d");
            $newdate = strtotime(date("Y-m-d", strtotime($currentDate)) . " +1 year");
            $end_date = date('Y-m-d', $newdate);
            $payment_data = array(
                'user_id'=>$data['user_id'],
                'payment'=>$data['payment'],
                /*'transaction_id'=>$data['transaction_id'],*/
                'end_date' =>$end_date,
                'payment_status' =>$data['payment_status']
            );

            $this->load->model('Model_citizen_payment');
            $payment_id = $this->Model_citizen_payment->insert_citizen_payment($payment_data);

            if ($payment_id) {
                $data1 = array(
                	'payment_status' => $data['payment_status'],
                	'end_date'=>$end_date,
            	);
                $this->db->where('user_id', $data['user_id']);
                $this->db->update('citizen_master',$data1);
                $json["info"] = array("message" => "success", "status" => 200);
                $json['data'] = array("end_date"=>$end_date);
                json_output($json['info']['status'],$json);
            }
            else
            {
                $json["info"] = array("message" => "Failed", "status" => 201);
                json_output(200,$json);
            }
        }
    }

    public function chating_details()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['mode'] == 0) {
            $this->load->model('Model_chating_master');
            $data_chating['user_id'] = $data['user_id'];
            $data_chating['sender_id'] = $data['user_id'];
            $data_chating['reciver_id'] = 'Admin';
            $data_chating['type'] = '1';
            $data_chating['message'] = $data['message'];
            $data_chating['created_date_time'] = $this->current_date_time;

            $data_chating_id = $this->Model_chating_master->insert_chating($data_chating);

            if ($data_chating_id) {
                $json["info"] = array("message" => "success", "status" => 200);
                json_output($json['info']['status'],$json);
            }
            else
            {
                $json["info"] = array("message" => "Failed", "status" => 201);
                json_output($json['info']['status'],$json);
            }
        }
        if ($data['mode'] == 1) {
            $this->load->model('Model_chating_master');
            $user_id = $data['user_id'];
            $chating = $this->Model_chating_master->get_user_chating($user_id);
            if (count($chating)==0) {
                $data_chating['user_id'] = $user_id;
                $data_chating['sender_id'] = 'Admin';
                $data_chating['reciver_id'] = $user_id;
                $data_chating['type'] = '0';
                $data_chating['message'] = 'Thank you for registring with us/n/nTeam Skyvoice';
                $data_chating['created_date_time'] = $this->current_date_time;

                $this->load->model('Model_chating_master');
                $data_chating_id = $this->Model_chating_master->insert_chating($data_chating);
            }
            $chating = $this->Model_chating_master->get_user_chating($user_id);
            $json["info"] = array("message" => "success", "status" => 200);
            $json["data"] = $chating;
            json_output($json['info']['status'],$json);
        }
    }

    public function subject_stream()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['mode'] == 0) {
            $qualification = $data['qualification'];
            if ($qualification == '12th') {
                $data_subject = array('Maths','Biology','Commerce','Arts','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_subject;
                json_output($json['info']['status'],$json);
            }
            if ($qualification == 'Diploma') {
                $data_subject = array('ITI','Polytechnic','Paramedical','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_subject;
                json_output($json['info']['status'],$json);
            }
            if ($qualification == 'Graduate') {
                $data_subject = array('BE/BTech','BSc','BCom','BCA','BBA','BA','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_subject;
                json_output($json['info']['status'],$json);
            }
            if ($qualification == 'Post Graduate') {
                $data_subject = array('ME/MTech','MSc','MCom','MCA','MBA','MA','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_subject;
                json_output($json['info']['status'],$json);
            }
        }
        if ($data['mode'] == 1) {
            $subject = $data['subject'];
            if ($subject == 'ITI') {
                $data_specification = array('Computer','Civil','Mechanical','Electrician','Plumber','Surveyor','Electrical','Machine Tools','Welder','Fireman','Cookery','Paint Technology','Other');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'Polytechnic') {
                $data_specification = array('Computer Science','Infomation Technology','Civil','Mechanical','Electrical','Electronics and Communication','EEE','Chemical','Bio Technology','Aeronautical','Architecture','Agriculture','Bio Medical','Marine Technology','Mining Technology','Leather Technology','Textile Technology','Petroleun Technology','Plastic Technology','Ruber Technology','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'Paramedical') {
                $data_specification = array('DLMT','DHFM','DOA','DOT','Health Inspector','Sanitary Inspector','Other');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'BE/BTech') {
                $data_specification = array('Computer Science','Infomation Technology','Civil','Mechanical','Electrical','Electronics and Communication','EEE','Chemical','Industrial','Ceramic','Bio Technology','Aeronautical','Agriculture','Bio Medical','Marine','Mining','Silk & Textile','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'BSc') {
                $data_specification = array('PCM','MEC','CBZ','CPZ','Applied Mathematics','Horticulture','Computer Science','Home Science','Bio Chemistry','Micro Biology','Bio Technology','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'BCom') {
                $data_specification = array('Regular','Computer','Bank Management','Tex Process','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'BBA') {
                $data_specification = array('Finance','Marketing','HR','International Businesss','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'BA') {
                $data_specification = array('HEP','HTP','Linguistics','Economics','Psychology','Fine Arts','Political Science','Sociology','Library Science','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'ME/MTech') {
                $data_specification = array('Computer Science','Infomation Technology','Civil','Mechanical','Electrical','Electronics and Communication','EEE','Chemical','Industrial','Ceramic','Bio Technology','Aeronautical','Agriculture','Bio Medical','Marine','Mining','Silk & Textile','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'MSc') {
                $data_specification = array('Chemistry','Mathematics','Botany','Zoology','Physics','Home Science','Anthropology','Psychology','Bio Chemistry','Bio Technology','Micro Biology','Virology','Computers','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'MA') {
                $data_specification = array('HEP','HTP','Linguistics','Economics','Psychology','Fine Arts','Political Science','Sociology','Library Science','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'MBA') {
                $data_specification = array('Finance','Marketing','HR','International Businesss','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
            if ($subject == 'MCom') {
                $data_specification = array('Regular','Computer','Bank Management','Tex Process','Others');
                $json["info"] = array("message" => "success", "status" => 200);
                $json["data"] = $data_specification;
                json_output($json['info']['status'],$json);
            }
        }
    }

    public function demo_firebase()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $reg_id = $data['fire_base_id'];
        $message = $data['message'];

        // $info = sendPushNotificationToFCMSever('Skyvoice',$message,$reg_id);
        $info = send_firebase_notification($message,$reg_id);
        $info = json_decode($info);

        $json["info"] = array("message" => "success", "status" => 200);
        $json["data"] = $info;
        json_output($json['info']['status'],$json);
    }

    public function state_details()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['mode'] == 0) {
            $this->load->model('Model_tbl_states');
            $state = $this->Model_tbl_states->get_all_states();
            $json["info"] = array("message" => "success", "status" => 200);
            $json["data"] = $state;
            json_output($json['info']['status'],$json);
        }
        if ($data['mode'] == 1) {
            $state = $data['state'];
            $this->load->model('Model_tbl_cities');
            $cities = $this->Model_tbl_cities->get_state_cities($state);
            $json["info"] = array("message" => "success", "status" => 200);
            $json["data"] = $cities;
            json_output($json['info']['status'],$json);
        }
    }
}
