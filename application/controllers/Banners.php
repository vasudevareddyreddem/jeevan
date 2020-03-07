<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Banners extends Sidebar {
	public function __construct() {
        parent::__construct();
        $this->load->model('Banners_model');
    	
    }
    public function index(){
		if($this->session->userdata('h_details'))
		{
			$l_data=$this->session->userdata('h_details');
			$data['b_list']=$this->Banners_model->get_banners_list($l_data['a_id']);
			$this->load->view('banner/list',$data);
			$this->load->view('admin/footer');
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
    } 
	public function add(){
		if($this->session->userdata('h_details'))
		{
			$l_data=$this->session->userdata('h_details');
			$this->load->view('banner/add');
			$this->load->view('admin/footer');
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
    }
	public function edit(){
		if($this->session->userdata('h_details'))
		{
			$l_data=$this->session->userdata('h_details');
			$data['b_details']=$this->Banners_model->get_banners_details(base64_decode($this->uri->segment(3)));
			//echo '<pre>';print_r($data);exit;
			$this->load->view('banner/edit',$data);
			$this->load->view('admin/footer');
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
    }    
    public function addpost(){
		if($this->session->userdata('h_details'))
		{
			$l_data=$this->session->userdata('h_details');
			$post=$this->input->post();
			$u_l=$this->session->userdata['logged_in'];
			if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$orgimg =$_FILES["image"]["name"];
				$img =round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/banners/" . $img);
			}
			$add=array(
			'b_img'=>isset($img)?$img:'',
			'b_org_img'=>isset($orgimg)?$orgimg:'',
			'created_at'=>date('Y-m-d H:i;s'),
			'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
			);
			$save=$this->Banners_model->save($add);
			if(count($save)>0){
				$this->session->set_flashdata('success',"Banner added successfully");
				redirect('banners');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('banners/add');
			}
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function editpost(){
		$post=$this->input->post();
		$b_details=$this->Banners_model->get_banners_details($post['b_id']);
		if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=''){
			unlink('assets/banners/'.$b_details["b_img"]);
			$temp = explode(".", $_FILES["image"]["name"]);
			$orgimg =$_FILES["image"]["name"];
			$img =round(microtime(true)) . '.' . end($temp);
			move_uploaded_file($_FILES['image']['tmp_name'], "assets/banners/" . $img);
		}else{
			$orgimg =$b_details["b_org_img"];
			$img =$b_details["b_img"];
		}
		$add=array(
		'b_img'=>isset($img)?$img:'',
		'b_org_img'=>isset($orgimg)?$orgimg:'',
		'updated_at'=>date('Y-m-d H:i;s'),
		);
		$save=$this->Banners_model->update($post['b_id'],$add);
		if(count($save)>0){
			$this->session->set_flashdata('success',"Banner updated successfully");
			redirect('banners');
		}else{
			$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
			redirect('banners/edit/'.base64_encode($post['b_id']));
		}
	}
	public  function status(){
			$b_id=base64_decode($this->uri->segment(3));
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
			$update=$this->Banners_model->update($b_id,$u_data);
			if(count($update)>0){
				if($statu==0){
					$this->session->set_flashdata('success',"Banner activated successfully");
				}else{
					$this->session->set_flashdata('success',"Banner deactivated successfully");
				}
				redirect('banners');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('banners');
			}
		
	}
	public  function delete(){
			$b_id=base64_decode($this->uri->segment(3));
			$u_data=array(
				'status'=>2,
				'updated_at'=>date('Y-m-d H:i:s')
			);
			$b_details=$this->Banners_model->get_banners_details($b_id);
			$delete=$this->Banners_model->b_delete($b_id);
			if(count($delete)>0){
				unlink("assets/banners/".$b_details['b_img']);
				$this->session->set_flashdata('success',"Banner deleted successfully");
				redirect('banners');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('banners');
			}
		
	}
    
    

}