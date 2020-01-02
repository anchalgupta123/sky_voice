<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_company_posted_job extends CI_Model {

	public $table = 'company_posted_job';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_post_job($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_company_job_post($id)
	{
		$sql = "SELECT * FROM $this->table WHERE company_id ='$id'";
		$res = $this->db->query($sql);
		return $res->result();
	}
	public function get_only_job($id)
	{
		$sql = "SELECT * FROM $this->table WHERE id ='$id'";
		$res = $this->db->query($sql);
		return $res->row();
	}
	// public function get_all_jobs_post()
	// {
	// 	$sql = "SELECT * FROM $this->table WHERE status='1' ORDER BY id DESC";
	// 	$res = $this->db->query($sql);
	// 	return $res->result();
	// }
	 function get_all_jobs_post($params = array())
	{
        $this->db->select('cpj.*');
        $this->db->from('company_posted_job cpj');
        $this->db->order_by('cpj.id', 'desc');
        if(array_key_exists("cpj.id",$params)){
            $this->db->where('cpj.id',$params['cpj.id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }

	// public function get_all_company()
	// {
	// 	$sql = "SELECT * FROM $this->table";
	// 	$res = $this->db->query($sql);
	// 	return $res->result();
	// }

	

	public function update_status($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
		return $id;
	}
	public function get_job_details($id)
    {
    	$sql = "SELECT * FROM $this->table WHERE id='$id'";
		$res = $this->db->query($sql);
		return $res->row();
    }
}

/* End of file Model_company_master.php */
/* Location: ./application/models/Model_company_master.php */