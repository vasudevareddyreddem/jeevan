<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Banners_model extends CI_Model
{
	function __construct() {
        parent::__construct();
    }

    public  function save($d){
		$this->db->insert('banners',$d);
		return $this->db->insert_id();
	}
	
	public function get_hospital_city(){
		$this->db->select('city')->from('hospital');
		$this->db->group_by('city');
		$this->db->where('status',1);
		return $this->db->get()->result_array();	
	}
	public  function get_banners_list($id){
		$this->db->select('*')->from('banners');
		$this->db->where('created_by',$id);
		$this->db->where('status !=',2);
		return $this->db->get()->result_array();		
	}
	public  function get_banners_details($id){
		$this->db->select('*')->from('banners');
		$this->db->where('b_id',$id);
		return $this->db->get()->row_array();		
	}
	public  function update($id,$d){
		$this->db->where('b_id',$id);
		return $this->db->update('banners',$d);		
	}	
	public  function b_delete($bid){
		$this->db->where('b_id',$bid);
		return $this->db->delete('banners');	
	}
	
}