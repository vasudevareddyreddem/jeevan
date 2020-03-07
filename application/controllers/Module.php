<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Module extends Sidebar {
	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->model('Admin_model');
		$this->load->model('module_model');
	}
	public function index()
	{	
		if($this->session->userdata('h_details'))
			{
				$l_data=$this->session->userdata('h_details');
				$data['m_list']=$this->module_model->mlist($l_data['a_id']);
				$this->load->view('module/list',$data);
				$this->load->view('admin/footer');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function menulist()
	{	
		if($this->session->userdata('h_details'))
			{
				$l_data=$this->session->userdata('h_details');
				$data['m_list']=$this->module_model->menu_list($l_data['a_id']);
				$this->load->view('module/menulist',$data);
				$this->load->view('admin/footer');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public  function add(){
		if($this->session->userdata('h_details'))
			{
				$this->load->view('module/add');
				$this->load->view('admin/footer');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public  function menuadd(){
		if($this->session->userdata('h_details'))
			{
				$data['m_list']=$this->module_model->get_module();
				$this->load->view('module/menuadd',$data);
				$this->load->view('admin/footer');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function edit()
	{
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$data['m']=$this->module_model->get_m_details($m_id);
			$this->load->view('module/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function menuedit()
	{
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$data['m']=$this->module_model->get_menu_details($m_id);
			$data['m_list']=$this->module_model->get_module();
			$this->load->view('module/menuedit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function addpost(){
		if($this->session->userdata('h_details'))
			{
			$l_data=$this->session->userdata('h_details');
			$post=$this->input->post();
				foreach($post['m_name'] as $li){
					$check=$this->module_model->check($li);
					if(count($check)>0){
						$this->session->set_flashdata('error',"Module already exists. Please another module.");
						redirect('module/add');
					}
				}
				foreach($post['m_name'] as $li){
					if($li!=''){
						$add=array(
						'm_name'=>isset($li)?$li:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
						);
						$save=$this->module_model->save($add);
					}
				}
				if(count($save)>0){
					$this->session->set_flashdata('success',"Module added successfully");
					redirect('module');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
					redirect('module/add');
				}
				//echo '<pre>';print_r($post);exit;
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public  function menuaddpost(){
		if($this->session->userdata('h_details'))
			{
			$l_data=$this->session->userdata('h_details');
				$post=$this->input->post();
				$check=$this->module_model->check_modulemenu($post['m_name'],$post['m_menu_name']);
				if(count($check)>0){
					$this->session->set_flashdata('error',"Menu name already exists. Please use another one");
					redirect('module/menuadd');	
				}
				$add=array(
				'm_name'=>isset($post['m_name'])?$post['m_name']:'',
				'm_menu_name'=>isset($post['m_menu_name'])?$post['m_menu_name']:'',
				'm_menu_url'=>isset($post['m_menu_url'])?$post['m_menu_url']:'',
				'created_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
				);
				$save=$this->module_model->save_menu($add);
				if(count($save)>0){
					$this->session->set_flashdata('success',"Module menu added successfully");
					redirect('module/menulist');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
					redirect('module/menuadd');
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public  function editpost(){
	if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$m=$this->module_model->get_m_details($post['m_id']);
			if($m['m_name']!=$post['m_name']){
				$check=$this->module_model->check($post['m_name']);
				if(count($check)>0){
					$this->session->set_flashdata('error',"Module already exists. Please another module.");
					redirect('module/edit/'.base64_encode($post['m_id']));
				}
			}
			$u_data=array(
				'm_name'=>isset($post['m_name'])?$post['m_name']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
			$update=$this->module_model->update($post['m_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Module updated successfully");
				redirect('module');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('module/edit/'.base64_encode($post['m_id']));
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}			
	}
	public  function menueditpost(){
		if($this->session->userdata('h_details'))
			{
				$post=$this->input->post();
				$m=$this->module_model->get_menu_details($post['m_m_id']);
				if($m['m_name']!=$post['m_name'] || $m['m_menu_name']!=$post['m_menu_name']){
					$check=$this->module_model->check_modulemenu($post['m_name'],$post['m_menu_name']);
					if(count($check)>0){
						$this->session->set_flashdata('error',"Module menu already exists. Please another module menu.");
						redirect('module/menuedit/'.base64_encode($post['m_m_id']));
					}
				}
				$u_data=array(
					'm_name'=>isset($post['m_name'])?$post['m_name']:'',
					'm_menu_name'=>isset($post['m_menu_name'])?$post['m_menu_name']:'',
					'm_menu_url'=>isset($post['m_menu_url'])?$post['m_menu_url']:'',
					'updated_at'=>date('Y-m-d H:i:s'),
					);
				$update=$this->module_model->menu_update($post['m_m_id'],$u_data);
				if(count($update)>0){
					$this->session->set_flashdata('success',"Module menu updated successfully");
					redirect('module/menulist');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
					redirect('module/menuedit/'.base64_encode($post['m_m_id']));
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}			
	}
	public  function status(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$statu=base64_decode($this->uri->segment(4));
			if($statu==1){
				$st=0;	
			}else{
				$st=1;
			}
			$u_data=array(
			'm_status'=>$st,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->module_model->update($m_id,$u_data);
			if(count($update)>0){
				if($statu=1){
					$this->session->set_flashdata('success',"Module activated successfully");
				}else{
					$this->session->set_flashdata('success',"Module deactivated successfully");
				}
				redirect('module');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('module');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function menustatus(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$statu=base64_decode($this->uri->segment(4));
			if($statu==1){
				$st=0;	
			}else{
				$st=1;
			}
			$u_data=array(
			'status'=>$st,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->module_model->menu_update($m_id,$u_data);
			if(count($update)>0){
				if($statu=1){
					$this->session->set_flashdata('success',"Module menu activated successfully");
				}else{
					$this->session->set_flashdata('success',"Module menu deactivated successfully");
				}
				redirect('module/menulist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('module/menulist');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function delete(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$u_data=array(
			'm_status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->module_model->update($m_id,$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Module deleted successfully");
				redirect('module');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('module');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function menudelete(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$u_data=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->module_model->menu_update($m_id,$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Module menu deleted successfully");
				redirect('module/menulist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('module/menulist');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
}
