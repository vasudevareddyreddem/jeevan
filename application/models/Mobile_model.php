<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	
	//*add patient*/
	public function check_mobile_num($num){
		$this->db->select('u.user_id,u.otp_verified')->from('users as u');
		$this->db->where('u.mobile',$num);
		$this->db->where('u.status',1);
        return $this->db->get()->row_array();
	}
	public function check_otp($id,$otp){
		$this->db->select('u.user_id,u.otp_verified')->from('users as u');
		$this->db->where('u.user_id',$id);
		$this->db->where('u.otp',$otp);
		$this->db->where('u.status',1);
		$this->db->where('u.otp_verified',0);
        return $this->db->get()->row_array();
	}
	public function check_user_details($id){
		$this->db->select('u.user_id,u.mobile,u.otp')->from('users as u');
		$this->db->where('u.user_id',$id);
		$this->db->where('u.status',1);
		$this->db->where('u.otp_verified',0);
        return $this->db->get()->row_array();
	}
	public  function save_user($d){
		$this->db->insert('users',$d);
		return $this->db->insert_id();
	}
	public  function update_verification($id,$d){
		$this->db->where('user_id',$id);
		return $this->db->update('users',$d);
	}
	public  function update_user($id,$d){
		$this->db->where('user_id',$id);
		return $this->db->update('users',$d);
	}
	/* user login */
	public  function check_login_details($mob){
		$this->db->select('u.user_id,u.otp_verified,u.mobile,u.name')->from('users as u');
		$this->db->where('u.mobile',$mob);
		$this->db->where('u.status',1);
		$this->db->order_by('u.user_id','desc');
        return $this->db->get()->row_array();
	}
	public  function check_login_mobile($mob){
		$this->db->select('u.user_id,u.otp_verified,u.mobile,u.name')->from('users as u');
		$this->db->where('u.mobile',$mob);
		$this->db->where('u.status',1);
        return $this->db->get()->row_array();
	}
	public  function get_user_details($id){
		$this->db->select('u.user_id,u.name,u.email,u.mobile,u.otp_verified,IF(u.address!="",u.address,"") as address,IF(u.profile_pic!="",u.profile_pic,"") as profile_pic')->from('users as u');
		$this->db->where('u.user_id',$id);
        return $this->db->get()->row_array();
	}
	public  function get_user_password($id){
		$this->db->select('u.user_id,u.password')->from('users as u');
		$this->db->where('u.user_id',$id);
        return $this->db->get()->row_array();
	}
	

	
	
	
	
}