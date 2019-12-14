<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_citizen_master extends CI_Model {

	public $table = 'citizen_master';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_citizen_details($mobile)
	{
		$sql = "SELECT *,md5(id) as user_id FROM $this->table WHERE mobile = '$mobile'";
		$res = $this->db->query($sql);
		return $res->row();
	}

    public function get_citizen_details_id($id)
    {
        $sql = "SELECT * FROM $this->table WHERE user_id = '$id'";
        $res = $this->db->query($sql);
        return $res->row();
    }

	public function insert_citizen_master($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update_citizen($data,$id)
	{
		$this->db->where("md5(id)", $id);
		$this->db->update($this->table, $data);
		return $id;
	}
	
	public function update_payment_status($data,$id)
	{
		$this->db->where("user_id", $id);
		$this->db->update($this->table, $data);
		return $id;
	}

	public function get_citizen_details_md5($id)
	{
		$sql = "SELECT *,md5(id) as user_id FROM $this->table WHERE md5(id) = '$id'";
		$res = $this->db->query($sql);
		return $res->row();
 	}	

 	public function get_all_citizen()
 	{
 		$sql = "SELECT *,md5(id) as user_id FROM $this->table";
		$res = $this->db->query($sql);
		return $res->result();
 	}

    public function get_single_citizen($user_id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $user_id";
        $res = $this->db->query($sql);
        return $res->row();
    }
    
    public function get_single_user_detail($user_id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $user_id";
        $res = $this->db->query($sql);
        return $res->result();
    }

 	public function get_all_citizen_type($type)
 	{
 		$sql = "SELECT *,md5(id) as user_id FROM $this->table WHERE status  = '$type'";
		$res = $this->db->query($sql);
		return $res->result();
 	}

 	public function get_count_today_citizen()
 	{
 		$date = date('Y-m-d');
 		$sql = "SELECT count(id) as count FROM $this->table WHERE date(created_date_time) = '$date'";
 		$res = $this->db->query($sql);
 		return $res->row()->count;
 	}

 	public function get_count_all_citizen()
 	{
 		$sql = "SELECT count(id) as count FROM $this->table ";
 		$res = $this->db->query($sql);
 		return $res->row()->count;
 	}

 	public function get_count_status_citizen($status)
 	{
 		$sql = "SELECT count(id) as count FROM $this->table WHERE status = '$status'";
 		$res = $this->db->query($sql);
 		return $res->row()->count;
 	}

 	public function get_count_users_by_date($year,$month)
    {
        $sql = "SELECT count(id) as count FROM $this->table WHERE MONTH(created_date_time) = '$month' AND YEAR(created_date_time) = '$year'";
        $res = $this->db->query($sql);
        return $res->row()->count;
    }

    public function get_count_gender_citizen($gender)
    {
    	$sql = "SELECT count(id) as count FROM $this->table WHERE gender = '$gender'";
 		$res = $this->db->query($sql);
 		return $res->row()->count;
    }

    public function get_search_result_user($where)
    {
        $sql = "SELECT * FROM $this->table WHERE $where";
        $res = $this->db->query($sql);
        return $res->result();
    }

    public function get_count_payment_citizen()
    {
        $sql = "SELECT count(id) as count FROM $this->table WHERE payment_status = '1'";
        $res = $this->db->query($sql);
        return $res->row()->count;
    }

    function getcount($table, $where)
    {
        if ($where)
        {
            $this->db->where($where);
        }
        $result = $this->db->count_all_results($table);
        // print_r($result);
        return $result;
    }

    function get_join_record($table, $field_first, $tablejointo, $field_second, $field_val, $field = '', $value = '', $field1 = '', $value1 = '', $limit = 2, $order_by = '', $order = '', $join_type = '')
    {
        $this->db->select($field_val);
        $this->db->from($table);
        if ($order_by !== '') {
            $this->db->order_by($order_by, $order);
        }
        $this->db->join($tablejointo, $tablejointo.'.'.$field_second .'='. $table.'.'.$field_first, $join_type);
        if ($field) {
            $this->db->where($table.'.'.$field, $value);
        }
        if ($field1) {
            $this->db->where($table.'.'.$field1, $value1);
        }
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            if ($limit === 1) {
                return $result->row();
            }
            else {
                return $result->result();
            }
        }
    }

    function get_search_record($field_val, $where) {

	    // select the columns
        $this->db->select($field_val);

        // main table
        $this->db->from($this->table);

        // order by details
        $this->db->order_by($this->table.'.id', 'desc');

        $this->db->join('citizen_payment', 'citizen_payment.user_id='. $this->table.'.id', 'left');

        $this->db->where($where);

        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        }
    }

    public function get_all_feedback($user_id)
    {
        $sql = "SELECT * FROM citizen_feedback where `user_id` = $user_id";
        $res = $this->db->query($sql);
        return $res->result();
    }


    /**
     * @return array
     * filter users
     */
    public  function  filter_users(){
        $sIndexColumn = "id";
        $sTable = "citizen_master";
        $sTable2 = "citizen_master";
        $aColumns = array("id","name","user_id","mobile","gender","dob","marital_status","payment_status","city","state","p_address","subject_stream","qualification","refer_by","refer_code","current_status","status");
        $aColumns2 = array("name","gender","dob","mobile","marital_status","payment_status","city","state","refer_by","status");
        /* Ordering */
        $sOrder = "order by name asc";
        if ( isset( $_POST['iSortCol_0'] ) ) {
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_POST['iSortingCols'] ) ; $i++ ) {
                if ( $_POST[ 'bSortable_'.intval($_POST['iSortCol_'.$i]) ] == "true" ) {
                    $sOrder .= $aColumns2[ intval( $_POST['iSortCol_'.$i] ) ]."
                        ".addslashes( $_POST['sSortDir_'.$i] ) .", ";
                }
            }
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" ) {
                $sOrder = "";
            }
        }
        /* Filtering */
        $sWhere = " where status != '' ";
        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $gender = $_POST['gender'];
            $sWhere .= " and gender = '".$gender."' ";
        }
        if(isset($_POST['m_status']) && !empty($_POST['m_status'])){
            $m_status = $_POST['m_status'];
            $sWhere .= " and marital_status = '".$m_status."' ";
        }
        if(isset($_POST['referral']) && !empty($_POST['referral'])){
            $sWhere .= " and refer_by != '' ";
        }
        if(isset($_POST['state']) && !empty($_POST['state'])){
            $state = $_POST['state'];
            $sWhere .= " and state = '".$state."' ";
        }
        if(isset($_POST['city']) && !empty($_POST['city'])){
            $city = $_POST['city'];
            $sWhere .= " and city = '".$city."' ";
        }
        if(isset($_POST['qualification']) && !empty($_POST['qualification'])){
            $qualification = $_POST['qualification'];
            $sWhere .= " and qualification = '".$qualification."' ";
        }
        if(isset($_POST['payments']) && !empty($_POST['payments'])){
            $payments = $_POST['payments'];
        //$sWhere .= " and city = '".$payments."' ";
        }

        if ( isset($_POST['sSearch']) && $_POST['sSearch'] != "" ) {
            $sWhere = $sWhere . "  and (";
            for ($i = 0; $i < count($aColumns2); $i++) {
                if(!empty($aColumns2[$i])) {
                    $sWhere .= $aColumns2[$i] . " LIKE '%" . addslashes($_POST['sSearch']) . "%' OR ";
                }
            }
            $sWhere = substr_replace($sWhere, "", -3);
            $sWhere .= ')';
        }

        /* Individual column filtering */
        for ( $i=0 ; $i<count($aColumns2) ; $i++ ) {
            if(!empty($aColumns2[$i])) {
                if (isset($_POST['bSearchable_' . $i]) && $_POST['bSearchable_' . $i] == "true" && $_POST['sSearch_' . $i] != '') {
                    if ($sWhere == "") {
                        $sWhere = "WHERE ";
                    } else {
                        $sWhere .= " AND ";
                    }
                    $sWhere .= $aColumns2[$i] . " LIKE '%" . addslashes($_POST['sSearch_' . $i]) . "%' ";
                }
            }
        }
        /* Paging */
        $top = (isset($_POST['iDisplayStart']))?((int)$_POST['iDisplayStart']):0 ;
        $limit = (isset($_POST['iDisplayLength']))?((int)$_POST['iDisplayLength']):10;
        $sQuery = "SELECT  ".implode(",",$aColumns)."
            FROM $sTable
            $sWhere ".(($sWhere=="")?" WHERE ":" AND ")." $sIndexColumn
            $sOrder limit $limit offset $top";

        $rResult = $this->db->query($sQuery);
        $sQueryCnt = "SELECT id FROM $sTable $sWhere" ;
        $rResultCnt = $this->db->query($sQueryCnt);
        $iFilteredTotal = $rResultCnt->num_rows();
        $sQuery = " SELECT id FROM $sTable2 $sWhere ";
        $rResultTotal = $this->db->query($sQuery);
        $iTotal = $rResultTotal->num_rows();

        $output = array(
            "sEcho" => intval($_POST['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iTotal,
            "aaData" => array()
        );

        $hello = $rResult->result();
        $counter =(int)$_POST['iDisplayStart'];
        foreach($hello as $value) {
            $row = array();
            $counter++;
            $row = array();
            $row[] = $value->name;
            $row[] = $value->gender;
            $row[] = $value->dob;
            $row[] = $value->mobile;
            $row[] = $value->marital_status;
//            $row[] = $value->email_id;
            $row[] =  ($value->payment_status == NULL || $value->payment_status == '' ? 'N/A' : $value->payment_status == '0' ? 'Not Done' : 'Done');
            $row[] = $value->p_address;
            $row[] = ($value->refer_by == '' ? 'No' : 'Yes');
            $stat = '<a class="btn btn-info btn-xs" href="'. base_url('users/feedback/'.md5($value->id)).'"><i class="fa fa-book"></i></a>';
            if($value->status == 0){
                $stat .= '<a href="javascript:void(0);" class="btn btn-danger btn-xs" onclick="show_modal_update_status(\'$value->user_id\',\'$value->name\')"><i class="fa fa-times" aria-hidden="true"></i></a>';
            }else{
                $stat .= '<a href="javascript:void(0);" class="btn btn-warning btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>';
            }
            $row[] = $stat;
            If (!empty($row)) { $output['aaData'][] = $row; }
        }
        return $output ;
    }


    public function get_state_cities($state)
    {
        $sql = "SELECT city FROM $this->table WHERE  state = '$state' group by city order by city asc";
        $res = $this->db->query($sql);
        return $res->result();
    }

    public function get_total_user_by_date($start_date,$end_date)
    {
        $sql = "SELECT count(id) as count FROM $this->table WHERE date(created_date_time) <= '$start_date' and date(created_date_time) >= '$end_date'";
        $res = $this->db->query($sql);
        return $res->row()->count;
    }

    public function get_status_user_by_date($start_date,$end_date,$status)
    {
        $sql = "SELECT count(id) as count FROM $this->table WHERE status = '$status' and date(created_date_time) <= '$start_date' and date(created_date_time) >= '$end_date'";
        $res = $this->db->query($sql);
        return $res->row()->count;
    }

    public function get_payment_user_by_date($start_date,$end_date)
    {
        $sql = "SELECT count(id) as count FROM $this->table WHERE date(created_date_time) <= '$start_date' and date(created_date_time) >= '$end_date' and payment_status = '1'";
        $res = $this->db->query($sql);
        return $res->row()->count;
    }

    public function get_gender_user_by_date($start_date,$end_date,$gender)
    {
        $sql = "SELECT count(id) as count FROM $this->table WHERE date(created_date_time) <= '$start_date' and date(created_date_time) >= '$end_date' and gender = '$gender'";
        $res = $this->db->query($sql);
        return $res->row()->count;
    }

    public function get_custom_users($start_date,$end_date)
    {
        $sql = "SELECT * FROM $this->table WHERE date(created_date_time) <= '$start_date' and date(created_date_time) >= '$end_date'";
        $res = $this->db->query($sql);
        return $res->result();
    }

    
}

/* End of file Model_citizen_master.php */
/* Location: ./application/models/Model_citizen_master.php */
