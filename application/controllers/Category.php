<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

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

	public function view_gk_category()
	{
		$this->load->model('Model_category_gk');
		$data['gk'] = $this->Model_category_gk->get_all_gk_details();
		$data['gk_count'] = $this->Model_category_gk->get_gk_count();
		$this->load->view('category/view_gk_category',$data);
	}

	public function add_gk_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_gk');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_gk->insert_gk_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
    public function edit_gk_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_gk');
		$data['gk'] = $this->Model_category_gk->get_gk_category_details($id);
		$this->load->view('category/modal_edit_gk_category',$data);
	}
	public function update_gk_category()
	{   
		$id = $_POST['gk_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_gk');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_gk->update_gk_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function view_gk_hindi_category()
	{
		$this->load->model('Model_category_gk_hindi');
		$data['gk'] = $this->Model_category_gk_hindi->get_all_gk_hindi_details();
		$data['gk_hindi_count'] = $this->Model_category_gk_hindi->get_gk_hindi_count();
		$this->load->view('category/view_gk_category_hindi',$data);
	}

	public function add_gk_hindi_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_gk_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_gk_hindi->insert_gk_hindi_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
    public function edit_gk_hindi_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_gk_hindi');
		$data['gk'] = $this->Model_category_gk_hindi->get_gk_hindi_category_details($id);
		$this->load->view('category/modal_edit_gk_hindi_category',$data);
	}
	public function update_gk_hindi_category()
	{   
		$id = $_POST['gk_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_gk_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_gk_hindi->update_gk_hindi_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function view_english_category()
	{
		$this->load->model('Model_category_english');
		$data['english'] = $this->Model_category_english->get_all_english_details();
		$data['english_count'] = $this->Model_category_english->get_english_count();
		$this->load->view('category/view_english_category',$data);
	}
	public function add_english_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_english');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_english->insert_english_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function edit_english_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_english');
		$data['english'] = $this->Model_category_english->get_english_category_details($id);
		$this->load->view('category/modal_edit_english_category',$data);
	}
	public function update_english_category()
	{   
		$id = $_POST['english_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_english');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_english->update_english_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function view_english_hindi_category()
	{
		$this->load->model('Model_category_english_hindi');
		$data['english'] = $this->Model_category_english_hindi->get_all_english_hindi_details();
		$data['english_hindi_count'] = $this->Model_category_english_hindi->get_english_hindi_count();
		$this->load->view('category/view_english_category_hindi',$data);
	}
	public function add_english_hindi_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_english_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_english_hindi->insert_english_hindi_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function edit_english_hindi_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_english_hindi');
		$data['english'] = $this->Model_category_english_hindi->get_english_hindi_category_details($id);
		$this->load->view('category/modal_edit_english_hindi_category',$data);
	}
	public function update_english_hindi_category()
	{   
		$id = $_POST['english_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_english_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_english_hindi->update_english_hindi_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function view_qa_category()
	{
		$this->load->model('Model_category_qa');
		$data['qa'] = $this->Model_category_qa->get_all_qa_details();
		$data['qa_count'] = $this->Model_category_qa->get_qa_count();
		$this->load->view('category/view_qa_category',$data);
	}
	public function add_qa_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_qa');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_qa->insert_qa_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function edit_qa_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_qa');
		$data['qa'] = $this->Model_category_qa->get_qa_category_details($id);
		$this->load->view('category/modal_edit_qa_category',$data);
	}
	public function update_qa_category()
	{   
		$id = $_POST['qa_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_qa');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_qa->update_qa_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function view_qa_hindi_category()
	{
		$this->load->model('Model_category_qa_hindi');
		$data['qa'] = $this->Model_category_qa_hindi->get_all_qa_hindi_details();
		$data['qa_hindi_count'] = $this->Model_category_qa_hindi->get_qa_hindi_count();
		$this->load->view('category/view_qa_category_hindi',$data);
	}
	public function add_qa_hindi_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_qa_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_qa_hindi->insert_qa_hindi_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function edit_qa_hindi_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_qa_hindi');
		$data['qa'] = $this->Model_category_qa_hindi->get_qa_hindi_category_details($id);
		$this->load->view('category/modal_edit_qa_hindi_category',$data);
	}
	public function update_qa_hindi_category()
	{   
		$id = $_POST['qa_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_qa_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_qa_hindi->update_qa_hindi_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function view_lr_category()
	{
		$this->load->model('Model_category_lr');
		$data['lr'] = $this->Model_category_lr->get_all_lr_details();
		$data['lr_count'] = $this->Model_category_lr->get_lr_count();
		$this->load->view('category/view_lr_category',$data);
	}
	public function add_lr_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_lr');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_lr->insert_lr_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function edit_lr_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_lr');
		$data['lr'] = $this->Model_category_lr->get_lr_category_details($id);
		$this->load->view('category/modal_edit_lr_category',$data);
	}
	public function update_lr_category()
	{   
		$id = $_POST['lr_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_lr');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_lr->update_lr_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
    public function view_lr_hindi_category()
	{
		$this->load->model('Model_category_lr_hindi');
		$data['lr'] = $this->Model_category_lr_hindi->get_all_lr_hindi_details();
		$data['lr_hindi_count'] = $this->Model_category_lr_hindi->get_lr_hindi_count();		
		$this->load->view('category/view_lr_category_hindi',$data);
	}
	public function add_lr_hindi_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_lr_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_lr_hindi->insert_lr_hindi_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
    public function edit_lr_hindi_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_lr_hindi');
		$data['lr'] = $this->Model_category_lr_hindi->get_lr_hindi_category_details($id);
		$this->load->view('category/modal_edit_lr_hindi_category',$data);
	}
	public function update_lr_hindi_category()
	{   
		$id = $_POST['lr_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_lr_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_lr_hindi->update_lr_hindi_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
    public function view_technical_category()
	{
		$this->load->model('Model_category_technical');
		$data['technical'] = $this->Model_category_technical->get_all_technical_details();
		$data['technical_count'] = $this->Model_category_technical->get_technical_count();
		$this->load->view('category/view_technical_category',$data);
	}
	public function add_technical_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_technical');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_technical->insert_technical_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function edit_technical_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_technical');
		$data['technical'] = $this->Model_category_technical->get_technical_category_details($id);
		$this->load->view('category/modal_edit_technical_category',$data);
	}
	public function update_technical_category()
	{   
		$id = $_POST['technical_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_technical');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_technical->update_technical_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
    public function view_technical_hindi_category()
	{
		$this->load->model('Model_category_technical_hindi');
		$data['technical'] = $this->Model_category_technical_hindi->get_all_technical_hindi_details();
		$data['technical_hindi_count'] = $this->Model_category_technical_hindi->get_technical_hindi_count();

		$this->load->view('category/view_technical_category_hindi',$data);
	}
	public function add_technical_hindi_question()
	{
		$question = $_POST['question'];
		$option1  = $_POST['option1'];
		$option2  = $_POST['option2'];
		$option3  = $_POST['option3'];
		$option4  = $_POST['option4'];
		$answer   = $_POST['answer'];

        $this->load->model('Model_category_technical_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_technical_hindi->insert_technical_hindi_question($data_category);
        if ($data_id) {
        	echo "Valid";
        }
	}public function edit_technical_hindi_modal()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_technical_hindi');
		$data['technical'] = $this->Model_category_technical_hindi->get_technical_hindi_category_details($id);
		$this->load->view('category/modal_edit_technical_hindi_category',$data);
	}
	public function update_technical_hindi_category()
	{   
		$id = $_POST['technical_id'];
		$question = $_POST['question1'];
		$option1  = $_POST['option11'];
		$option2  = $_POST['option22'];
		$option3  = $_POST['option33'];
		$option4  = $_POST['option44'];
		$answer   = $_POST['answer1'];

        $this->load->model('Model_category_technical_hindi');
        $data_category = array(
        	'question'=>$question,
        	'option1'=>$option1,
        	'option2'=>$option2,
        	'option3'=>$option3,
        	'option4'=>$option4,
        	'answer' =>$answer,
        	'created_date_time'=>$this->current_date_time,
           );

        $data_id = $this->Model_category_technical_hindi->update_technical_hindi_category($data_category,$id);
        if ($data_id) {
        	echo "Valid";
        }
	}
	public function delete_gk_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_gk');
		$data_id = $this->Model_category_gk->delete_gk_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_gk_hindi_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_gk_hindi');
		$data_id = $this->Model_category_gk_hindi->delete_gk_hindi_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_english_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_english');
		$data_id = $this->Model_category_english->delete_english_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_english_hindi_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_english_hindi');
		$data_id = $this->Model_category_english_hindi->delete_english_hindi_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_qa_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_qa');
		$data_id = $this->Model_category_qa->delete_qa_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_qa_hindi_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_qa_hindi');
		$data_id = $this->Model_category_qa_hindi->delete_qa_hindi_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_lr_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_lr');
		$data_id = $this->Model_category_lr->delete_lr_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_lr_hindi_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_lr_hindi');
		$data_id = $this->Model_category_lr_hindi->delete_lr_hindi_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_technical_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_technical');
		$data_id = $this->Model_category_technical->delete_technical_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
	public function delete_technical_hindi_category()
	{
		$id = $_POST['id'];
		$this->load->model('Model_category_technical_hindi');
		$data_id = $this->Model_category_technical_hindi->delete_technical_hindi_category($id);
		if ($data_id) {
			echo "Valid";
		}
	}
}
