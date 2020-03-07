<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save($d){
		$this->db->insert('modules',$d);
        return $this->db->insert_id();	
	}
	public  function mlist($id){
		$this->db->select('m_id,m_name,m_status,created_at')->from('modules');
		$this->db->where('created_by',$id);
		$this->db->where('m_status !=',2);
		return $this->db->get()->result_array();
	}
	public  function update($id,$data){
		$this->db->where('m_id',$id);
		return $this->db->update('modules',$data);
	}
	public  function get_m_details($id){
		$this->db->select('m_id,m_name,m_status,created_at')->from('modules');
		$this->db->where('m_id',$id);
		return $this->db->get()->row_array();
	}
	public  function check($name){
		$this->db->select('m_id')->from('modules');
		$this->db->where('m_name',$name);
		$this->db->where('m_status !=',2);
		return $this->db->get()->row_array();
	}
	public  function get_module(){
		$this->db->select('m_id,m_name')->from('modules');
		$this->db->where('m_status',1);
		return $this->db->get()->result_array();
	}
	//menu
	public  function save_menu($add){
		$this->db->insert('modules_menu',$add);
        return $this->db->insert_id();	
	}
	public  function check_modulemenu($name,$menu){
		$this->db->select('m_m_id')->from('modules_menu');
		$this->db->where('m_name',$name);
		$this->db->where('m_menu_name',$menu);
		$this->db->where('status !=',2);
		return $this->db->get()->row_array();
	}
	public  function menu_list($id){
		$this->db->select('mm.m_m_id,m.m_name,mm.m_menu_name,mm.m_menu_url,mm.status,mm.created_at')->from('modules_menu as mm');
		$this->db->join('modules as m','m.m_id=mm.m_name','left');
		$this->db->where('mm.created_by',$id);
		$this->db->where('mm.status !=',2);
		return $this->db->get()->result_array();
	}
	public  function menu_update($id,$data){
		$this->db->where('m_m_id',$id);
		return $this->db->update('modules_menu',$data);
	}
	public  function get_menu_details($id){
		$this->db->select('m_m_id,m_name,m_menu_name,m_menu_url,status,created_at')->from('modules_menu');
		$this->db->where('m_m_id',$id);
		return $this->db->get()->row_array();
	}
	public  function get_module_menu($id){
		$this->db->select('mm.m_m_id,mm.m_name,mm.m_menu_name')->from('modules_menu as mm');
		$this->db->where('mm.m_name',$id);
		$this->db->where('mm.status',1);
		return $this->db->get()->result_array();
	}
	
	
}