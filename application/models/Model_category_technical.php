<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_category_technical extends CI_Model {

	public $table ='category_technical';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_technical_question($data_category)
	{
		$this->db->insert($this->table, $data_category);
		return $this->db->insert_id();
	}

	public function get_all_technical_details()
    {
        $sql = "SELECT * FROM category_technical";
        $res = $this->db->query($sql);
        return $res->result();
    }
     public function update_technical_category($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
		return $id;
	}
    public function get_technical_category_details($id)
    {
        $sql = "SELECT * FROM category_technical where id='$id'";
        $res = $this->db->query($sql);
        return $res->row();
    }
    public function get_technical_count()
	{
		$sql = "SELECT count(id) as count FROM `category_technical`";
		$res = $this->db->query($sql);
		return $res->row()->count;
	}
    public function delete_technical_category($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
		return $id;
	}
}